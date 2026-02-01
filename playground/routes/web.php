<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/register', 'register')->name('register.page');
Route::post('/register', [UserController::class, 'save'])->name('register.save');
