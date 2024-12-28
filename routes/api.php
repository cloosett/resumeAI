<?php

use App\Http\Controllers\RomanController;
use Illuminate\Http\Request;
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

Route::post('login', [App\Http\Controllers\ApiAuthController::class, 'login']);
Route::post('register', [App\Http\Controllers\ApiAuthController::class, 'register']);
Route::middleware('auth:sanctum')->get('logout', [App\Http\Controllers\ApiAuthController::class, 'logout']);

Route::middleware('auth:sanctum')->get('roman', [App\Http\Controllers\RomanController::class, 'index']);
Route::middleware('auth_api')->match(['get', 'post'], 'books', [RomanController::class, 'handleBooks']);
