<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_controller;


// Main routes (Standard views)
Route::view('/', 'index');
Route::view('/curriculum', 'curriculum');
Route::view('/news', 'news');
Route::view('/cookies', 'cookies');

// Auth/login routes
Route::view('/login', 'login');
Route::post('/login/auth', [User_controller::class, 'authenticate']);


// Route group beheer
Route::prefix('beheer')
->middleware('auth.custom')
->group(function () {
    Route::view('/', 'beheer.index');
    Route::get('/logout', [User_controller::class, 'logout']);
});
