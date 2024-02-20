<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\ApiStudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Api\ApiTeacherController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', UserController::class);

Route::put('/users/{user_id}', 'UserController@update');


Route::apiResource('admin/students', StudentController::class);
Route::apiResource('admin/teachers', TeacherController::class);

// ADMIN
Route::post('/admin/login', [AdminController::class, 'loginHandler']);
Route::post('/admin/logout', [AdminController::class, 'logoutHandler']);

//STUDENT API
Route::get('students', [ApiStudentController::class, 'index']); 
Route::get('students/{student_id}', [ApiStudentController::class, 'show']); 
Route::post('students', [ApiStudentController::class, 'store']); 
Route::put('students/{student_id}', [ApiStudentController::class, 'update']);
Route::delete('students/{student_id}', [ApiStudentController::class, 'destroy']);

//Teacher API
Route::get('teachers', [ApiTeacherController::class, 'index']); 
Route::get('teachers/{teacher_id}', [ApiTeacherController::class, 'show']); 
Route::post('teachers', [ApiTeacherController::class, 'store']); 
Route::put('teachers/{teacher_id}', [ApiTeacherController::class, 'update']);
Route::delete('teachers/{teacher_id}', [ApiTeacherController::class, 'destroy']);