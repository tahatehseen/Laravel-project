<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('orders', function () {
    return view('orders');
})->name('orders');

Route::get('adminMessage', function () {
    return view('admin-msg');
})->name('admin');

Route::get('customerMessage', function () {
    return view('customer-msg');
})->name('customer');

Route::get('orderVerification', function () {
    return view('order-verification');
})->name('orders-verification');

Route::get('bulkSMS', function () {
    return view('bulk-sms');
})->name('bulkSMS');

Route::get('abandonedOrders', function () {
    return view('abandoned-orders');
})->name('abandonedOrder');

Route::get('DiscountCodes', function () {
    return view('discount-codes');
})->name('DiscountCode');

Route::get('messageSetting', function () {
    return view('msg-setting');
})->name('msgSetting');

Route::get('plans', function () {
    return view('plans');
})->name('plans');

Route::get('apiConfiguration', function () {
    return view('api-config');
})->name('apiConfig');

Route::get('appSetting', function () {
    return view('app-setting');
})->name('appSetting');