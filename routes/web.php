<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendationController;

// Route untuk halaman utama
Route::get('/', function () {
    return view('index');
})->name('home');

// Route untuk login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route untuk register
Route::get('/register', function () {
    return view('register');
})->name('register');

// Route untuk melakukan registrasi (POST request)
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Route untuk melakukan login (POST request)
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Route untuk halaman profile (hanya untuk yang sudah login)
Route::get('/profil', [AuthController::class, 'profile'])->name('user.profile')->middleware('auth');

// Routes lainnya
Route::get('/contact-us', function () {
    return view('contactus');
});

Route::get('/fitur', [RecommendationController::class, 'showFeaturePage']);
Route::post('/rekomendasi', [RecommendationController::class, 'showRecommendations'])->name('rekomendasi');

Route::get('/rekom', function () {
    return view('rekom');
});



