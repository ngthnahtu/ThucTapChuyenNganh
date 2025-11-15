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

Route::get('/customer', function () {
    return view('home/customer');
})->name('customer');

// admin

Route::get('/admin', function () {
    return view('admin/admin');
})->name('admin');

Route::get('/doctortongquat', function () {
    return view('admin/khoa/doctortongquat');
})->name('doctortongquat');

Route::get('/doctorphuchoi', function () {
    return view('admin/khoa/doctorphuchoi');
})->name('doctorphuchoi');