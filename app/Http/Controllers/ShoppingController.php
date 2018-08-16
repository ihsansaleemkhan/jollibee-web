<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
class ShoppingController extends Controller
{
   public function index()
   {
       $locations = DB::table('store_locator_master')->get();
       //dd(Cart::content());
       return view('cart',['location' => $locations]);
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
       $locations = DB::table('store_locator_master')->get();

       return view('checkout',['location' => $locations,'data'=>$data]);
   }
}