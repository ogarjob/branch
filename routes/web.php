<?php

use App\Http\Controllers\OAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'users')->name('home');

Route::middleware('guest')->group(function () {
    Route::view('/login',       'auth.login')->name('login');
    Route::view('/register',    'auth.register')->name('register');
});

Route::get('/oauth/{provider}/authorize', [OAuthController::class, 'create'])->name('oauth.create');

Route::middleware('auth')->group(function () {
    Route::view('/dashboard',   'dashboard.index')->name('dashboard');

    Route::resource('users',   UserController::class)->only('index', 'show');
    Route::resource('wallets', WalletController::class)->only('index', 'show');
});
