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

Route::get('/','PagesController@index');

Route::get('/about_us','PagesController@about_us');

Route::get('/contact','PagesController@contact');

Route::get('/privacy','PagesController@privacy');

Route::get('/terms','PagesController@terms');

Route::get('/featured','PagesController@featured');

Route::get('/room_details','PagesController@room_details');

Route::resource('Rooms', 'RoomsController');

Route::resource('Reservations', 'ReservationsController');

Route::resource('Subscribe', 'SubscribesController');

Route::resource('Featured', 'FeaturedController');

Route::post('Feedback','feedbackController@store');

Route::get('ajax',function(){ return view('/pages/room_details'); });

Route::post('room_details/post','RoomsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
