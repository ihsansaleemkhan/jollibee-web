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
use GuzzleHttp\Client;


Route::get('/', function () {
    $CategoryMaster = new \App\CategoryMaster();
    $categories = $CategoryMaster->getCategories();

    $client = new Client();
    $url = "http://109.123.82.217/cc_api_uat/api/getcities";
    $response = $client->post($url, [
        'headers' => ['Content-Type' => 'application/json'],
        'body' => json_encode([
            'Channelid' => 'W',
            'Accesskey' => 'Web123'
        ])
    ]);

    $cityBody = json_decode($response->getBody(), true);
    $cityData = $cityBody['Data'];
    $cities = $cityBody['Data']['Cities'];

    $areas = [];

    return view('home', ['categories' => $categories,'location' => $cities, 'areas' => $areas]);
});

Route::get('/home', 'NavigationController@index')->name('home');
Route::get('/order-online', 'NavigationController@orderOnline')->name('order-online');
Route::get('/single-product{id}', 'NavigationController@singleProduct')->name('single-product');
Route::get('/cart', 'ShoppingController@index')->name('cart');

//Route::post('/get-area', 'NavigationController@getArea')->name('get-area');

Route::post('shopping-cart', 'ShoppingController@toCart');
Route::post('/cart', 'ShoppingController@store')->name('cart.store');
Route::delete('cart{product}' , 'ShoppingController@destroy')->name('cart.destroy');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');

Route::get('paypal/express-checkout', 'PaypalController@expressCheckout')->name('paypal.express-checkout');
Route::get('paypal/express-checkout-success', 'PaypalController@expressCheckoutSuccess');
Route::post('paypal/notify', 'PaypalController@notify');

Route::get('empty', function(){
Cart::destroy();
});




Auth::routes();

Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','facebook|google');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','facebook|google');

Route::get('/store-locator', 'NavigationController@toStoreLocator')->name('store-locator');
Route::get('/contact-us', 'NavigationController@toContact')->name('contact-us');

Route::post('/order-received', 'CheckoutController@store')->name('order-received');

Route::get('/cat{id}', 'NavigationController@cat')->name('cat');
Route::get('/store-detail{id}', 'NavigationController@storeDetail')->name('store-detail');
Route::get('/news', 'NavigationController@toNews')->name('news');
Route::get('/story', 'NavigationController@toStroy')->name('story');
Route::get('/reward', 'NavigationController@toReward')->name('reward');

Route::get('/get-area', 'NavigationController@getArea')->name('get-area');