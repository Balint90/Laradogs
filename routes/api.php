<?php

use App\Http\Controllers\Api\V1\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\BreedController;
use App\Http\Controllers\Api\V1\DogController;

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



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/auth/register', [AuthController::class, 'createUser']);
// Route::post('/auth/login', [AuthController::class, 'loginUser']);
// Route::get('/login', [AuthController::class, 'notifyGuest'])->middleware('auth:api');

//api/v1/<apiname>
Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'App\Http\Controllers\Api\V1', 'middleware' => 'auth:sanctum'], function () {
    //routes, endpoints
    Route::apiResource('breeds', BreedController::class);
    Route::apiResource('dogs', DogController::class);
    // Route::resource('dogs', 'DogController', ['only' => 'index', 'store', 'show', 'update', 'destroy']);
});
