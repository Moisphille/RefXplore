<?php

use App\Http\Middleware\adminMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
})->middleware(adminMiddleware::class);

// Arahkan ke halaman login ketika membuka homepage
Route::get('/', function () {
    return redirect('/login');
});

// Route dashboard dengan proteksi auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Halaman Profile
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth', 'verified');

// settings
Route::get('/settings', function () {
    return view('settings');
})->middleware('auth', 'verified');

// Halaman Library
Route::get('/library', function () {
    return view('library');
})->middleware('auth', 'verified');

// Halaman Forum
Route::get('/forum', function () {
    return view('forum');
})->middleware('auth', 'verified');

// Halaman Konsultasi
Route::get('/konsultasi', function () {
    return view('konsultasi');
})->middleware('auth', 'verified');

// Halaman Sertifikasi
Route::get('/certification', function () {
    return view('certification');
})->middleware('auth', 'verified');

// Route Autentikasi dengan Verifikasi Email
Auth::routes(['verify' => true]);

// Ubah route home menjadi dashboard setelah login
Route::get('/home', function () {
    return redirect('/dashboard');
})->middleware('auth');
 
// Logout
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});