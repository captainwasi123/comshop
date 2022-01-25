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
                                Route::post('/restprofilesetting', 'authController@restProfilesetting')->name('restaurant.restprofilesetting');
                                Route::post('/changepassword', 'authController@changePassword')->name('restaurant.changepassword');
                        });

                });

	});

        Route::prefix('admin')->namespace('admin')->group(function(){

                Route::get('/', 'adminController@index')->name('admin.index');
                Route::get('/add-restaurants', 'adminController@addrestaurants')->name('admin.addrestaurants');
                Route::get('/active-restaurants', 'adminController@activerestaurants')->name('admin.activerestaurants');
                Route::get('/trashed-restaurants', 'adminController@trashedrestaurants')->name('admin.trashedrestaurants');
                Route::get('/blocked-restaurants', 'adminController@blockedrestaurants')->name('admin.blockedrestaurants');

        });