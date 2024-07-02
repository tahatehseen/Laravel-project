<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

// Route::get('/', function () {
//     return view('welcome');
// })->name("home");

Route::get('/', [ChartController::class, 'barChart'])->name('home');

Route::get('guide', function () {
    return view('guide');
})->name("guide");

Route::get('AddStaff', function () {
    return view('staff');
})->name("AddStaff");

Route::get('Inbox', function () {
    return view('complaints');
})->name("Inbox");

Route::get('ChatSupport', function () {
    return view('chat');
})->name("ChatSupport");
