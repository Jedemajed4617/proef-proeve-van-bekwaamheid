<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('role:admin')->get('/admin', fn () => 'Admin only');