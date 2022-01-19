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
	Route::namespace('restaurant')->group(function(){

        Route::get('/', 'authRestaurantController@login')->name('restaurant.login');
        Route::post('/', 'authRestaurantController@loginSubmit');
        Route::get('/restaurant/logout', 'authRestaurantController@logout');
      


                Route::prefix('restaurant')->middleware('restaurantAuth')->group(function(){
                Route::get('/', 'mainController@index')->name('restaurant.index');

                Route::prefix('menus')->group(function(){
                Route::get('/menu', 'mainController@menu')->name('restaurant.menu');
                });

                Route::prefix('setting')->group(function(){
                Route::get('/profile', 'mainController@profile')->name('restaurant.profile');
                Route::post('/profile/changepassword', 'authRestaurantController@changePassword')->name('restaurant.changepassword');
                });

                Route::prefix('orders')->group(function(){
                Route::get('/order', 'mainController@order')->name('restaurant.order');
                });

                Route::prefix('reviews')->group(function(){
                Route::get('/review', 'mainController@review')->name('restaurant.review');
            });

        });

	});
