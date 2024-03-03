<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function loginHandler(Request $request)
    {
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $validator = null;
        if ($fieldType == 'email') {
            $validator = Validator::make($request->all(), [
                'login_id' => 'required|email|exists:admins,email',
                'password' => 'required|min:6'
            ], [
                'login_id.required' => 'Email or Username is required',
                'login_id.email' => 'Invalid email address',
                'login_id.exists' => 'Email does not exist in the system',
                'password.required' => 'Password is required'
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'login_id' => 'required|exists:admins,username',
                'password' => 'required|min:6'
            ], [
                'login_id.required' => 'Email or Username is required',
                'login_id.exists' => 'Username does not exist in the system',
                'password.required' => 'Password is required'
            ]);
        }

        if ($validator->fails()) {
            if ($request->wantsJson()) {
                throw ValidationException::withMessages($validator->errors()->toArray());
            } else {
                return redirect()->route('admin.login')->withInput()->withErrors($validator);
            }
        }

        $credentials = [
            $fieldType => $request->login_id,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            if ($request->wantsJson()) {
                return response()->json(['redirect_url' => route('admin.admin-panel')]);
            } else {
                return redirect()->route('admin.admin-panel');
            }
        } else {
            if ($request->wantsJson()) {
                throw ValidationException::withMessages(['login' => [trans('auth.failed')]]);
            } else {
                return redirect()->route('admin.login')->withInput()->withErrors(['login' => trans('auth.failed')]);
            }
        }
    }

    public function logoutHandler(Request $request)
    {
        Auth::guard('admin')->logout();
        if ($request->wantsJson()) {
            return response()->json(['message' => 'Successfully logged out']);
        } else {
            return redirect()->route('admin.login')->with('success', 'Successfully logged out');
        }
    }

    public function announcement_page() {
        $announcements = Announcement::orderBy('created_at', 'desc')->paginate(8);
        return view('announcement', ['announcements' => $announcements]);

    }

    public function add_announcement(Request $request) {
        $announcement = new Announcement;

        $announcement->title = $request->title;
        $announcement->content = $request->content;
        $announcement->status = $request->status ?? 'Active';
        
        $announcement->save();

        return redirect()->back();
    }

    public function viewEditAnnouncement($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('edit-announcement', ['announcement' => $announcement]);
    }

    public function updateAnnouncement(Request $request, $id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->update($request->all());

        return redirect()->back()->with('status','Post Updated.');
    }

    public function chartData() {

        // TEACHERS
        $teacherSHS = User::where('year_level', 'SHS')
                        ->where('user_role', 'Teacher')
                        ->count();

        $teacherCITE = User::where('department_id', 'CITE')
                        ->where('user_role', 'Teacher')
                        ->count();

        $teacherCEA = User::where('department_id', 'CEA')
                        ->where('user_role', 'Teacher')
                        ->count();

        $teacherCAHS = User::where('department_id', 'CAHS')
                        ->where('user_role', 'Teacher')
                        ->count();

        $teacherCCJE = User::where('department_id', 'CCJE')
                        ->where('user_role', 'Teacher')
                        ->count();

        $teacherCELA = User::where('department_id', 'CELA')
                        ->where('user_role', 'Teacher')
                        ->count();

        $teacherCMA = User::where('department_id', 'CMA')
                        ->where('user_role', 'Teacher')
                        ->count();

        // STUDENTS
        $studentSHS = User::where('department_id', 'SHS')
                        ->where('user_role', 'Student')
                        ->count();

        $studentCITE = User::where('department_id', 'CITE')
                        ->where('user_role', 'Student')
                        ->count();

        $studentCEA = User::where('department_id', 'CEA')
                        ->where('user_role', 'Student')
                        ->count();

        $studentCAHS = User::where('department_id', 'CAHS')
                        ->where('user_role', 'Student')
                        ->count();

        $studentCCJE = User::where('department_id', 'CCJE')
                        ->where('user_role', 'Student')
                        ->count();

        $studentCELA = User::where('department_id', 'CELA')
                        ->where('user_role', 'Student')
                        ->count();

        $studentCMA = User::where('department_id', 'CMA')
                        ->where('user_role', 'Student')
                        ->count();

        $teachersChartData = [
            [
                'label' => 'SHS',
                'value' => $teacherSHS,
            ],
            [
                'label' => 'CITE',
                'value' => $teacherCITE,
            ],
            [
                'label' => 'CEA',
                'value' => $teacherCEA,
            ],
            [
                'label' => 'CAHS',
                'value' => $teacherCAHS,
            ],
            [
                'label' => 'CCJE',
                'value' => $teacherCCJE,
            ],
            [
                'label' => 'CELA',
                'value' => $teacherCELA,
            ],
            [
                'label' => 'CMA',
                'value' => $teacherCMA,
            ],
        ];

        $studentsChartData = [
            [
                'label' => 'SHS',
                'value' => $studentSHS,
            ],
            [
                'label' => 'CITE',
                'value' => $studentCITE,
            ],
            [
                'label' => 'CEA',
                'value' => $studentCEA,
            ],
            [
                'label' => 'CAHS',
                'value' => $studentCAHS,
            ],
            [
                'label' => 'CCJE',
                'value' => $studentCCJE,
            ],
            [
                'label' => 'CELA',
                'value' => $studentCELA,
            ],
            [
                'label' => 'CMA',
                'value' => $studentCMA,
            ],
        ];

        $SHS = User::where('account_status', 'Active')
                    ->where('year_level', 'SHS')
                    ->count();
        $CITE = User::where('account_status', 'Active')
                    ->where('department_id', 'CITE')
                    ->count();
        $CEA = User::where('account_status', 'Active')
                    ->where('department_id', 'CEA')
                    ->count();
        $CAHS = User::where('account_status', 'Active')
                    ->where('department_id', 'CAHS')
                    ->count();
        $CCJE = User::where('account_status', 'Active')
                    ->where('department_id', 'CCJE')
                    ->count();
        $CELA = User::where('account_status', 'Active')
                    ->where('department_id', 'CELA')
                    ->count();
        $CMA = User::where('account_status', 'Active')
                    ->where('department_id', 'CMA')
                    ->count();

        $banned = User::where('account_status', 'Banned')
                    ->count();

        $activeChartData = [
            [
                'label' => 'SHS',
                'value' => $SHS,
            ],
            [
                'label' => 'CITE',
                'value' => $CITE,
            ],
            [
                'label' => 'CEA',
                'value' => $CEA,
            ],
            [
                'label' => 'CAHS',
                'value' => $CAHS,
            ],
            [
                'label' => 'CCJE',
                'value' => $CCJE,
            ],
            [
                'label' => 'CELA',
                'value' => $CELA,
            ],
            [
                'label' => 'CMA',
                'value' => $CMA,
            ],
            [
                'label' => 'Banned',
                'value' => $banned,
            ],
        ];
        return response()->json([
            'teachersChartData' => $teachersChartData,
            'studentsChartData' => $studentsChartData,
            'activeChartData' => $activeChartData,
        ]);
    }
}