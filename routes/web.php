<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anggotaController; //NOW

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kel6', [anggotaController::class, 'index'])->name('anggotaController');
