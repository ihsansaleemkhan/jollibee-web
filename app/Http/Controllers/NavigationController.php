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

       return view('home', ['categories' => $categories]);
   }

    public function orderOnline()
    {
        $ProductMaster = new \App\ProductMaster();
        $products = $ProductMaster->getProducts();
        $deals = $ProductMaster->getDeals();

        $CategoryMaster = new \App\CategoryMaster();
        $categories = $CategoryMaster->getCategories();
       //dd($categories);
       // $client = new Client();
      //  $res = $client->get('http://eportal.mycomsys.com/posapi_json/api/group?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');
        //echo $res->getStatusCode(); // 200
       //  echo $res->getBody();
        return view('order-online', ['products' => $products, 'categories' => $categories, 'deals' => $deals]);
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

   public function toStoreLocator()
   {
       return view('store-locator');
   }

   public function toContact()
   {
       return view('contact');
   }

    public function cat($id)
    {
        $ProductMaster = new \App\ProductMaster();
        $products = $ProductMaster->getProductByCat($id);
        $deals = $ProductMaster->getDeals();

        $CategoryMaster = new \App\CategoryMaster();
        $categories = $CategoryMaster->getCategories();

        return view('order-online', ['products' => $products, 'categories' => $categories, 'deals' => $deals]);
    }

    public function storeDetail()
    {
        return view('store-details');
    }

    public function toNews()
    {
        return view('news');
    }

    public function toStroy()
    {
        return view('story');
    }

    public function toReward()
    {
        return view('reward');
    }
}