<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentMobileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\ApiStudentController;
use App\Http\Controllers\Mobile\PostsMobileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Mobile\UserMobileController;
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

Route::middleware('auth:api')->get('/profile', function (Request $request) {
    return $request->user();
});
Route::put('/users/{user_id}', 'UserController@update');
Route::post('/store', [UserMobileController::class, 'store'])->withoutMiddleware('auth:sanctum');
Route::post('/storeteacher', [UserMobileController::class, 'storeTeacher'])->withoutMiddleware('auth:sanctum');
Route::post('/post', [PostsMobileController::class, 'storePost']);


Route::post('/userlogin', [UserMobileController::class, 'userLogin'])->withoutMiddleware('auth:sanctum');

Route::apiResource('/students', StudentController::class);
Route::apiResource('/teachers', TeacherController::class);

Route::get('/test', function () {
    return response()->json(['message' => 'This is a test route']);
});

// ADMIN
Route::post('/admin/login', [AdminController::class, 'loginHandler']);
Route::post('/admin/logout', [AdminController::class, 'logoutHandler']);
