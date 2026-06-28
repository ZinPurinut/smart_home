<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/company', function () {
    return view('company');
})->name('company');

Route::get('/dealer', function () {
    return view('dealer');
})->name('dealer');

Route::get('/training', function () {
    return view('training');
})->name('training');
