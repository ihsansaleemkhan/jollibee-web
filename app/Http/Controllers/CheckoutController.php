<?php

namespace App\Http\Controllers;

use JsValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    protected $validationRules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'address_1' => 'required',
        'city' => 'required',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        if (Auth::user()) {
            $userInfo = DB::table('users') ->where('id', Auth::user()->id)->get();
            $validator = JsValidator::make($this->validationRules);


            return view('populate-checkout', ['validator' => $validator, 'user' => $userInfo,'location' => $cities]);
        }
        else
        {

            $validator = JsValidator::make($this->validationRules);
            $locations = DB::table('store_locator_master')->get();
            return view('checkout', ['validator' => $validator,'location' => $cities,]);

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $zoneValue = $request->session()->get('selectedZone', 'No Zone');
        $cityValue = $request->session()->get('selectedCity', 'No City');
        $storeValue = $request->session()->get('selectedStore', 'No Store');

        //dd($storeValue['Store_Name']);
        //dd($request);

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $villa_no = $request->input('villa_no');
        $address_1 = $request->input('address_1');
        $address_2 = $request->input('address_2');
        $city = $request->input('city');
        $account_password = bcrypt($request->input('account_password'));
        $order_comments = $request->input('order_comments');
        $payment_method = $request->input('payment_method');
        $full_name= $request->input('full_name');

        $mytime = Carbon\Carbon::now();
        $date = $mytime->toDateString();

        $ordertran_json = array();
        $customer_json = array();
///https://stackoverflow.com/questions/28524290/how-to-generate-unique-random-value-for-each-user-in-laravel-and-add-it-to-datab#

        $Ref_order_id = mt_rand(100000000, 999999999);

        $orderrequest [] = [
            "Requestid" => "201806250013",
            "Ref_order_id" => $Ref_order_id,
            "Channelid" => "W",
            "Accesskey" => "Web123",
            "Requesttype" => "N",
            "remarks" => "TestAPI"
        ];
//test
        $customer_json[] = [
            "Customer_id" => "101",
            "cust_firstName" => $first_name,
            "cust_lastName" => $last_name,
            "cust_companyName" => "BeZingo",
            "cust_phone" => $phone,
            "cust_phone2" => "",
            "cust_phone3" => "",
            "cust_phone4" => "",
            "cust_Email" => $email,
            "PoBox" => "121212",
            "Last_Cust_AddressId" => "121212"
        ];
        $client = new Client();
        $j = 0;
        $totalAmount = 0;
        foreach(Cart::content() as $item){
            $j = $j + 1;
            $selectedProduct = [];
            $resMenu = $client->get('http://eportal.mycomsys.com/posapi_json/api/menu?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');
            $menuBody = json_decode($resMenu->getBody(), true);
            $products = $menuBody['operations'];

            foreach ($products as $pro){
                if($pro['MenuCode'] == $item->id){
                    $selectedProduct = $pro;
                    break;
                }
            }

            $ordertran_json[] = [
                "Ref_order_id" => "000030",
                "tran_time" => "10:10",
                "line_no" => $selectedProduct['LN'],
                "Parentlineno" => "1",
                "Item_ID" => $item->id,
                "Item_desc" => $selectedProduct['MenuDes'],
                "Item_qty" => $item->qty,
                "unit_price" => $item->price,
                "unit_code" => "1",
                "Item_amt" => $item->price,
                "disc_perc" => "0",
                "disc_amt" => "0",
                "tax_code" => "0",
                "tax_amt" => "0",
                "Item_net" => $item->price,
                "Line_valid" => "Y",
                "Notes" => "Item". $j
            ];
            //$selectedMenu[] = $pro;
            //dd($item);
            $totalAmount = $totalAmount + ($item->price);
        }

        $orderheader [] = [
            "Store_id" => $storeValue['Store_id'],
            "Store_Name" => $storeValue['Store_Name'],
            "bill_date" => $date,
            "bill_time" => "10:10",
            "bill_type" => "S",
            "bill_valid" => "Y",
            "Bill_GrossAmt" => $totalAmount,
            "Discount_Perc" => "0",
            "Discount_TotalAmt" => "0",
            "Tax_desc" => "",
            "Tax_TotalAmt" => "0",
            "Bill_NetAmt" => $totalAmount,
            "Paid_amt" => "0",
            "Balance_amt" => "0",
            "Payment_type" => "C",
            "Payment_status" => "",
            "payment_mode" => "C",
            "Customer_id" => "101",
            "Loyalty_id" => "0",
            "Loyalty_Value" => "0",
            "Loyalty_Points" => "0",
            "track_Status_id" => "1",
            "Notes" => ""
        ];

        $ordercustomerloc [] = [
            "Cust_AddressId" => "1",
            "Store_id" => $storeValue['Store_id'],
            "Store_Name" => $storeValue['Store_Name'],
            "Zone_id" => $zoneValue['zone_id'],
            "ZoneDesc" => $zoneValue['zoneDesc'],
            "addr1" => $address_1,
            "addr2" => $address_2,
            "addr3" => $city,
            "Flat" => $villa_no,
            "buildingNo" => $villa_no,
            "buildingName" => "",
            "BlockName" => "",
            "longitude" => "6546541",
            "latitude" => "15654",
            "notes" => "address1"
        ];

        $orderlivetrac [] = [
            "track_Status_id" => "424242",
            "track_Status_desc" => "Pending",
            "delivery_person_id" => "43",
            "Delivery_Person_Name" => "Amer",
            "Delivery_Person_Mobile" => "0987654321",
            "Asset_id" => "DX567",
            "longitude" => "678654",
            "latitude" => "778654",
            "Expected_delivery_time" => "16:00",
            "Delivery_id" => "21"
        ];

        $orderData = [
            "orderrequest_json" => $orderrequest,
            "orderheader_json" => $orderheader,
            "ordertran_json" => $ordertran_json,
            "ordercustomer_json" => $customer_json,
            "ordercustomerloc_json" => $ordercustomerloc,
            "orderdelivTrack_json" => $orderlivetrac
        ];


        $client = new Client();
        $url = "http://31.24.227.37/cc_api/api/Order";
        $response = $client->post($url, [
            'headers' => ['Content-Type' => 'application/json'],
            'body' => ('['.json_encode($orderData).']')
        ]);

        $orderRes = json_decode($response->getBody(), true);
        if($orderRes['Message'] == "Duplicate Order!"){
            //dd("Duplicate order");
            return redirect()->back()->withErrors('alert', 'Deleted!');
        }
        else {
            $order_ref = str_random(16);
            /*   if($account_password == null) {
               $account_password = str_random(8)->make_bcrypt;
            }*/

            $url = "http://109.123.82.217/cc_api_uat/api/getcities";
            $response = $client->post($url, [
                'headers' => ['Content-Type' => 'application/json'],
                'body' => json_encode([
                    'Channelid' => 'W',
                    'Accesskey' => 'Web123'
                ])
            ]);

            $cityBody = json_decode($response->getBody(), true);
            $cities = $cityBody['Data']['Cities'];

            if (Auth::user())
            {
                $data['first_name'] = $first_name;
                $data['full_name'] = $full_name;
                $data['last_name'] = $last_name;
                $data['email'] = $email;
                $data['phone'] = $phone;
                $data['address_1'] = $address_1;
                $data['address_2'] = $address_2;
                $data['city'] = $city;
                $data['order_ref'] = $order_ref;
                $data['date'] = $date;
                $data['payment_method'] = $payment_method;

                return view('order-received',['data' => $data,'location' => $cities,]);
            }
            else
            {
                $validation = Validator::make($request->all(), $this->validationRules);
                if ($validation->fails()) {
                    return redirect()->back()->withErrors($validation->errors());
                }
                else {
                    DB::insert('insert into users 
                (full_name,email,mobile,status,password,default_address,remember_token,avatar,is_active) 
                  values(?,?,?,?,?,?,?,?,?)',[$first_name.' '.$last_name,$email,$phone,'1',$account_password,$address_1.' '.$address_2.' '.$city,'1','avatar',0]);

                    $data['first_name'] = $first_name;
                    $data['full_name'] = $full_name;
                    $data['last_name'] = $last_name;
                    $data['email'] = $email;
                    $data['phone'] = $phone;
                    $data['address_1'] = $address_1;
                    $data['address_2'] = $address_2;
                    $data['city'] = $city;
                    $data['order_ref'] = $order_ref;
                    $data['date'] = $date;
                    $data['payment_method'] = $payment_method;

                    return view('order-received',['data' => $data,'location' => $cities]);
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
