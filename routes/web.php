<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/register',  [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/login',   [LoginController::class, 'index'])->name('login');
Route::post('/login',  [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');