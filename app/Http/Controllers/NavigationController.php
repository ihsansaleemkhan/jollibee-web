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
       return view('home');
   }

   public function orderOnline()
   {
       $ProductMaster = new \App\ProductMaster();
       $products = $ProductMaster->getProducts();
/*
       $guzzleClient = new Client(['base_uri' => 'http://eportal.mycomsys.com/posapi_json/api/group?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100']);
       $client = json_api()->client($guzzleClient);
       */
       $client = new Client();
       $res = $client->get('http://eportal.mycomsys.com/posapi_json/api/subgroup?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');;

       //$client = new Client(); //GuzzleHttp\Client
      // $res = $client->get('http://eportal.mycomsys.com/posapi_json/api/subgroup?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');
       dd($res);
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