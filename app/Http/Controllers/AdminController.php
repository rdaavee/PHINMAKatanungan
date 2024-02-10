<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginHandler(Request $request){
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if ($fieldType == 'email') {
            $request->validate([
                'login_id' => 'required|email|exists:admins,email',
                'password' => 'required|min:6'
            ], [
                'login_id.required' => 'Email or Username is required',
                'login_id.email' => 'Invalid email address',
                'login_id.exists' => 'Email does not exist in the system',
                'password_.required' => 'Password is required'
            ]);
        }else{
            $request->validate([
                'login_id' => 'required|exists:admins,username',
                'password' => 'required|min:6'
            ],[
                'login_id.required' => 'Email or Username is required',
                'login_id.exists' => 'Username does not exist in the system',
                'password_.required' => 'Password is required'
            ]);
        }

        $credentials = array(
            $fieldType => $request -> login_id,
            'password'=> $request -> password
        );

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.admin-panel');
        }else {
            session()->flash('fail', 'Invalid Credentials');
            return redirect()->route('admin.login');
        }

    }

    public function logoutHandler (Request $request) {
        Auth::guard('admin')->logout();
        session()->flash('fail', 'Successfully logged out');
        return redirect()->route('admin.login');
    }
}
