<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeacherStoreRequest extends FormRequest
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
                'teacher_id' => 'required|max:255|string',
                'first_name' => 'required|max:255|string',
                'middle_name' => 'required|max:255|string',
                'last_name' => 'required|max:255|string',
                'email' => [
                    'required',
                    'email',
                    'max:255',
                    'string',
                    'regex:/^[A-Za-z0-9._%+-]+@phinmaed\.com$/i',
                    Rule::unique('teachers')->ignore($this->route('teacher_id'), 'teacher_id'),
                ],
                'password' => 'required|min:6|string',
                'department_id' => 'required|max:255|string',
                'school_id' => 'required|max:255|string',
                'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:204800'
            ];
        
            return $rules;
    }
 
    public function messages()
    {
        if(request()->isMethod('post')) {
            return [
                'teacher_id.required' => 'ID is required!',
                'first_name.required' => 'First name is required!',
                'middle_name.required' => 'Middle name is required!',
                'last_name.required' => 'Last name is required!',
                'email.required' => 'Email is required!',
                'password.required' => 'Password is required!',
                'department_id.required' => 'Department is required!',
                'school_id.required' => 'School is required!',
            ];
        } else {
            return [
                'teacher_id.required' => 'ID is required!',
                'first_name.required' => 'First name is required!',
                'middle_name.required' => 'Middle name is required!',
                'last_name.required' => 'Last name is required!',
                'email.required' => 'Email is required!',
                'password.required' => 'Password is required!',
                'department_id.required' => 'Department is required!',
                'school_id.required' => 'School is required!',
            ];   
        }
    }
}
