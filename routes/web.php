<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/view', function () {
    return view('layouts/view');
})->name('view');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ->middleware(['auth'])
