<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anggotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/classes', [anggotaController::class, 'index'])->name('classes');
