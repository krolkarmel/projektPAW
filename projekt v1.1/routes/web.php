<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});



Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/listLibrary', [LibraryController::class, 'index']);

Route::get('/listUsers', [UserController::class, 'index']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index']);