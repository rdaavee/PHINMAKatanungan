<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherStoreRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ApiTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();

        return response()->json(['teachers' => $teachers]);
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
    public function store(TeacherStoreRequest $request)
    {
        try {
            $imageName = Str::random(32).".".$request->profile_picture->getClientOriginalExtension();
     
            Teacher::create([
                'teacher_id' => $request -> teacher_id,
                'first_name' => $request -> first_name,
                'middle_name' => $request -> middle_name,
                'last_name' => $request -> last_name,
                'email' => $request -> email,
                'password' => $request -> password,
                'department_id' => $request -> department_id,
                'school_id' => $request -> school_id,
                'profile_picture' => $imageName
            ]);
     
            Storage::disk('public')->put($imageName, file_get_contents($request->profile_picture));
     
            return response()->json([
                'message' => "Teacher successfully created."
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
    public function show($teacher_id)
    {
        $teacher = Teacher::find($teacher_id);
        if(!$teacher){
            return response()->json([
            'message'=>'Teacher Not Found.'
            ],404);
        }

        return response()->json([
            'teacher' => $teacher
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherStoreRequest $request, $teacher_id)
    {
        try {
            $teacher = Teacher::find($teacher_id);
            if(!$teacher){
              return response()->json([
                'message'=>'Teacher Not Found.'
              ],404);
            }

            $teacher->teacher_id = $request->teacher_id;
            $teacher->first_name = $request->first_name;
            $teacher->middle_name = $request->middle_name;
            $teacher->last_name = $request->last_name;
            $teacher->email = $request->email;
            $teacher->password = $request->password;
            $teacher->department_id = $request->department_id;
            $teacher->school_id = $request->school_id;

            if($request->profile_picture) {
                $storage = Storage::disk('public');
     
                if($storage->exists($teacher->profile_picture))
                    $storage->delete($teacher->profile_picture);
     
                $imageName = Str::random(32).".".$request->profile_picture->getClientOriginalExtension();
                $teacher->profile_picture = $imageName;
     
                $storage->put($imageName, file_get_contents($request->profile_picture));
            }
     
            $teacher->save();
     
            return response()->json([
                'message' => "Teacher successfully updated."
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
    public function destroy($teacher_id)
    {
        $teacher = Teacher::find($teacher_id);
        if(!$teacher){
          return response()->json([
             'message'=>'Teacher Not Found.'
          ],404);
        }
     
        $storage = Storage::disk('public');
     
        if($storage->exists($teacher->profile_picture))
            $storage->delete($teacher->profile_picture);
     
        $teacher->delete();
     
        return response()->json([
            'message' => "Teacher successfully deleted."
        ],200);
    }
}
