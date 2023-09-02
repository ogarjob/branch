<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NewUserController;
use App\Http\Controllers\Api\TransferController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserWalletController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login',    [AuthController::class, 'store'])->name('login');
Route::delete('/logout', [AuthController::class, 'destroy'])->name('logout');
Route::post('/register', [NewUserController::class, 'store'])->name('register');

Route::middleware('auth')->group(function () {
    Route::apiResource('users',             UserController::class)->only('store', 'update', 'destroy');
    Route::apiResource('users.wallets',     UserWalletController::class)->only('store');
    Route::apiResource('wallets.transfers', TransferController::class)->only('store');

    Route::post('wallets/{wallet}/fund', [UserWalletController::class, 'fund'])->name('wallets.fund');
});
