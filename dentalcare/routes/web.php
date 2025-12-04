<?php

use App\Http\Controllers\admin\DoctorController;
use App\Http\Controllers\admin\KhoaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// home
Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');
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


// ADMINN
// them sua xoa nho dung resource cho le
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [HomeController::class,'admin'])->name('dashboard');
    Route::resource('khoa', KhoaController::class);
    Route::resource('doctor', DoctorController::class);
});
Auth::routes();
Route::get('logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
