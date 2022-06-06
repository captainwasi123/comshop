<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
use App\Events\getNotify;

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

/*Route::get('/testNotification', function () {
    $options = array(
        'cluster' => env('PUSHER_APP_CLUSTER'),
        'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
        env('PUSHER_APP_KEY'),
        env('PUSHER_APP_SECRET'),
        env('PUSHER_APP_ID'),
        $options
    );

    $data = ['title' => 'New Order Received', 'orderId' => '1003', 'driverId' => '4'];
    $pusher->trigger('notify_channel_4', 'getNotify', $data);
    return 'Done';
});*/

Route::get('/', function () {
    return view('welcome');
});


// Restaurant
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

                        Route::get('/delete/{id}', 'menuController@menuDelete');
                        Route::get('/edit/{id}', 'menuController@menuEdit');
                        Route::post('/update', 'menuController@updateMenu')->name('restaurant.menu.update');
                });
                Route::prefix('orders')->group(function(){
                        Route::get('/order', 'orderController@index')->name('restaurant.order');
                        Route::get('/details/{id}', 'orderController@details');

                        Route::get('/approve/{id}', 'orderController@approve');
                });

                Route::prefix('reviews')->group(function(){
                        Route::get('/review', 'mainController@review')->name('restaurant.review');
                });

                Route::prefix('wallet')->group(function(){
                        Route::get('/', 'walletController@index')->name('restaurant.wallet');
                        Route::post('/makeRequest', 'walletController@makeRequest')->name('restaurant.wallet.makeRequest');
                });

                Route::prefix('setting')->group(function(){
                        Route::get('/', 'settingController@profile')->name('restaurant.profile');
                        Route::post('/restprofilesetting', 'settingController@restProfilesetting')->name('restaurant.restprofilesetting');
                        Route::post('/payout', 'settingController@payoutSubmit')->name('restaurant.profile.payout');
                        Route::post('/changepassword', 'settingController@changePassword')->name('restaurant.changepassword');
                        Route::post('/location', 'settingController@locationSubmit')->name('restaurant.profile.location');

                        Route::get('/status/{status}', 'settingController@statusChange');
                });

            });
	});

// Admin
    Route::get('/admin-panel', 'admin\adminController@indexCheck');
    Route::prefix('admin')->namespace('admin')->group(function(){
        Route::get('/login', 'adminController@login')->name('admin.login');
        Route::post('/login', 'adminController@loginSubmit')->name('admin.login');
        Route::get('/logout', 'adminController@logout')->name('admin.logout');

        //Middleware
            Route::middleware('adminAuth')->group(function(){
                Route::get('/dashboard', 'adminController@index')->name('admin.dashboard');
                    //Restaurants
                        Route::prefix('restaurants')->group(function(){
                            Route::get('/', 'restaurantController@index')->name('admin.restaurant');
                            Route::get('/add', 'restaurantController@add')->name('admin.restaurants.add');
                            Route::get('/active', 'restaurantController@active')->name('admin.restaurants.active');
                            Route::get('/blocked', 'restaurantController@blocked')->name('admin.restaurants.blocked');
                            Route::get('/trashed', 'restaurantController@trashed')->name('admin.restaurants.trashed');
                            Route::get('/status/{id}/{status}', 'restaurantController@statusChange'); 
                            Route::get('/restore/{id}', 'restaurantController@restore'); 
                            Route::get('/edit/{id}', 'restaurantController@edit');

                            Route::post('/add', 'restaurantController@addSubmit')->name('admin.restaurants.add');
                            Route::post('/update', 'restaurantController@editSubmit')->name('admin.restaurants.update');

                            //Withdraw
                                Route::prefix('withdraw')->group(function(){

                                    Route::get('/', 'restaurantController@withdrawRequest')->name('admin.restaurants.withdrawRequest');
                                    Route::get('/complete/{id}', 'restaurantController@withdrawRequestComplete');
                                    Route::get('/cancel/{id}', 'restaurantController@withdrawRequestCancel');
                                });    
                        });

                    //Drivers
                        Route::prefix('drivers')->group(function(){
                            Route::get('/new-request', 'driverController@newRequest')->name('admin.drivers.newRequest');
                            Route::get('/add', 'driverController@add')->name('admin.drivers.add');
                            Route::post('/add', 'driverController@addSubmit')->name('admin.drivers.add');
                            Route::get('/edit/{id}', 'driverController@edit');
                            Route::post('/update', 'driverController@editSubmit')->name('admin.drivers.update');

                            Route::get('/active', 'driverController@active')->name('admin.drivers.active');
                            Route::get('/blocked', 'driverController@blocked')->name('admin.drivers.blocked');
                            Route::get('/trashed', 'driverController@trashed')->name('admin.drivers.trashed');

                            Route::get('/statusActive/{id}/{status}', 'driverController@statusActive'); 
                            Route::get('/statusBlock/{id}/{status}', 'driverController@statusBlock'); 
                            Route::get('/driverDeleted/{id}/{status}', 'driverController@driverDeleted'); 
                            Route::get('/restore/{id}', 'driverController@restore'); 

                            Route::get('/details/{id}', 'driverController@details');
                        });

                    //Reviews & Ratings
                        Route::prefix('reviews')->group(function(){
                            Route::get('/', 'reviewsController@index')->name('admin.reviews');
                            Route::get('/details/{id}', 'reviewsController@details')->name('admin.review.details');
                        });

                    //Users
                        Route::prefix('users')->group(function(){
                            Route::get('/add', 'userController@add')->name('admin.users.add');
                            Route::get('/active', 'userController@active')->name('admin.users.active');
                            Route::post('/added', 'userController@buyerRegister')->name('admin.users.added');
                            Route::get('/blocked', 'userController@blocked')->name('admin.users.blocked');
                            Route::get('/edit/{id}', 'userController@edit');
                            Route::post('/update', 'userController@editSubmit')->name('admin.users.update');
                            Route::get('/trashed', 'userController@trashed')->name('admin.users.trashed');

                            Route::get('/statusBlock/{id}/{status}', 'userController@statusBlock'); 
                            Route::get('/userDeleted/{id}/{status}', 'userController@userDeleted'); 
                            Route::get('/restore/{id}', 'userController@restore'); 




                           

                        });

                    //Settings
                        Route::prefix('settings')->group(function(){

                            Route::get('/general', 'settingsController@general')->name('admin.settings.general');
                            Route::post('/general', 'settingsController@generalUpdate')->name('admin.settings.general');
                            //Categories
                                Route::prefix('categories')->group(function(){
                                    Route::get('/', 'settingsController@catagories')->name('admin.settings.catagories');
                                    Route::get('/delete/{id}', 'settingsController@catagoriesDelete');
                                    Route::get('/edit/{id}', 'settingsController@catagoriesEdit');
                                    Route::post('/add', 'settingsController@catagoriesAdd')->name('admin.settings.catagories.add');
                                    Route::post('/update', 'settingsController@catagoriesUpdate')->name('admin.settings.catagories.update');
                                });
                        });
                });   
    });  