<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/classes', [App\Http\Controllers\ClassController::class, 'index'])->name('home');
