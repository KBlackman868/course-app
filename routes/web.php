<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;

# Landing Page
Route::get('/', function () {
    return view('landing.welcome');
});

////Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
////Route::post('/login', [LoginController::class, 'login']);

// Dashboard route, protected by the auth middleware
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
//->middleware('auth')->name('dashboard');
Route::get('/course', function () {
    return view('courses.course');
});

Route::get('/course/register', function () {
    return view('courses.register');
})->name('courses.register');

//Home page
Route::get('/home', function () {
    return view('courses.home');
});












//Optionally, add a logout route
//Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Public course listing (or behind auth middleware if needed)
//Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

// Enrollment route (only for authenticated users)
//Route::middleware('auth')->group(function () {
//    Route::post('/courses/{id}/enroll', [EnrollmentController::class, 'store'])->name('courses.enroll');
//});

// Admin routes (you can apply a middleware to restrict to admins)
//Route::middleware(['auth', 'role:moodle-admin'])->group(function () {
//    Route::get('/admin/enrollments', [AdminController::class, 'enrollmentRequests'])->name('admin.enrollments');
//    Route::post('/admin/enrollments/{id}/approve', [AdminController::class, 'approveEnrollment'])->name('admin.enrollments.approve');
//    Route::post('/admin/enrollments/{id}/deny', [AdminController::class, 'denyEnrollment'])->name('admin.enrollments.deny');
//});
