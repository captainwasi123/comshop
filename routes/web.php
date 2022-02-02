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
                Route::get('/logout', 'authController@logout')->name('restaurant.logout');
      
        //MiddleWare
                Route::middleware('restaurantAuth')->group(function(){
                        Route::get('/', 'mainController@index')->name('restaurant.index');

                        Route::prefix('menus')->group(function(){
                                Route::get('/', 'menuController@menu')->name('restaurant.menu');
                                Route::post('/add', 'menuController@addMenu')->name('restaurant.menu.add');
                        });
                        Route::prefix('orders')->group(function(){
                                Route::get('/order', 'mainController@order')->name('restaurant.order');
                        });

                        Route::prefix('reviews')->group(function(){
                                Route::get('/review', 'mainController@review')->name('restaurant.review');
                        });


                        Route::prefix('setting')->group(function(){
                                Route::get('/', 'settingController@profile')->name('restaurant.profile');
                                Route::post('/restprofilesetting', 'settingController@restProfilesetting')->name('restaurant.restprofilesetting');
                                Route::post('/changepassword', 'settingController@changePassword')->name('restaurant.changepassword');
                                Route::post('/location', 'settingController@locationSubmit')->name('restaurant.profile.location');

                                Route::get('/status/{status}', 'settingController@statusChange');
                        });

                });

	});

        Route::prefix('admin')->namespace('admin')->group(function(){
            Route::get('/', 'adminController@index')->name('admin.restaurant');
            Route::get('/login', 'adminController@login')->name('admin.login');
                //Restaurants
                    Route::prefix('restaurants')->group(function(){
                        Route::get('/', 'restaurantController@index')->name('admin.restaurant');
                        Route::get('/add', 'restaurantController@add')->name('admin.restaurants.add');
                        Route::get('/active', 'restaurantController@active')->name('admin.restaurants.active');
                        Route::get('/blocked', 'restaurantController@blocked')->name('admin.restaurants.blocked');
                        Route::get('/trashed', 'restaurantController@trashed')->name('admin.restaurants.trashed');     
                    });

                //Drivers
                    Route::prefix('drivers')->group(function(){
                        Route::get('/new-request', 'driverController@newRequest')->name('admin.drivers.newRequest');
                        Route::get('/add', 'driverController@add')->name('admin.drivers.add');
                        Route::get('/active', 'driverController@active')->name('admin.drivers.active');
                        Route::get('/blocked', 'driverController@blocked')->name('admin.drivers.blocked');
                        Route::get('/trashed', 'driverController@trashed')->name('admin.drivers.trashed');
                    });

                //Reviews & Ratings
                    Route::prefix('reviews')->group(function(){
                        Route::get('/', 'reviewsController@index')->name('admin.reviews');
                        Route::get('/details', 'reviewsController@details')->name('admin.review.details');
                    });

                //Users
                    Route::prefix('users')->group(function(){
                        Route::get('/add', 'userController@add')->name('admin.users.add');
                        Route::get('/active', 'userController@active')->name('admin.users.active');
                        Route::get('/blocked', 'userController@blocked')->name('admin.users.blocked');
                    });

                //Settings
                    Route::prefix('settings')->group(function(){

                        Route::get('/general', 'settingsController@general')->name('admin.settings.general');
                        //Categories
                            Route::prefix('categories')->group(function(){
                                Route::get('/', 'settingsController@catagories')->name('admin.settings.catagories');
                            });
                    });
        });     