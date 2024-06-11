<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Trasy autentykacji
Auth::routes();

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['can:isUser'])->group(function () {
        Route::get('/user', function () {
            return view('user');
        })->name('user.dashboard');

        Route::get('/listLibrary', [LibraryController::class, 'index']);
    });

    Route::middleware(['can:isWorker'])->group(function () {
        Route::get('/worker', function () {
            return view('worker');
        })->name('worker.dashboard');

    });

    Route::middleware(['can:isAdmin'])->group(function () {
        Route::get('/admin', function () {
            return view('admin');
        })->name('admin.dashboard');
    });
});
