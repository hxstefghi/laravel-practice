<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// })->middleware('auth')->name('home');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::view('/login', 'login')->name('login-view');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::view('/register', 'register')->name('register-view');
Route::resource('/register', UserController::class);
Route::get('/register', [UserController::class, 'create'])->name('register');

Route::resource('/create-post', PostController::class);
Route::get('/create-post', [PostController::class, 'create'])->name('create-post');
