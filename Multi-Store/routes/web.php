<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('guide', function () {
    return view('guide');
})->name("guide");

Route::get('priceandplans', function () {
    return view('plans');
})->name("priceandplans");

Route::get('new-setup', function () {
    return view('new-connections');
})->name("new-setup");

Route::get('existing-setup', function () {
    return view('existing-connection');
})->name("existing-setup");

Route::get('logs', function () {
    return view('logs');
})->name("logs");

Route::get('errorlogs', function () {
    return view('error-log');
})->name("errorlogs");
