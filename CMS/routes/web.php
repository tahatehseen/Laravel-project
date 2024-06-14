<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

// Route::get('/', function () {
//     return view('welcome');
// })->name("home");

Route::get('/', [ChartController::class, 'barChart'])->name('home');