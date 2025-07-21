<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'Home'])->name('home');
    Route::get('/tasks', [UserController::class, 'Tasks'])->name('tasks');
});

Route::middleware('guest')->group(function () {
    Route::get('/signup', [UserController::class, 'Signup'])->name('signup');
    Route::get('/login', [UserController::class, 'Login'])->name('login');
    Route::post('/registration', [LoginController::class, 'register'])->name('registerUser');
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('loginUser');
});
