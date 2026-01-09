<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

Route::apiResource('users', UserController::class);
Route::apiResource('orders', OrderController::class);
