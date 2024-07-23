<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("login");

Route::get('dashboard', function () {
    return view('dashboard');
})->name("home");

Route::get('notification', function () {
    return view('inbox');
})->name("inbox");

Route::get('chatsupport', function () {
    return view('chat');
})->name("chat");

Route::get('addstaff', function () {
    return view('staff');
})->name("addstaff");

Route::get('setting', function () {
    return view('basicsetting');
})->name("basicsetting");

Route::get('notificationsetting', function () {
    return view('notificationsetting');
})->name("notificationsetting");

Route::get('smslogs', function () {
    return view('managesmslogs');
})->name("smslogs");

Route::get('emaillogs', function () {
    return view('manageemaillogs');
})->name("emaillogs");
