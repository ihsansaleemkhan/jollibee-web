<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use GuzzleHttp\Client;

class ShoppingController extends Controller
{
   public function index()
   {
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
       //dd(Cart::content());
       return view('cart',['location' => $cities]);
   }

   public function store(Request $request)
   {
       Cart::add($request->productID, $request->name,1, $request->sale_price)
           ->associate('App\ProductMaster');

       return back()->with('success', ''.$request->name.' was added to your cart');
   }

   public function destroy($id)
   {
     Cart::remove($id);

     return back()->with('success', 'Item has been removed! ');

    }


   public function toCheckout(Request $request)
   {
       $productID = $request->input('productID');
       $name = $request->input('name');
       $sale_price = $request->input('sale_price');
       $image = $request->input('image');

       $data['productID'] = $productID;
       $data['name'] = $name;
       $data['sale_price'] = $sale_price;
       $data['image'] = $image;

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

       return view('checkout',['location' => $cities,'data'=>$data]);
   }
}