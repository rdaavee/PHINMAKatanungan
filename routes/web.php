<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

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
    return view('admin-panel');
});

Route::get('/admin-panel', function () {
    return view('admin-panel');
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

Route::get('/view-teachers', function () {
    return view('view-teachers');
});

Route::get('/announcement', function () {
    return view('announcement');
});


Route::get('/reports', function () {
    return view('reports');
});

Route::get('/images/{filename}', 'ImageController@showImage');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login_post');

// Route::get('/signup', [AuthManager::class, 'signup'])->name('signup');
// Route::post('/signup', [AuthManager::class, 'signupPost'])->name('signup_post');

// Route::get('/forget-password', [ForgetPasswordManager::class, 'forgetPassword'])->name('forget_password');
// Route::post('/forget-password', [ForgetPasswordManager::class, 'forgetPasswordPost'])->name('forget_password_post');

// Route::get('/reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])->name('reset_password');
// Route::post('/reset-password', [ForgetPasswordManager::class, 'resetPasswordPost'])->name('reset_password_post');

// Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');
