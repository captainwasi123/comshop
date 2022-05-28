<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\buyer\profileController;
use App\Http\Controllers\Api\getCityController;
use App\Http\Controllers\Api\order\UserOrderController;
use App\Http\Controllers\Api\order\DriverOrderController;
use App\Http\Controllers\Api\booking\bookingController;
use App\Http\Controllers\Api\booking\cartController;
use App\Http\Controllers\Api\driver\driverAuthController;
use App\Http\Controllers\Api\driver\driverprofileController;
use App\Http\Controllers\restaurant\orderController;








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


//Buyer Authentication
    Route::post('UserRegister', [AuthController::class, 'UserRegister']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('googleLogin', [AuthController::class, 'googleLogin']);

// User forgetPassword
        Route::post('forgetPassword',[AuthController::class, 'forgetPassword']);
        Route::post('userOtp',[AuthController::class, 'userOtp']);
        Route::post('ResetPasswordForm',[AuthController::class, 'ResetPasswordForm']);


// General Routes
    Route::get('getCity', [getCityController::class, 'getCity']);
    Route::get('getCity/{id}', [getCityController::class, 'show']);
    Route::get('getCategories', [getCityController::class, 'getCategories']);
    Route::get('getmenu', [getCityController::class, 'getmenu']);

    Route::get('getsingleRest/{id}', [bookingController::class, 'getsingleRest']);


// User Middleware
    Route::middleware('auth:sanctum')->group( function () {

        Route::post('profileUpdate', [profileController::class, 'profile_save']);
        Route::post('changePassword', [profileController::class, 'changePassword']);

        Route::get('getRestuarant/{lat}/{lon}', [bookingController::class, 'getRestuarant']);
        Route::get('searchRestMenu/{search}', [bookingController::class, 'searchRestMenu']);

        //menus with variant
            Route::get('productDetail/{id}', [bookingController::class, 'productDetail']);



        // add to cart
            Route::post('addCart', [cartController::class, 'addtocart']);
            Route::get('ShowAllCart', [cartController::class, 'ShowAllCart']);
            Route::post('updateCart/{id}', [cartController::class, 'updateCart']);
            Route::post('destroyCart/{id}', [cartController::class, 'destroyCart']);

        // cart summary
            Route::get('cartSummary', [UserOrderController::class, 'cartSummary']);

        // checkout
            Route::post('checkout/{vat}/{pymenttype}/{lat}/{lon}', [UserOrderController::class, 'store']);

        //Order
            Route::get('orderShow/{id}', [UserOrderController::class, 'orderShow']);
            Route::post('orderUpdate/{id}', [UserOrderController::class, 'orderUpdate']);
            Route::get('destroy/{id}', [UserOrderController::class, 'destroy']);
            Route::get('search/{keyword}', [UserOrderController::class, 'search']);
            Route::get('allOrders', [UserOrderController::class, 'allOrders']);

        // get payment Method
            Route::get('paymentType', [getCityController::class, 'paymentType']);



        //User Gerneral
            Route::post('userUpdate',[AuthController::class,'userUpdate']);
            Route::get('userDetail',[AuthController::class,'userShow']);


       

            Route::post('logout',[AuthController::class,'logout']);



    });



// DRIVER LOGIN
Route::post('driverlogin', [driverAuthController::class, 'login']);
Route::post('DriverRegister', [driverprofileController::class, 'driverRegister']);

    // forgetPassword
        Route::post('driverforgetPassword',[driverAuthController::class, 'driverforgetPassword']);
        Route::post('dirverOtp',[driverAuthController::class, 'dirverOtp']);
        Route::post('driverResetPasswordForm',[driverAuthController::class, 'driverResetPasswordForm']);


// Driver Middleware
Route::middleware('auth:driver-api')->group( function () {

    Route::get('getCity', [getCityController::class, 'getCity']);

 

    // driver wallet
        Route::get('ShowdriverWallet', [driverprofileController::class, 'ShowdriverWallet']);

    // driver lat long update
        Route::post('latlonupdate_driver/{lat}/{lon}', [driverprofileController::class, 'latlonupdate_driver']);

    //  driver work status            
        Route::post('driverWorkStatus/{Wstatus}', [driverprofileController::class, 'driverWorkStatus']);

    // driver oder approve
        Route::post('driver_orderAccept/{id}', [DriverOrderController::class, 'driver_orderAccept']);
        
        Route::get('complete_orderlist', [DriverOrderController::class, 'complete_orderlist']);
        Route::get('pending_orderlist', [DriverOrderController::class, 'pending_orderlist']);
        Route::get('active_orderlist', [DriverOrderController::class, 'active_orderlist']);
        Route::get('orderDetail', [DriverOrderController::class, 'orderDetail']);
        Route::post('orderComplete/{id}', [DriverOrderController::class, 'orderComplete']);
        Route::get('singleorder/{id}', [DriverOrderController::class, 'singleorder']);

        Route::get('orderDetailIndividual/{id}', [DriverOrderController::class, 'orderDetailIndividual']);

       


        

        


    // Driver change Password $ Profile

    Route::get('driverProfile', [driverprofileController::class, 'driverProfile']);
    Route::post('driverchangePassword', [driverprofileController::class, 'driverchangePassword']);


    // LOGOUT
    Route::post('logoutdriver',[driverAuthController::class,'logout']);
    








});










