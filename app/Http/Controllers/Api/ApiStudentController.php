<?php

namespace App\Http\Controllers\Api;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Controllers\Controller;

class ApiStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();

        return response()->json(['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreRequest $request)
    {
        try {
            $imageName = Str::random(32).".".$request->profile_picture->getClientOriginalExtension();
     
            Student::create([
                'student_id' => $request->student_id,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => $request->password,
                'year_level' => $request->year_level,
                'course_id' => $request->course_id,
                'school_id' => $request->school_id,
                'profile_picture' => $imageName
            ]);
     
            Storage::disk('public')->put($imageName, file_get_contents($request->profile_picture));
     
            return response()->json([
                'message' => "Student successfully created."
            ],200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => "Something went wrong."
            ],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($student_id)
    {
        $student = Student::find($student_id);
        if(!$student){
            return response()->json([
            'message'=>'Student Not Found.'
            ],404);
        }

        return response()->json([
            'student' => $student
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentStoreRequest $request, $student_id)
    {
        try {
            $student = Student::find($student_id);
            if(!$student){
              return response()->json([
                'message'=>'Student Not Found.'
              ],404);
            }

            $student->student_id = $request->student_id;
            $student->first_name = $request->first_name;
            $student->middle_name = $request->middle_name;
            $student->last_name = $request->last_name;
            $student->email = $request->email;
            $student->password = $request->password;
            $student->year_level = $request->year_level;
            $student->course_id = $request->course_id;
            $student->school_id = $request->school_id;

            if($request->profile_picture) {
                $storage = Storage::disk('public');
     
                if($storage->exists($student->profile_picture))
                    $storage->delete($student->profile_picture);
     
                $imageName = Str::random(32).".".$request->profile_picture->getClientOriginalExtension();
                $student->profile_picture = $imageName;
     
                $storage->put($imageName, file_get_contents($request->profile_picture));
            }
     
            $student->save();
     
            return response()->json([
                'message' => "Student successfully updated."
            ],200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => "Something went wrong."
            ],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($student_id)
    {
        $student = Student::find($student_id);
        if(!$student){
          return response()->json([
             'message'=>'Student Not Found.'
          ],404);
        }
     
        $storage = Storage::disk('public');
     
        if($storage->exists($student->profile_picture))
            $storage->delete($student->profile_picture);
     
        $student->delete();
     
        return response()->json([
            'message' => "Student successfully deleted."
        ],200);
    }
}
