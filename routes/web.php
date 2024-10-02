<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/library', function () {
    return view('library');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/konsultasi', function () {
    return view('konsultasi');
});

Route::get('/certification', function () {
    return view('certification');
});

Route::get('/profile', function () {
    return view('profile');
});