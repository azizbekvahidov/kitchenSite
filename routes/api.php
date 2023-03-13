<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('contacts')->group(function () {
        Route::get('',[ContactController::class,'contact']);
    });
    Route::prefix('events')->group(function () {
        Route::get('',[EventController::class,'event']);
    });
});


