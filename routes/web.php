<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'Home'])->name('home');
Route::get('/tasks', [UserController::class, 'Tasks'])->name('tasks');