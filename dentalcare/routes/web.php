<?php

use Illuminate\Support\Facades\Route;

// home
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog-single', function () {
    return view('blog-single');
})->name('blog-single');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/doctors', function () {
    return view('doctors');
})->name('doctors');

Route::get('/services', function () {
    return view('services');
})->name('services');

// admin

Route::get('/admin', function () {
    return view('admin');
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

Route::get('/tables', function () {
    return view('admin/tables');
})->name('tables');

Route::get('/utilities-animation', function () {
    return view('admin/utilities-animation.blade');
})->name('utilities-animation');

Route::get('/utilities-border', function () {
    return view('admin/utilities-border.blade');
})->name('utilities-border');

Route::get('/utilities-color', function () {
    return view('admin/utilities-color.blade');
})->name('utilities-color');

Route::get('/utilities-other', function () {
    return view('admin/utilities-other.blade');
})->name('utilities-other');

