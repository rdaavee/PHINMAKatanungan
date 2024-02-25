<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //WORKING
    {
        $students = Student::get();
        
        $students = Student::paginate(5);
        return view('view-students', compact('students'));

        if (request()->expectsJson()) {
            return response()->json(['students' => $students]);
        }

        return view('view-students', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-student');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|max:255|string',
            'first_name' => 'required|max:255|string',
            'middle_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'gender' => 'required|max:255|string',
            'email' => 'required|email|max:255|string|regex:/^[A-Za-z0-9._%+-]+@phinmaed\.com$/i|unique:students,email',
            'password' => 'required|min:6|max:255|string',
            'year_level' => 'required|max:255|string',
            'course_id' => 'required|max:255|string',
            'department_id' => 'required|max:255|string',
            'school_id' => 'required|max:255|string',
        ]);

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
            Log::info('Before creating student record');
            $student = Student::create($requestData);
            Log::info('After creating student record');
    
        } catch (\Exception $e) {
            Log::error('Error creating student record: ' . $e->getMessage());
        }

        return redirect('view-students')->with('status','Student Added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($student_id)
    {
        $student = Student::findOrFail($student_id);
        return view('edit-student', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $student_id)
    {

        $student = Student::findOrFail($student_id);
        $student->update($request->all());
        
        if (request()->expectsJson()) {
            return response()->json([
                'message' => "Student successfully updated."
            ],200);
        } else {
            return redirect()->back()->with('status','Student Updated.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $student_id) //WORKING
    {
        $student = Student::findOrFail($student_id);
        $student->delete();

        return redirect('view-students')->with('status','Student Deleted.');
    }
}
