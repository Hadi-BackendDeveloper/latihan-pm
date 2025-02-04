<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
Route::get('/pendaftaran', [UserController::class, 'pendaftaran']);
Route::post('/register', [UserController::class, 'register'])->name('register');