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

        $client = new Client();
        $res = $client->get('http://eportal.mycomsys.com/posapi_json/api/group?cid=70288&lcode=001&from=2000-01-01T00:00:00&to=2100-01-01T00:00:00');
        //echo $res->getStatusCode(); // 200
        echo $res->getBody();
        //return view('order-online', ['products' => $products]);
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