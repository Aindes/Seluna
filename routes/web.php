<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/contact-us', function () {
    return view('contactus');
});

Route::get('/fitur', function () {
    return view('fitur');
});

Route::get('/round_cool', function () {
    return view('round_cool');
});

Route::get('/oval_cool', function () {
    return view('oval_cool');
});

Route::get('/kotak_cool', function () {
    return view('kotak_cool');
});

Route::get('/round_netral', function () {
    return view('round_netral');
});

Route::get('/oval_netral', function () {
    return view('oval_netral');
});

Route::get('/kotak_netral', function () {
    return view('kotak_netral');
});

Route::get('/round_warm', function () {
    return view('round_warm');
});

Route::get('/oval_warm', function () {
    return view('oval_warm');
});

Route::get('/kotak_warm', function () {
    return view('kotak_warm');
});

Route::get('/profil', function () {
    return view('profil');
});