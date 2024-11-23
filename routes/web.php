<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/hao', function () {
    return view('index1');
});