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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/submit', 'PusherController@submitNotif')->name('notif.submit');
Route::post('/notify', 'PusherController@sendNotification')->name('notif.send');
Route::get('/last', 'PusherController@getLastID')->name('notif.last');

Route::view('/home', 'home');
