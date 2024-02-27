<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class UserMobileController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required|max:255|string|unique:students,student_id',
            'first_name' => 'required|max:255|string',
            'middle_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'gender' => 'required|max:255|string',
            'email' => 'required|email|max:255|string|regex:/^[A-Za-z0-9._%+-]+@phinmaed\.com$/i|unique:teachers,email',
            'password' => 'required|min:6|max:255|string',
            'year_level' => 'required|max:255|string',
            'course_id' => 'required|max:255|string',
            'department_id' => 'required|max:255|string',
            'school_id' => 'required|max:255|string',
        ], [
            'student_id.unique' => 'The student ID has already been taken.',
            'email.unique' => 'The email has already been taken.',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->messages();
            if (isset($errors['student_id'])) {
                return response($errors['student_id'][0], 422);
            }
            if (isset($errors['email'])) {
                return response($errors['email'][0], 422);
            }
            return response('Validation failed.', 422);
        }

        $requestData = [
            'student_id'=> $request->student_id,
            'first_name'=> $request->first_name,
            'middle_name'=> $request->middle_name,
            'last_name'=> $request->last_name,
            'gender'=> $request->gender,
            'email'=> $request->email,
            'password'=> $request->password,
            'year_level'=> $request->year_level,
            'course_id'=> $request->course_id,
            'department_id'=> $request->department_id,
            'school_id'=> $request->school_id,
        ];


        try {
            $student = Student::create($requestData);
            Log::info('Student Created Successfully');
            return response()->json(['message' => 'Student successfully created.'], 200);
        } catch (\Exception $e) {
            Log::error('Error creating student record: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function storeTeacher(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'teacher_id' => 'required|max:255|string',
            'first_name' => 'required|max:255|string',
            'middle_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'gender' => 'required|max:255|string',
            'email' => 'required|email|max:255|string|regex:/^[A-Za-z0-9._%+-]+@phinmaed\.com$/i|unique:teachers,email',
            'password' => 'required|min:6|string',
            'department_id' => 'required|max:255|string',
            'school_id' => 'required|max:255|string',
        ],[
            'teacher_id.unique' => 'The student ID has already been taken.',
            'email.unique' => 'The email has already been taken.',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->messages();
            if (isset($errors['teacher_id'])) {
                return response($errors['teacher_id'][0], 422);
            }
            if (isset($errors['email'])) {
                return response($errors['email'][0], 422);
            }
            return response('Validation failed.', 422);
        }

        $requestData = [
            'teacher_id' => $request -> teacher_id,
            'first_name' => $request -> first_name,
            'middle_name' => $request -> middle_name,
            'last_name' => $request -> last_name,
            'gender'=> $request->gender,
            'email' => $request -> email,
            'password' => $request -> password,
            'department_id' => $request -> department_id,
            'school_id' => $request -> school_id,
        ];

        try {
            $teacher = Teacher::create($requestData);
            Log::info('Teacher Created Successfully');
            return response()->json(['message' => 'Teacher successfully created.'], 200);
        } catch (\Exception $e) {
            Log::error('Error creating teacher record: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        $student = Student::where('email', $credentials['email'])->first();

        if ($student) {

            if (Auth::attempt($credentials)) {
                $tokenResult = $student->createToken('Personal Access Token');
                $accessToken = $tokenResult->plainTextToken;

                $student->update(['api_token' => $accessToken]);

                return response()->json(['message' => 'Student Login Successful', 'accessToken' => $accessToken], 200);
            }
        }


        $teacher = Teacher::where('email', $credentials['email'])->first();
        if ($teacher) {

            if (Auth::attempt($credentials)) {
                $tokenResult = $teacher->createToken('Personal Access Token');
                $accessToken = $tokenResult->plainTextToken;

                $teacher->update(['api_token' => $accessToken]);

                return response()->json(['message' => 'Teacher Login Successful', 'accessToken' => $accessToken], 200);
            }
        }

        return response()->json(['message' => 'Invalid Credentials'], 401);
    }
}