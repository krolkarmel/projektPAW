<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\UserController;
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

        Route::get('/editAccount', [AccountController::class, 'edit'])->name('account.edit');
        Route::post('/editAccount', [AccountController::class, 'update'])->name('account.update');

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

        Route::get('/edituser/{user}', [AdminController::class, 'edit'])->name('users.edit');
        Route::post('/user/{user}', [AdminController::class, 'update'])->name('users.update');
        Route::get('/listUsers', [AdminController::class, 'index'])->name('admin.index');
        Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');


        Route::get('/editRole', [UserController::class, 'index'])->name('user.index');
        Route::post('/user/update-role/{id}', [UserController::class, 'updateRole'])->name('updateUserRole');



    });
});
