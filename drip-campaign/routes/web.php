<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('appinstruction', function () {
    return view('guide');
})->name("guide");

Route::get('priceandplans', function () {
    return view('plans');
})->name("plans");

Route::get('orderplacinglogs', function () {
    return view('orderplacing');
})->name("orderplacing");

Route::get('cross-sellinglog', function () {
    return view('cross-selling');
})->name("cross-selling");

Route::get('cart-abandonmentlog', function () {
    return view('cart-abandonment');
})->name("cart-abandonment");

Route::get('growth-linelog', function () {
    return view('growth-line');
})->name("growth-line");

Route::get('newcampaign', function () {
    return view('createcampaign');
})->name("newcampaign");
