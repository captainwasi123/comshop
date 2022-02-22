<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\buyer\profileController;

use App\Http\Controllers\Api\getCityController;

use App\Http\Controllers\Api\booking\bookingController;
use App\Http\Controllers\Api\driver\driverAuthController;
use App\Http\Controllers\Api\driver\driverprofileController;






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
Route::post('DriverRegister', [driverprofileController::class, 'driverRegister']);

Route::post('login', [AuthController::class, 'login']);


// Route::get('getCity', [getCityController::class, 'getCity']);
Route::get('getCategories', [getCityController::class, 'getCategories']);
Route::get('getmenu', [getCityController::class, 'getmenu']);



// DRIVER LOGIN
Route::post('driverlogin', [driverAuthController::class, 'login']);

     
Route::middleware('auth:sanctum')->group( function () {
   
  
    Route::post('profileUpdate', [profileController::class, 'profile_save']);

    Route::get('getRestuarant', [bookingController::class, 'getRestuarant']);

    Route::put('user/{id}',[AuthController::class,'update']);
    Route::get('user/{id}',[AuthController::class,'show']);

    Route::post('/logout',[AuthController::class,'logout']);
    Route::post('/logoutdriver',[driverAuthController::class,'logout']);


});

Route::middleware('auth:driver-api')->group( function () {

     
    Route::get('getCity', [getCityController::class, 'getCity']);

});


   








