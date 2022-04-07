<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\buyer\profileController;
use App\Http\Controllers\Api\getCityController;
use App\Http\Controllers\Api\order\orderController;
use App\Http\Controllers\Api\booking\bookingController;
use App\Http\Controllers\Api\booking\cartController;
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

Route::get('getsingleRest/{id}', [bookingController::class, 'getsingleRest']);




Route::post('UserRegister', [AuthController::class, 'UserRegister']);
Route::post('DriverRegister', [driverprofileController::class, 'driverRegister']);

Route::post('login', [AuthController::class, 'login']);


Route::get('getCity', [getCityController::class, 'getCity']);
Route::get('getCity/{id}', [getCityController::class, 'show']);







Route::get('getCategories', [getCityController::class, 'getCategories']);
Route::get('getmenu', [getCityController::class, 'getmenu']);



// DRIVER LOGIN
Route::post('driverlogin', [driverAuthController::class, 'login']);

// User Middleware
Route::middleware('auth:sanctum')->group( function () {

    Route::post('profileUpdate', [profileController::class, 'profile_save']);
    Route::post('changePassword', [profileController::class, 'changePassword']);

    Route::get('getRestuarant/{lat}/{lon}', [bookingController::class, 'getRestuarant']);

    Route::get('searchRestMenu/{search}', [bookingController::class, 'searchRestMenu']);

// add to cart
    Route::post('addCart', [cartController::class, 'addtocart']);
    Route::get('ShowAllCart', [cartController::class, 'ShowAllCart']);
    Route::post('updateCart/{id}', [cartController::class, 'updateCart']);
    Route::post('destroyCart/{id}', [cartController::class, 'destroyCart']);

// cart summary

Route::get('cartSummary', [orderController::class, 'cartSummary']);
    


    // checkout
    Route::post('checkout/{vat}/{pymenttype}', [orderController::class, 'store']);
Route::get('orderShow/{id}', [orderController::class, 'orderShow']);
Route::post('orderUpdate/{id}', [orderController::class, 'orderUpdate']);
Route::get('destroy/{id}', [orderController::class, 'destroy']);
Route::get('search/{keyword}', [orderController::class, 'search']);
   


   



    Route::put('user/{id}',[AuthController::class,'update']);
    Route::get('user/{id}',[AuthController::class,'show']);

    Route::post('logout',[AuthController::class,'logout']);

  

});   





// Driver Middleware
Route::middleware('auth:driver-api')->group( function () {

    Route::get('getCity', [getCityController::class, 'getCity']);

    Route::post('/logoutdriver',[driverAuthController::class,'logout']);

});










