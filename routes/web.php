<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/shop', [StoreController::class, 'index'])->name('shop');
Route::get('/shop/search/', [StoreController::class, 'search'])->name('shop.search');
Route::get('/shop/id/{shoe-id}', [StoreController::class, 'show'])->name('shop.show');

Route::middleware('auth')->group(function () {
    Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');
});


// Route::get('/shop', [StoreController::class, 'index'])->name('shop.index');
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});