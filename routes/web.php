<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\AdminController;

//oy
use App\Http\Controllers\UserController;
Route::post('/profile/update', [UserController::class, 'update'])->name('user.updateProfile');


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

Route::get('/fitur', [RecommendationController::class, 'showFeaturePage'])->name('fitur');

Route::post('/rekomendasi', [RecommendationController::class, 'showRecommendations'])->name('rekomendasi');

Route::get('/rekom', function () {
    return view('rekom');
});

// Route untuk menghapus profil pengguna
Route::delete('/user/delete-profile', [UserController::class, 'deleteProfile'])->name('user.deleteProfile');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [AdminController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [AdminController::class, 'destroy'])->name('destroy');
});


