<?php

use App\Http\Controllers\Api\PostApiController;
use Illuminate\Support\Facades\Route;

// REST API(RESTful API) => HTTP Standard
// REQUEST => GET, POST, DELETE, PUT, PATCH
// RESPONSE => 200, 201, 204, 400, 404, 500

Route::apiResource('post', PostApiController::class);
