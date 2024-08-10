<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name("signup");

Route::get('login', function () {
    return view('login');
})->name("login");

Route::get('setup', function () {
    return view('setup');
})->name("setup");

Route::get('dashboard', function () {
    return view('dashboard');
})->name("dashboard");
