<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShoppingController extends Controller
{
   public function toCart(Request $request)
   {
       $productID = $request->input('productID');
       $name = $request->input('name');
       $sale_price = $request->input('sale_price');
       $image = $request->input('image');

       $data['productID'] = $productID;
       $data['name'] = $name;
       $data['sale_price'] = $sale_price;
       $data['image'] = $image;

       return view('cart', compact('data'));
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

       return view('checkout', compact('data'));
   }
}