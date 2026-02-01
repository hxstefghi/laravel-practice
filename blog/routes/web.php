<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Public blog routes
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');

// Authenticated blog routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/my-posts', [PostController::class, 'myPosts'])->name('posts.my-posts');
    Route::get('/posts-create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post:slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post:slug}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post:slug}', [PostController::class, 'destroy'])->name('posts.destroy');
});

require __DIR__.'/settings.php';
