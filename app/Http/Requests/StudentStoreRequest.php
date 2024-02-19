<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        if(request()->isMethod('post')) {
            return [
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
            ];
        } else {
            return [
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
            ];
        }
    }
 
    public function messages()
    {
        if(request()->isMethod('post')) {
            return [
                
            ];
        } else {
            return [
            ];   
        }
    }
}
