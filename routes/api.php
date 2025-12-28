<?php

use App\Http\Controllers\Api\v1\PostApiController;
use Illuminate\Support\Facades\Route;

// REST API(RESTful API) => HTTP Standard
// REQUEST => GET, POST, DELETE, PUT, PATCH
// RESPONSE => 200, 201, 204, 400, 404, 500

Route::prefix('v1')->group(function () {
    Route::apiResource('post', PostApiController::class);
});
