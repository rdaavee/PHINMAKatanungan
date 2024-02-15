<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\PreventBackHistory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin-panel', function () {
    return view('admin-panel');
});


// ADMIN ROUTES
Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'login')->name('login');
        Route::post('/login_handler', [AdminController::class, 'loginHandler'])->name('login_handler');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/admin-panel', 'admin-panel')->name('admin-panel');
        Route::post('/logout_handler', [AdminController::class, 'logoutHandler'])->name('logout_handler');
    });
});

Route::get('/add-student', function () {
    return view('add-student');
});

Route::get('/add-teacher', function () {
    return view('add-teacher');
});

Route::get('/view-students', function () {
    return view('view-students');
});

// STUDENTS
Route::get('/view-students', [StudentController::class, 'index']);
Route::get('students/{student_id}/edit', [StudentController::class, 'edit']);
Route::put('students/{student_id}/edit', [StudentController::class, 'update']);
Route::get('students/{id}/delete',[StudentController::class, 'destroy']);

//TEACHERS
Route::get('/view-teachers', [TeacherController::class, 'index']);
Route::get('teachers/{teacher_id}/edit', [TeacherController::class, 'edit']);
Route::put('teachers/{teacher_id}/edit', [TeacherController::class, 'update']);
Route::get('teachers/{id}/delete',[TeacherController::class, 'destroy']);


Route::get('/announcement', function () {
    return view('announcement');
});


Route::get('/reports', function () {
    return view('reports');
});

Route::get('/images/{filename}', 'ImageController@showImage');

// Route::get('/login', [AuthManager::class, 'login'])->name('login');
// Route::post('/login', [AuthManager::class, 'loginPost'])->name('login_post');

// Route::get('/signup', [AuthManager::class, 'signup'])->name('signup');
// Route::post('/signup', [AuthManager::class, 'signupPost'])->name('signup_post');

// Route::get('/forget-password', [ForgetPasswordManager::class, 'forgetPassword'])->name('forget_password');
// Route::post('/forget-password', [ForgetPasswordManager::class, 'forgetPasswordPost'])->name('forget_password_post');

// Route::get('/reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])->name('reset_password');
// Route::post('/reset-password', [ForgetPasswordManager::class, 'resetPasswordPost'])->name('reset_password_post');

// Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');
