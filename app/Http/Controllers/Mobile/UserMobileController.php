<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class UserMobileController extends Controller
{

    public function profile(Request $request)
    {
        // Retrieve the token from the Authorization header
        $token = $request->bearerToken();
        
        // Log the token to check its value
        Log::info('Token from request: ' . $token);

        // Authenticate the user using Sanctum
        if ($token) {
            // Find the user by case-insensitive token comparison
            $user = User::where('api_token', 'ILIKE', $token)->first();

            if ($user) {
                // User is authenticated, return the user data
                return response()->json($user);
            } else {
                // Log an error if the user is not found
                Log::error('User not found for token: ' . $token);
            }
        } else {
            // Log an error if the token is missing
            Log::error('Token not found in request');
        }

        // If token is not found or user is not authenticated, return an error response
        return response()->json(['error' => 'Unauthenticated'], 401);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|max:255|string|unique:users,user_id',
            'user_role' => 'required|max:255|string',
            'first_name' => 'required|max:255|string',
            'middle_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'gender' => 'required|max:255|string',
            'email' => 'required|email|max:255|string|regex:/^[A-Za-z0-9._%+-]+@phinmaed\.com$/i|unique:users,email',
            'password' => 'required|min:6|max:255|string',
            'year_level' => 'required|max:255|string',
            'course_id' => 'required|max:255|string',
            'department_id' => 'required|max:255|string',
            'school_id' => 'required|max:255|string',
        ], [
            'user_id.unique' => 'The ID has already been taken.',
            'email.unique' => 'The email has already been taken.',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->messages();
            if (isset($errors['user_id'])) {
                return response($errors['user_id'][0], 422);
            }
            if (isset($errors['email'])) {
                return response($errors['email'][0], 422);
            }
            return response('Validation failed.', 422);
        }

        $requestData = [
            'user_id'=> $request->user_id,
            'user_role' => $request->user_role,
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
            $user = User::create($requestData);
            Log::info('User Created Successfully');
            return response()->json(['message' => 'User successfully created.'], 200);
        } catch (\Exception $e) {
            Log::error('Error creating student record: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function storeTeacher(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|max:255|string|unique:users,user_id',
            'user_role' => 'required|max:255|string',
            'first_name' => 'required|max:255|string',
            'middle_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'gender' => 'required|max:255|string',
            'email' => 'required|email|max:255|string|regex:/^[A-Za-z0-9._%+-]+@phinmaed\.com$/i|unique:users,email',
            'password' => 'required|min:6|max:255|string',
            'course_id' => 'required|max:255|string',
            'department_id' => 'required|max:255|string',
            'school_id' => 'required|max:255|string',
        ], [
            'user_id.unique' => 'The ID has already been taken.',
            'email.unique' => 'The email has already been taken.',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->messages();
            if (isset($errors['user_id'])) {
                return response($errors['user_id'][0], 422);
            }
            if (isset($errors['email'])) {
                return response($errors['email'][0], 422);
            }
            return response('Validation failed.', 422);
        }

        $requestData = [
            'user_id'=> $request->user_id,
            'user_role' => $request->user_role,
            'first_name'=> $request->first_name,
            'middle_name'=> $request->middle_name,
            'last_name'=> $request->last_name,
            'gender'=> $request->gender,
            'email'=> $request->email,
            'password'=> $request->password,
            'course_id'=> $request->course_id,
            'department_id'=> $request->department_id,
            'school_id'=> $request->school_id,
        ];


        try {
            $user = User::create($requestData);
            Log::info('User Created Successfully');
            return response()->json(['message' => 'User successfully created.'], 200);
        } catch (\Exception $e) {
            Log::error('Error creating student record: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if ($user) {

            if (Auth::attempt($credentials)) {
                $tokenResult = $user->createToken('Personal Access Token');
                $accessToken = $tokenResult->plainTextToken;
                $user->update(['api_token' => $accessToken]);
                $user = $request->user();
                return response()->json(['message' => 'User Login Successful', 'accessToken' => $accessToken], 200  );
            }
        }
        return response()->json(['message' => 'Invalid Credentials'], 401);
    }

    public function verifyToken(Request $request)
    {
        $token = $request->bearerToken(); // Get the token from the request

        if (!$token) {
            return response()->json(['error' => 'Token not provided'], 401);
        }

        $user = User::where('api_token', $token)->first(); // Check if the token exists in the database

        if ($user) {
            return response()->json(['message' => 'Token is valid'], 200);
        } else {
            return response()->json(['error' => 'Invalid token'], 401);
        }
    }
}