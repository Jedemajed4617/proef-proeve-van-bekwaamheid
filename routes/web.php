<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_controller;


// Main routes
Route::get('/', function () { return view('index'); });
Route::get('/curriculum', function () { return view('curriculum'); });

// Login route
Route::get('/login', [User_controller::class, 'login']);


// Route group beheer
Route::prefix('beheer')
->middleware('auth.custom')
->group(function () {
    Route::get('/dashboard', function () {
        return view('beheer.dashboard');
    });
});
