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
        //$products = $ProductMaster->getProducts();
        $deals = $ProductMaster->getDeals();

        $CategoryMaster = new \App\CategoryMaster();
        //$categories = $CategoryMaster->getCategories();
        $locations = DB::table('store_locator_master')->get();
       //dd($categories);
        $client = new Client();
        $resGroup = $client->get('http://eportal.mycomsys.com/posapi_json/api/group?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');
        $resMenu = $client->get('http://eportal.mycomsys.com/posapi_json/api/menu?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');


        $resMenu = $client->get('http://eportal.mycomsys.com/posapi_json/api/menu?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');
//        $r = $client->request('PUT', 'http://httpbin.org/put', [
//            'json' => ['foo' => 'bar']
//        ]);

//        $response = $client->post('url', [
//            GuzzleHttp\RequestOptions::JSON => ['foo' => 'bar']
//        ]);
        $url = 'http://109.123.82.217/cc_api_uat/api/getcities';
        $paramData = array();
        $paramData["Channelid"]="W";
        $paramData["Accesskey"]="Web123";
        //$myObj->name = "John";
        //$paramData->Channelid = "W";
        //$paramData->Accesskey = "Web123";

        //echo (json_encode($paramData));


        $headers = [
            'Content-type' => 'application/json'
        ];
        $jsonParam = (json_encode($paramData));
        $response = $client->post($url, $headers, $jsonParam);
        //echo $res->getStatusCode(); // 200
        //$resData =  $resMenu->getBody();
        //echo $resData['operations'];
        //$data = $res->json();
        //dd(json_decode($response->getBody(), true));
        //dd(json_decode($response->getBody(), true));

        //$groupArray = json_decode($resGroup->getBody()->getContents(), true); // :'(
        //$menuArray = json_decode($resMenu->getBody()->getContents(), true); // :'(
		//$menuArray = json_decode($resMenu->getBody, true) -> getContents();
					
        //var_dump($array['operations']);
        //$group = $groupArray['operations'];
        //$menu = $menuArray['operations'];
        //echo $ddaata;
        //$adata = json_decode($menu->getContents(), true);
        //dd($menuArray); 
$menuBody = json_decode($resMenu->getBody(), true);
$groupBody = json_decode($resGroup->getBody(), true);
//dd( $body['operations'][0]['CreatedDate'] );
$categories = $groupBody['operations'];
$products = $menuBody['operations'];
// foreach( $operation as $opt ) {
//  echo $opt['CreatedDate'];
// }
        //echo gettype($data);
        //json_decode($resData->content(), true);
        //$dddata = collect(json_decode($resData->get('json')))->collapse();
//        $contents = (string) $res->getBody();
        // foreach ($menu as $p) {
        //     //echo $p;

        //     //echo 'Arham';
        //     dd($p->MenuDes);
        // }
        //echo $dddata;






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
        //$products = $ProductMaster->getProductByCat($id);
        $deals = $ProductMaster->getDeals();

        $CategoryMaster = new \App\CategoryMaster();
        //$categories = $CategoryMaster->getCategories();
        $locations = DB::table('store_locator_master')->get();
        $client = new Client();
        $resGroup = $client->get('http://eportal.mycomsys.com/posapi_json/api/group?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');
        $resMenu = $client->get('http://eportal.mycomsys.com/posapi_json/api/menu?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');

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

        return view('order-online', ['products' => $selectedMenu, 'categories' => $categories, 'deals' => $deals, 'location' => $locations]);
    }

    public function storeDetail()
    {
        $locations = DB::table('store_locator_master')->get();
        return view('store-details',['location' => $locations]);
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
}