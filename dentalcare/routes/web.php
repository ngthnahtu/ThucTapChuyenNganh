<?php

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

Route::get('/404', function () {
    return view('admin/404');
})->name('404');

Route::get('/blank', function () {
    return view('admin/blank');
})->name('blank');

Route::get('/buttons', function () {
    return view('admin/buttons');
})->name('buttons');

Route::get('/cards', function () {
    return view('admin/cards');
})->name('cards');

Route::get('/charts', function () {
    return view('admin/charts');
})->name('charts');

Route::get('/forgot-password', function () {
    return view('admin/forgot-password');
})->name('forgot-password');

Route::get('/login', function () {
    return view('admin/login');
})->name('login');

Route::get('/register', function () {
    return view('admin/register');
})->name('register');

Route::get('/staff', function () {
    return view('admin/staff');
})->name('staff');

Route::get('/patient', function () {
    return view('admin/patient');
})->name('patient');

Route::get('/appointment', function () {
    return view('admin/appointment');
})->name('appointment');

Route::get('/service', function () {
    return view('admin/service');
})->name('service');

Route::get('/bill', function () {
    return view('admin/bill');
})->name('bill');

Route::get('/treatment', function () {
    return view('admin/treatment');
})->name('treatment');

Route::get('/utilities-animation', function () {
    return view('admin/utilities-animation');
})->name('utilities-animation');

Route::get('/utilities-border', function () {
    return view('admin/utilities-border');
})->name('utilities-border');

Route::get('/utilities-color', function () {
    return view('admin/utilities-color');
})->name('utilities-color');

Route::get('/utilities-other', function () {
    return view('admin/utilities-other');
})->name('utilities-other');
