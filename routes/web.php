<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



// Restaurant Panel

	Route::prefix('restaurant')->namespace('restaurant')->group(function(){

		Route::get('/', 'mainController@index')->name('restaurant.index');
		Route::get('/menu', 'mainController@menu')->name('restaurant.menu');
		Route::get('/profile', 'mainController@profile')->name('restaurant.profile');
		Route::get('/order', 'mainController@order')->name('restaurant.order');
		Route::get('/login', 'mainController@login')->name('restaurant.login');
		Route::get('/review', 'mainController@review')->name('restaurant.review');
	});