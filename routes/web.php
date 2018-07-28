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


Route::post('shopping-cart', 'ShoppingController@toCart');
Route::post('checkout', 'ShoppingController@toCheckout');

Route::get('paypal/express-checkout', 'PaypalController@expressCheckout')->name('paypal.express-checkout');
Route::get('paypal/express-checkout-success', 'PaypalController@expressCheckoutSuccess');
Route::post('paypal/notify', 'PaypalController@notify');






Auth::routes();


Route::get('google', function () {
    return view('googleAuth');
});

//redirect and callback URLs

Route::get('auth/google', 'Auth\AuthController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\AuthController@handleGoogleCallback');
