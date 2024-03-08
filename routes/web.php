<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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




// ADMIN ROUTES
Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'login')->name('login');
        Route::post('/login_handler', [AdminController::class, 'loginHandler'])->name('login_handler');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/admin-panel', [AdminController::class, 'numericData'])->name('admin-panel');
        Route::post('/add_announcement', [AdminController::class, 'add_announcement'])->name('add_announcement');
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

//BAN and UNBAN
Route::get('/view-banned-users', [UserController::class, 'indexBannedUsers']);
Route::post('bannedUsers/{user_id}/unban',[UserController::class, 'unban']);

// STUDENTS
Route::get('/view-students', [StudentController::class, 'index']);
Route::get('students/{user_id}/edit', [StudentController::class, 'edit']);
Route::put('students/{user_id}/edit', [StudentController::class, 'update']);
Route::post('students/{user_id}/ban',[UserController::class, 'ban']);


//TEACHERS
Route::get('/view-teachers', [TeacherController::class, 'index']);
Route::get('teachers/{user_id}/edit', [TeacherController::class, 'edit']);
Route::put('teachers/{user_id}/edit', [TeacherController::class, 'update']);
Route::post('teachers/{user_id}/ban',[UserController::class, 'ban']);


//ANNOUNCEMENTS
Route::get('announcements/{id}/edit', [AdminController::class, 'viewEditAnnouncement']);
Route::put('announcements/{id}/edit', [AdminController::class, 'updateAnnouncement']);
Route::get('/announcement', [AdminController::class, 'announcement_page']);
Route::post('/add_announcement', [AdminController::class, 'add_announcement']);

// Route::get('/admin-panel', [AdminController::class, 'analytics']) -> name('admin-panel');
// Route::get('/admin-panel', [AdminController::class, 'analytics']) -> name('admin.analytics');
Route::get('/chart-data', [AdminController::class, 'chartData']);


Route::get('/reports', function () {
    return view('reports');
});

Route::get('/images/{filename}', 'ImageController@showImage');
