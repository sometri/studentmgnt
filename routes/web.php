<?php
// for users
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordResetTokenController;
use App\Http\Controllers\SessionController;

// for crud students ...
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;

// for users routes
    Route::resource('users', UserController::class);
    Route::resource('password_reset_tokens', PasswordResetTokenController::class);
    Route::resource('sessions', SessionController::class);
// end for users

// routes for crud students ...
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
Route::resource('enrollments', EnrollmentController::class);
Route::resource('payments', PaymentController::class);
