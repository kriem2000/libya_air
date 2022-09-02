<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\ReservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::post('/login', [UserController::class, "login"]);
Route::post('/register', [UserController::class, "register"]);
Route::get('/logout', [UserController::class, "logout"])->middleware('auth:api');

Route::get('/allFlights', [FlightController::class, 'index'])->middleware('auth:api');

Route::post('/resrvation', [ReservationController::class, 'create'])->middleware('auth:api');
