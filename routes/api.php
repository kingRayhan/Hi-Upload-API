<?php

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



Route::get('auth/user', [\App\Http\Controllers\AuthController::class, 'user']);
Route::post('auth/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('auth/create-token', [\App\Http\Controllers\AuthController::class, 'createToken']);
Route::post('auth/clear-tokens', [\App\Http\Controllers\AuthController::class, 'clearTokens']);
Route::post('auth/my-tokens', [\App\Http\Controllers\AuthController::class, 'myTokens']);
Route::post('auth/logout', [\App\Http\Controllers\AuthController::class, 'logout']);


Route::get('files', [\App\Http\Controllers\FileController::class, 'index']);
