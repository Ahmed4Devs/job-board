<?php

use App\Http\Controllers\Api\v1\PostApiController;
use App\Http\Controllers\Api\v1\AuthController;

use Illuminate\Support\Facades\Route;

// REST API(RESTful API) => HTTP Standard
// REQUEST => GET, POST, DELETE, PUT, PATCH
// RESPONSE => 200, 201, 204, 400, 404, 500

// Post /v1/auth/login
// Post /v1/auth/refresh
// Get /v1/auth/me
// Post /v1/auth/logout


Route::prefix('v1')->group(function () {
    Route::apiResource('post', PostApiController::class);

    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthController::class, 'login']);

        // Only if I am authenticated with JWT (Authorization Header)
        Route::middleware('auth:api')->group(function () {
            Route::post('refresh', [AuthController::class, 'refresh']);
            Route::get('me', [AuthController::class, 'me']);
            Route::post('logout', [AuthController::class, 'logout']);
        });
    });
});
