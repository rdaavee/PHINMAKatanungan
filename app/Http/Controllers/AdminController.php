<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Student;
use App\Models\Teacher;
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
        $teacherData = Teacher::pluck('teacher_id')->toArray();
        $studentData = Student::pluck('student_id')->toArray();

        $shsMale = Student::where('department_id', 'SHS')
                        ->where('gender', 'Male')
                        ->count();

        $shsFemale = Student::where('department_id', 'SHS')
                        ->where('gender', 'Female')
                        ->count();

        $citeMale = Student::where('department_id', 'CITE')
                        ->where('gender', 'Male')
                        ->count();

        $citeFemale = Student::where('department_id', 'CITE')
                        ->where('gender', 'Female')
                        ->count();

        $ceaMale = Student::where('department_id', 'CEA')
                        ->where('gender', 'Male')
                        ->count();

        $ceaFemale = Student::where('department_id', 'CEA')
                        ->where('gender', 'Female')
                        ->count();

        $cahsMale = Student::where('department_id', 'CAHS')
                        ->where('gender', 'Male')
                        ->count();

        $cahsFemale = Student::where('department_id', 'CAHS')
                        ->where('gender', 'Female')
                        ->count();

        $ccjeMale = Student::where('department_id', 'CCJE')
                        ->where('gender', 'Male')
                        ->count();

        $ccjeFemale = Student::where('department_id', 'CCJE')
                        ->where('gender', 'Female')
                        ->count();

        $celaMale = Student::where('department_id', 'CELA')
                        ->where('gender', 'Male')
                        ->count();

        $celaFemale = Student::where('department_id', 'CELA')
                        ->where('gender', 'Female')
                        ->count();
                        
        $cmaMale = Student::where('department_id', 'CMA')
                        ->where('gender', 'Male')
                        ->count();

        $cmaFemale = Student::where('department_id', 'CMA')
                        ->where('gender', 'Female')
                        ->count();

        $chartData = [
            [
                'label' => 'SHS Male',
                'value' => $shsMale,
            ],
            [
                'label' => 'SHS Female',
                'value' => $shsFemale,
            ],
            [
                'label' => 'CITE Male',
                'value' => $citeMale,
            ],
            [
                'label' => 'CITE Female',
                'value' => $citeFemale,
            ],
            [
                'label' => 'CEA Male',
                'value' => $ceaMale,
            ],
            [
                'label' => 'CEA Female',
                'value' => $ceaFemale,
            ],
            [
                'label' => 'CAHS Male',
                'value' => $cahsMale,
            ],
            [
                'label' => 'CAHS Female',
                'value' => $cahsFemale,
            ],
            [
                'label' => 'CCJE Male',
                'value' => $ccjeMale,
            ],
            [
                'label' => 'CCJE Female',
                'value' => $ccjeFemale,
            ],
            [
                'label' => 'CELA Male',
                'value' => $celaMale,
            ],
            [
                'label' => 'CELA Female',
                'value' => $celaFemale,
            ],
            [
                'label' => 'CMA Male',
                'value' => $cmaMale,
            ],
            [
                'label' => 'CMA Female',
                'value' => $cmaFemale,
            ],
        ];
        return response()->json($chartData);
    }
}