<?php

namespace App\Http\Controllers;

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
}
