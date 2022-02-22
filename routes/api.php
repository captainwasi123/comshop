<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\buyer\profileController;

use App\Http\Controllers\Api\getCityController;
use App\Http\Controllers\Api\order\orderController;

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
//  buyer Reg
Route::post('UserRegister', [AuthController::class, 'UserRegister']);
// Driver Reg
Route::post('DriverRegister', [driverprofileController::class, 'driverRegister']);
// buyer Login
Route::post('login', [AuthController::class, 'login']);
// Driver login
Route::post('driverlogin', [driverAuthController::class, 'login']);






<<<<<<< HEAD
Route::get('getCity', [getCityController::class, 'getCity']);
Route::get('getCity/{id}', [getCityController::class, 'show']);
=======
>>>>>>> 0cfb5a66dd4b6317439517463d4b3aec594feec2
Route::post('order', [orderController::class, 'store']);
Route::get('orderShow/{id}', [orderController::class, 'orderShow']);
Route::post('orderUpdate/{id}', [orderController::class, 'orderUpdate']);
Route::get('destroy/{id}', [orderController::class, 'destroy']);
Route::get('search/{keyword}', [orderController::class, 'search']);

<<<<<<< HEAD
=======
Route::get('getCategories', [getCityController::class, 'getCategories']);
Route::get('getmenu', [getCityController::class, 'getmenu']);
>>>>>>> 0cfb5a66dd4b6317439517463d4b3aec594feec2







// Buyer Middleware
Route::middleware('auth:sanctum')->group( function () {

<<<<<<< HEAD
=======

>>>>>>> 0cfb5a66dd4b6317439517463d4b3aec594feec2
    Route::post('profileUpdate', [profileController::class, 'profile_save']);

    Route::get('getRestuarant', [bookingController::class, 'getRestuarant']);

    Route::put('user/{id}',[AuthController::class,'update']);
    Route::get('user/{id}',[AuthController::class,'show']);

    Route::post('/logout',[AuthController::class,'logout']);
  

<<<<<<< HEAD
});


=======

});

// Driver Middleware
Route::middleware('auth:driver-api')->group( function () {

    Route::get('getCity', [getCityController::class, 'getCity']);
    Route::post('/logoutdriver',[driverAuthController::class,'logout']);
 

});







>>>>>>> 0cfb5a66dd4b6317439517463d4b3aec594feec2




