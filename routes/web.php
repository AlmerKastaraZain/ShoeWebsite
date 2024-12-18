<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StoreController;
use App\Http\Middleware\EnsureUser;
use App\Http\Middleware\EnsureUserIsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('/shop', [StoreController::class, 'index'])->name('shop');
Route::get('/shop/search/', [StoreController::class, 'search'])->name('shop.search');
Route::get('/shop/id/{shoe}', action: [StoreController::class, 'show'])->name('shop.show');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


Route::get('/shop', [StoreController::class, 'index'])->name('shop.index');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});






















Route::middleware(['auth', 'verified', EnsureUser::class])->prefix('dashboard')->group( function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/favorite', [DashboardController::class, 'favorite'])->name('favorite');
    Route::get('/cart', [DashboardController::class, 'cart'])->name('cart');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
