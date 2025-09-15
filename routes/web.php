<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RandomDrinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/register',  [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/login',   [LoginController::class, 'index'])->name('login');
Route::post('/login',  [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/random', [RandomDrinkController::class, 'index'])->name('random');
Route::get('/search', [SearchController::class, 'headerSearch'])->name('search');

Route::middleware(['auth'])->group(function () {
    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    // Route::post('/rate-drink', [DrinkController::class, 'rate'])->name('drink.rate');
    // Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
});
