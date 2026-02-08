<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::view('/login', 'login')->name('login-view');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::view('/register', 'register')->name('register-view');
Route::resource('/register', UserController::class);
Route::get('/register', [UserController::class, 'create'])->name('register');
