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

                Route::get('/', 'adminController@index')->name('admin.index');
                Route::get('/add-restaurants', 'adminController@addrestaurants')->name('admin.addrestaurants');
                Route::get('/active-restaurants', 'adminController@activerestaurants')->name('admin.restaurants.active');
                Route::get('/trashed-restaurants', 'adminController@trashedrestaurants')->name('admin.trashedrestaurants');
                Route::get('/blocked-restaurants', 'adminController@blockedrestaurants')->name('admin.blockedrestaurants');
                Route::get('/add-restaurants', 'adminController@addrestaurants')->name('admin.restaurant.add');
                Route::get('/active-restaurants', 'adminController@activerestaurants')->name('admin.restaurant.active');
                Route::get('/trashed-restaurants', 'adminController@trashedrestaurants')->name('admin.restaurant.trashed');
                Route::get('/blocked-restaurants', 'adminController@blockedrestaurants')->name('admin.restaurant.blocked');
                Route::get('/add-drivers', 'adminController@adddrivers')->name('admin.drivers.add');
                Route::get('/new-drivers', 'adminController@newdrivers')->name('admin.drivers.new');
                Route::get('/active-drivers', 'adminController@activedrivers')->name('admin.drivers.active');
                Route::get('/blocked-drivers', 'adminController@blockeddrivers')->name('admin.drivers.blocked');
                Route::get('/trashed-drivers', 'adminController@trasheddrivers')->name('admin.drivers.trashed');

                Route::get('/review-rating', 'adminController@reviewrating')->name('admin.reviewrating');
                Route::get('/view-reviews', 'adminController@viewreviews')->name('admin.review.view');

                Route::get('/catagories', 'adminController@generalcatagories')->name('admin.general.catagories');

                Route::get('/setting', 'adminController@generalsetting')->name('admin.general.setting');

                Route::get('/active-users', 'adminController@activeusers')->name('admin.users.active');
                Route::get('/blocked-users', 'adminController@blockedusers')->name('admin.users.blocked');
                Route::get('/trashed-users', 'adminController@trashedusers')->name('admin.users.trashed');
                Route::get('/add-users', 'adminController@addusers')->name('admin.users.add');
        });     