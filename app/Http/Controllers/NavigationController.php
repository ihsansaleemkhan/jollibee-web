<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NavigationController extends Controller
{
   public function index()
   {
       return view('home');
   }

   public function orderOnline()
   {
       $ProductMaster = new \App\ProductMaster();
       $products = $ProductMaster->getProducts();
      // dd($products);
       return view('order-online', ['products' => $products]);
   }

   public function singleProduct($id)
   {
       $ProductMaster = new \App\ProductMaster();
       $product = $ProductMaster->getProduct($id);
       $sizes = $ProductMaster->getSize($id);
       //dd($sizes);
       //dd($product);
       return view('single-product', ['product' => $product,'sizes' => $sizes]);
   }
}