<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class NavigationController extends Controller
{

    public function index()
   {
       $CategoryMaster = new \App\CategoryMaster();
       $categories = $CategoryMaster->getCategories();
       $locations = DB::table('store_locator_master')->get();

       return view('home', ['categories' => $categories,'location' => $locations]);
   }

    public function orderOnline()
    {
        $ProductMaster = new \App\ProductMaster();
        $products = $ProductMaster->getProducts();
        $deals = $ProductMaster->getDeals();

        $CategoryMaster = new \App\CategoryMaster();
        $categories = $CategoryMaster->getCategories();
        $locations = DB::table('store_locator_master')->get();
       //dd($categories);
       // $client = new Client();
      //  $res = $client->get('http://eportal.mycomsys.com/posapi_json/api/group?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');
        //echo $res->getStatusCode(); // 200
       //  echo $res->getBody();
        return view('order-online', ['products' => $products, 'categories' => $categories, 'deals' => $deals, 'location' => $locations]);
    }

   public function singleProduct($id)
   {
       $ProductMaster = new \App\ProductMaster();
       $product = $ProductMaster->getProduct($id);
       $sizes = $ProductMaster->getSize($id);
       $locations = DB::table('store_locator_master')->get();
       //dd($sizes);
       //dd($product);
       return view('single-product', ['product' => $product,'sizes' => $sizes,'location' => $locations]);
   }

   public function toStoreLocator()
   {
       $stores = DB::table('store_locator_master')->get();
       $locations = DB::table('store_locator_master')->get();
       return view('store-locator', ['stores' => $stores,'location' => $locations]);
   }

   public function toContact()
   {
       $locations = DB::table('store_locator_master')->get();
       return view('contact',['location' => $locations]);
   }

    public function cat($id)
    {
        $ProductMaster = new \App\ProductMaster();
        $products = $ProductMaster->getProductByCat($id);
        $deals = $ProductMaster->getDeals();

        $CategoryMaster = new \App\CategoryMaster();
        $categories = $CategoryMaster->getCategories();
        $locations = DB::table('store_locator_master')->get();

        return view('order-online', ['products' => $products, 'categories' => $categories, 'deals' => $deals, 'location' => $locations]);
    }

    public function storeDetail($id)
    {
        $locations = DB::table('store_locator_master')->get();
        $store_loc = DB::table('store_locator_master')->where('storeID',$id)->value('address');
        return view('store-details',['location' => $locations,'store_loc'=>$store_loc]);
    }

    public function toNews()
    {
        $locations = DB::table('store_locator_master')->get();
        return view('news',['location' => $locations]);
    }

    public function toStroy()
    {
        $locations = DB::table('store_locator_master')->get();
        return view('story',['location' => $locations]);
    }

    public function toReward()
    {
        $locations = DB::table('store_locator_master')->get();
        return view('reward',['location' => $locations]);
    }

    public function getArea($id)
    {
        $area = DB::table('store_locator_master')->where('storeID',$id)->value('address');
        return response()->json($area);
    }

    public function toOrderHistory()
    {
        $locations = DB::table('store_locator_master')->get();
        return view('order-history',['location' => $locations]);
    }
}