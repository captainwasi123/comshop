<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// restaurant
	Route::prefix('restaurant')->namespace('restaurant')->group(function(){
                Route::get('/login', 'authController@login')->name('restaurant.login');
                Route::post('/login', 'authController@loginSubmit');
                Route::get('/logout', 'authController@logout');
      
        //MiddleWare
                Route::middleware('restaurantAuth')->group(function(){
                        Route::get('/', 'mainController@index')->name('restaurant.index');

                        Route::prefix('menus')->group(function(){
                                Route::get('/menu', 'mainController@menu')->name('restaurant.menu');
                        });
                        Route::prefix('orders')->group(function(){
                                Route::get('/order', 'mainController@order')->name('restaurant.order');
                        });

                        Route::prefix('reviews')->group(function(){
                                Route::get('/review', 'mainController@review')->name('restaurant.review');
                        });


                        Route::prefix('setting')->group(function(){
                                Route::get('/', 'mainController@profile')->name('restaurant.profile');
                                Route::post('/changepassword', 'authController@changePassword')->name('restaurant.changepassword');
                        });

                });

	});
