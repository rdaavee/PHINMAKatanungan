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
            'email' => 'required|email|max:255|string|regex:/^[A-Za-z0-9._%+-]+@phinmaed\.com$/i|unique:students,email',
            'password' => 'required|min:6|max:255|string',
            'year_level' => 'required|max:255|string',
            'course_id' => 'required|max:255|string',
            'school_id' => 'required|max:255|string',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:204800',
        ]);

        $requestData = [
            'student_id'=> $request->student_id,
            'first_name'=> $request->first_name,
            'middle_name'=> $request->middle_name,
            'last_name'=> $request->last_name,
            'email'=> $request->email,
            'password'=> $request->password,
            'year_level'=> $request->year_level,
            'course_id'=> $request->course_id,
            'school_id'=> $request->school_id,
        ];

        if ($request->hasFile('profile_picture')) {
            $fileName = time() . '.' . $request->file('profile_picture')->getClientOriginalExtension();
            $path = $request->file('profile_picture')->storeAs('profile_pictures', $fileName, 'public');
            $requestData["profile_picture"] = '/storage/' . $path;
        }

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
        
        $request->validate([
            'student_id' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|regex:/^[A-Za-z0-9._%+-]+@phinmaed\.com$/i',
            'year_level' => 'required|string|max:255',
            'course_id' => 'required|string|max:255',
            'school_id' => 'required|string|max:255',
        ]);

        Student::findOrFail($student_id)->update([
            'student_id'=> $request->student_id,
            'first_name'=> $request->first_name,
            'middle_name'=> $request->middle_name,
            'last_name'=> $request->last_name,
            'email'=> $request->email,
            'year_level'=> $request->year_level,
            'course_id'=> $request->course_id,
            'school_id'=> $request->school_id,
        ]);

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
