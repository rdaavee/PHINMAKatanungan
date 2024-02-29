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
        $announcements = Announcement::orderBy('created_at', 'desc')->paginate(5);
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

    public function chartData()
        {
            // TEACHERS
            $teacherSHS = User::where('department_id', 'SHS')
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
            $shsMale = User::where('department_id', 'SHS')
                            ->where('gender', 'Male')
                            ->where('user_role', 'Student')
                            ->count();

            $shsFemale = User::where('department_id', 'SHS')
                            ->where('gender', 'Female')
                            ->where('user_role', 'Student')
                            ->count();

            $citeMale = User::where('department_id', 'CITE')
                            ->where('gender', 'Male')
                            ->where('user_role', 'Student')
                            ->count();

            $citeFemale = User::where('department_id', 'CITE')
                            ->where('gender', 'Female')
                            ->where('user_role', 'Student')
                            ->count();

            $ceaMale = User::where('department_id', 'CEA')
                            ->where('gender', 'Male')
                            ->where('user_role', 'Student')
                            ->count();

            $ceaFemale = User::where('department_id', 'CEA')
                            ->where('gender', 'Female')
                            ->where('user_role', 'Student')
                            ->count();

            $cahsMale = User::where('department_id', 'CAHS')
                            ->where('gender', 'Male')
                            ->where('user_role', 'Student')
                            ->count();

            $cahsFemale = User::where('department_id', 'CAHS')
                            ->where('gender', 'Female')
                            ->where('user_role', 'Student')
                            ->count();

            $ccjeMale = User::where('department_id', 'CCJE')
                            ->where('gender', 'Male')
                            ->where('user_role', 'Student')
                            ->count();

            $ccjeFemale = User::where('department_id', 'CCJE')
                            ->where('gender', 'Female')
                            ->where('user_role', 'Student')
                            ->count();

            $celaMale = User::where('department_id', 'CELA')
                            ->where('gender', 'Male')
                            ->where('user_role', 'Student')
                            ->count();

            $celaFemale = User::where('department_id', 'CELA')
                            ->where('gender', 'Female')
                            ->where('user_role', 'Student')
                            ->count();
                            
            $cmaMale = User::where('department_id', 'CMA')
                            ->where('gender', 'Male')
                            ->where('user_role', 'Student')
                            ->count();

            $cmaFemale = User::where('department_id', 'CMA')
                            ->where('gender', 'Female')
                            ->where('user_role', 'Student')
                            ->count();

            $maleChartData = [
                [
                    'value' => $shsMale,
                ],
                [
                    'value' => $citeMale,
                ],
                [
                    'value' => $ceaMale,
                ],
                [
                    'value' => $cahsMale,
                ],
                [
                    'value' => $ccjeMale,
                ],
                [
                    'value' => $celaMale,
                ],
                [
                    'value' => $cmaMale,
                ],
            ];

            $femaleChartData = [
                [
                    'label' => 'SHS',
                    'value' => $shsFemale,
                ],
                [
                    'label' => 'CITE',
                    'value' => $citeFemale,
                ],
                [
                    'label' => 'CEA',
                    'value' => $ceaFemale,
                ],
                [
                    'label' => 'CAHS',
                    'value' => $cahsFemale,
                ],
                [
                    'label' => 'CCJE',
                    'value' => $ccjeFemale,
                ],
                [
                    'label' => 'CELA',
                    'value' => $celaFemale,
                ],
                [
                    'label' => 'CMA',
                    'value' => $cmaFemale,
                ],
            ];

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

            return response()->json([
                'maleChartData' => $maleChartData,
                'femaleChartData' => $femaleChartData,
                'teachersChartData' => $teachersChartData,
            ]);
        }

}