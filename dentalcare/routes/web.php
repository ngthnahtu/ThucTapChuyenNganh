<?php

use App\Http\Controllers\admin\DoctorPhucHoi;
use App\Http\Controllers\admin\DoctorTongQuat;
use App\Http\Controllers\admin\KhoaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// home
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('home/about');
})->name('about');

Route::get('/blog-single', function () {
    return view('home/blog-single');
})->name('blog-single');

Route::get('/blog', function () {
    return view('home/blog');
})->name('blog');

Route::get('/contact', function () {
    return view('home/contact');
})->name('contact');

Route::get('/doctors', function () {
    return view('home/doctors');
})->name('doctors');

Route::get('/services', function () {
    return view('home/services');
})->name('services');

// admin
Route::get('/admin', function () {
    return view('admin/admin');
})->name('admin');

Route::get('/khoa', [KhoaController::class,'index'])->name('khoa');

Route::get('/doctorPH', [DoctorPhucHoi::class,'index'])->name('doctorPH');

Route::get('/doctorTQ',[DoctorTongQuat::class,'index'])->name('doctorTQ');

Route::get('logout',[HomeController::class,'logout'])->name('logout');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
