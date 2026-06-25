<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;

Route::prefix('v1')->group(function () {

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware([
        'auth:sanctum',
        'throttle:60,1'
    ])->group(function () {

        Route::apiResource('categories', CategoryController::class);

        Route::apiResource('items', ItemController::class);
    });
});