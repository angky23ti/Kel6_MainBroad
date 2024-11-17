<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\angkyController;
use App\Http\Controllers\kel6Controller;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [kel6Controller::class, 'index']);

Route::get('/angky', [angkyController::class, 'index']);
