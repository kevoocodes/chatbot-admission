<?php

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
    return view('welcome');
});



Route::get('/student-registration', [\App\Http\Controllers\Auth\StudentRegistrationController::class, 'index'])->name('register.students');
Route::get('/student-login', [\App\Http\Controllers\Auth\StudentLoginController::class, 'index'])->name('login.students');
Route::get('/student-forgot-password', [\App\Http\Controllers\Auth\StudentForgotPasswordController::class, 'index'])->name('forgot-password.students');


//admin routes
Route::get('/admin-dashboard', [\App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/all_students', [\App\Http\Controllers\Student\StudentController::class, 'index'])->name('all_students');
Route::get('/student_details', [\App\Http\Controllers\Admin\StudentDetailsController::class, 'index'])->name('student_details');

//students routes 
Route::get('/admission', [\App\Http\Controllers\Student\AdmissionController::class, 'index'])->name('student.admission');
Route::get('/student_dashboard', [\App\Http\Controllers\Student\StudentDashboardController::class, 'index'])->name('student.dashboard');
Route::get('/student_profile', [\App\Http\Controllers\Student\StudentProfileController::class, 'index'])->name('student.profile');
Route::post('/student_register', [\App\Http\Controllers\Auth\StudentRegistrationController::class, 'register'])->name('student.register');
Route::post('/student_logout', [\App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('student.logout');
Route::post('/authenticate', [\App\Http\Controllers\Auth\StudentLoginController::class, 'authenticate'])->name('authenticate');
