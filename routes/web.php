<?php

use Illuminate\Support\Facades\Route;

// Import controllers for users
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordResetTokenController;
use App\Http\Controllers\SessionController;

// Import controllers for CRUD operations
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;

// Route for the welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Routes for user management
Route::resource('users', UserController::class);
Route::resource('password_reset_tokens', PasswordResetTokenController::class);
Route::resource('sessions', SessionController::class);

// Routes for CRUD operations on students, teachers, courses, enrollments, and payments
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
Route::resource('enrollments', EnrollmentController::class);
Route::resource('payments', PaymentController::class);
