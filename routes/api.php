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

Route::middleware('auth_api')->get('roman', [App\Http\Controllers\RomanController::class, 'index']);
Route::middleware('auth_api')->match(['get', 'post'], 'books', [RomanController::class, 'handleBooks']);

