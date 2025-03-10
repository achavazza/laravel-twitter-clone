<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/api/timeline', [App\Http\Controllers\Api\TimelineController::class, 'index']);
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/