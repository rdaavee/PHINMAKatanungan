<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();

        $teachers = Teacher::paginate(5);
        return view('view-teachers', compact('teachers'));

        if (request() -> expectsJson()) {
            return response() -> json(['teachers' => $teachers]);
        }

        return view('view-teachers', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-teacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'teacher_id' => 'required|max:255|string',
            'first_name' => 'required|max:255|string',
            'middle_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'gender' => 'required|max:255|string',
            'email' => 'required|email|max:255|string|regex:/^[A-Za-z0-9._%+-]+@phinmaed\.com$/i|unique:teachers,email',
            'password' => 'required|min:6|string',
            'department_id' => 'required|max:255|string',
            'school_id' => 'required|max:255|string',
        ]);

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
            Log::info('Before creating teacher record');
            $teacher = Teacher::create($requestData);
            Log::info('After creating teacher record');

        } catch (Exception $e) {
            Log::error('Error creating teacher record: ' . $e -> getMessage());
        }

        return redirect('view-teachers') -> with ('status', 'Teacher Added');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($teacher_id)
    {
        $teacher = Teacher::findOrFail($teacher_id);
        return view('edit-teacher', ['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $teacher_id)
    {
        $teacher = Teacher::findOrFail($teacher_id);
        $teacher->update($request->all());
        
        if (request()->expectsJson()) {
            return response()->json([
                'message' => "Teacher successfully updated."
            ],200);
        } else {
            return redirect()->back()->with('status','Teacher Updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($teacher_id)
    {
        $teacher = Teacher::findOrFail($teacher_id);
        $teacher -> delete();

        return redirect('view-teachers') -> with('status', 'Teacher Deleted');
    }
}
