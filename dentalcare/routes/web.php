<?php

use App\Http\Controllers\admin\AppointmentController;
use App\Http\Controllers\admin\DoctorController;
use App\Http\Controllers\admin\KhoaController;
use App\Http\Controllers\admin\PatientController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// ADMINN
// them sua xoa nho dung resource cho le
Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware'=>['auth', 'checkstatus', 'checkadmin']], function () {
    Route::get('/', [HomeController::class,'admin'])->name('dashboard');
    Route::resource('khoa', KhoaController::class);
    Route::resource('doctor', DoctorController::class);
    Route::resource('service',ServiceController::class);
    Route::resource('user',UserController::class);
    Route::resource('patient',PatientController::class);
    Route::resource('appointment',AppointmentController::class);
});


Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/contact',[App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::get('/doctors',[HomeController::class,'doctor'])->name('doctors');
Route::get('/services',[HomeController::class,'service'])->name('services');
Route::get('/khoa_doctor/{khoa}', [App\Http\Controllers\HomeController::class, 'khoa_doctor'])->name('khoa_doctor');
Route::get('/khoa_doctor/single_doctor/{id}', [App\Http\Controllers\HomeController::class, 'single_doctor'])->name('single_doctor');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile')->middleware('auth');

Route::post('/makeAppointment', [AppointmentController::class, 'store'])->name('appointment.store')->middleware('auth');

Auth::routes();
Route::get('logout', [HomeController::class, 'logout'])->name('logout');