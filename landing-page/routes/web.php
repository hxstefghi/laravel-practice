<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::view('/login', 'login')->name('login-view');
