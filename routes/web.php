<?php

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


Route::get('/', 'HomeController@index');
Route::resource('listing','BusinessController');
Route::resource('address','BusinessAddressController');
Route::resource('room','BusinessRoomController');
Route::resource('food','BusinessFoodController');
Route::resource('social','BusinessSocialController');
Route::resource('contact','BusinessContactController');
Route::resource('image','BusinessImageController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
