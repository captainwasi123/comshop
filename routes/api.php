<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\buyer\profileController;


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
Route::post('UserRegister', [AuthController::class, 'UserRegister']);
Route::post('login', [AuthController::class, 'login']);
     
Route::middleware('auth:sanctum')->group( function () {
    Route::post('profileUpdate', [profileController::class, 'profile_save']);
});


