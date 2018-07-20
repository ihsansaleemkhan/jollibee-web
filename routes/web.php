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
    return view('home');
});

Route::get('/home', 'NavigationController@index')->name('home');
Route::get('/order-online', 'NavigationController@orderOnline')->name('order-online');
Route::get('/single-product{id}', 'NavigationController@singleProduct')->name('single-product');