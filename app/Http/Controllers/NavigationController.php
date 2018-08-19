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
       //$locations = DB::table('store_locator_master')->get();
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

       return view('home', ['categories' => $categories,'location' => $cities]);
   }

    public function orderOnline()
    {
        $ProductMaster = new \App\ProductMaster();
        $deals = $ProductMaster->getDeals();

        $client = new Client();
        $resGroup = $client->get('http://eportal.mycomsys.com/posapi_json/api/group?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');
        $resMenu = $client->get('http://eportal.mycomsys.com/posapi_json/api/menu?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');


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


        $menuBody = json_decode($resMenu->getBody(), true);
        $groupBody = json_decode($resGroup->getBody(), true);
        $categories = $groupBody['operations'];
        $products = $menuBody['operations'];

        //self::cat("1");

        return view('order-online', ['products' => $products, 'categories' => $categories, 'deals' => $deals, 'location' => $cities]);
    }

   public function singleProduct($id)
   {
       $ProductMaster = new \App\ProductMaster();
       $product = $ProductMaster->getProduct($id);
       $sizes = $ProductMaster->getSize($id);
       //$locations = DB::table('store_locator_master')->get();
       //dd($sizes);
       //dd($product);
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

       return view('single-product', ['product' => $product,'sizes' => $sizes,'location' => $cities]);
   }

   public function toStoreLocator()
   {
       $stores = DB::table('store_locator_master')->get();
       //$locations = DB::table('store_locator_master')->get();
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

       return view('store-locator', ['stores' => $stores,'location' => $cities]);
   }

   public function toContact()
   {
       //$locations = DB::table('store_locator_master')->get();
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

       return view('contact',['location' => $cities]);
   }

    public function cat($id)
    {
        $ProductMaster = new \App\ProductMaster();
        //$products = $ProductMaster->getProductByCat($id);
        $deals = $ProductMaster->getDeals();

        $CategoryMaster = new \App\CategoryMaster();
        //$categories = $CategoryMaster->getCategories();
        $locations = DB::table('store_locator_master')->get();
        $client = new Client();
        $resGroup = $client->get('http://eportal.mycomsys.com/posapi_json/api/group?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');
        $resMenu = $client->get('http://eportal.mycomsys.com/posapi_json/api/menu?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');

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

        $menuBody = json_decode($resMenu->getBody(), true);
        $groupBody = json_decode($resGroup->getBody(), true);
        //dd( $body['operations'][0]['CreatedDate'] );
        $categories = $groupBody['operations'];
        $products = $menuBody['operations'];
        $selectedMenu = array();
        foreach($products as $pro) {
            if($pro['GroupCode'] == $id) {
                $selectedMenu[] = $pro;
            }
        }
        //print_r($items);
//        foreach ($products as $pro)
//        {
//            if($pro['GroupCode'] == $id)
//            {
//                $selectedMenu['results'][] = array(
//                    $pro
//                );
//            }
//        }
        //echo json_encode($selectedMenu);

        return view('order-online', ['products' => $selectedMenu, 'categories' => $categories, 'deals' => $deals, 'location' => $cities]);
    }

    public function storeDetail($id)
    {
        //$locations = DB::table('store_locator_master')->get();
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

        $store_loc = DB::table('store_locator_master')->where('storeID',$id)->value('address');
        return view('store-details',['location' => $cities,'store_loc'=>$store_loc]);
    }

    public function toNews()
    {
        //$locations = DB::table('store_locator_master')->get();
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

        return view('news',['location' => $cities]);
    }

    public function toStroy()
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
        return view('story',['location' => $cities]);
    }

    public function toReward()
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

        return view('reward',['location' => $cities]);
    }

    public function getArea(Request $request)
    {
        $city_id = $request->input('city_id');

        $client = new Client();
        $url = "http://109.123.82.217/cc_api_uat/api/getzones";
        $response = $client->post($url, [
            'headers' => ['Content-Type' => 'application/json'],
            'body' => json_encode([
                'Channelid' => 'W',
                'Accesskey' => 'Web123'
            ])
        ]);

        $zoneBody = json_decode($response->getBody(), true);
        $zoneData = $zoneBody['Data'];
        $zones = $zoneBody['Data']['Zones'];

        $areas = array();

        foreach ($zones as $zone) {
            if($zone['city_id'] == $city_id) {
                $areas[] = $zone;
            }
        }

        return $areas;

    }
}