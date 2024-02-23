<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $rules = [
            'student_id' => 'required|max:255|string',
            'first_name' => 'required|max:255|string',
            'middle_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'email' => [
                'required',
                'email',
                'max:255',
                'string',
                'regex:/^[A-Za-z0-9._%+-]+@phinmaed\.com$/i',
                Rule::unique('students')->ignore($this->route('student_id'), 'student_id'),
            ],
            'password' => 'required|min:6|string',
            'year_level' => 'required|max:255|string',
            'course_id' => 'required|max:255|string',
            'school_id' => 'required|max:255|string',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:204800'
        ];
    
        return $rules;
    }
 
    public function messages()
    {
        if(request()->isMethod('post')) {
            return [
                'student_id.required' => 'ID is required!',
                'first_name.required' => 'First name is required!',
                'middle_name.required' => 'Middle name is required!',
                'last_name.required' => 'Last name is required!',
                'email.required' => 'Email is required!',
                'password.required' => 'Password is required!',
                'year_level.required' => 'Year level is required!',
                'course_id.required' => 'Course is required!',
                'school_id.required' => 'School is required!',
                'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:204800',
            ];
        } else {
            return [
                'student_id.required' => 'ID is required!',
                'first_name.required' => 'First name is required!',
                'middle_name.required' => 'Middle name is required!',
                'last_name.required' => 'Last name is required!',
                'email.required' => 'Email is required!',
                'password.required' => 'Password is required!',
                'year_level.required' => 'Year level is required!',
                'course_id.required' => 'Course is required!',
                'school_id.required' => 'School is required!',
            ];   
        }
    }
}
