<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_controller;


// Main routes (Standard views)
Route::view('/', 'index');
Route::view('/curriculum', 'curriculum');
Route::view('/news', 'news');

// Auth/login routes
Route::view('/login', 'login');
Route::get('/login/auth', [User_controller::class, 'authenticate']);


// Route group beheer
Route::prefix('beheer')
->middleware('auth.custom')
->group(function () {
    Route::view('/dashboard', 'beheer.dashboard');
    Route::post('/logout', [User_controller::class, 'logout']);
});
