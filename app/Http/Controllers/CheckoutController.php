<?php

namespace App\Http\Controllers;

use JsValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon;

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
        $validator = JsValidator::make($this->validationRules);
        return view('checkout',['validator' => $validator]);
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
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address_1 = $request->input('address_1');
        $address_2 = $request->input('address_2');
        $city = $request->input('city');
        $account_password = $request->input('account_password');
        $order_comments = $request->input('order_comments');
        $payment_method = $request->input('payment_method');

        $mytime = Carbon\Carbon::now();
        $date = $mytime->toDateString();

         $order_ref = str_random(16);
      /*   if($account_password == null) {
             $account_password = str_random(8)->make_bcrypt;
         }*/

        $validation = Validator::make($request->all(), $this->validationRules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }
        else {

            DB::insert('insert into users 
            (full_name,email,mobile,status,password,default_address,remember_token,avatar,is_active) 
            values(?,?,?,?,?,?,?,?,?)',[$first_name.' '.$last_name,$email,$phone,'1',$account_password,$address_1.' '.$address_2.' '.$city,'1','avatar',0]);

            $data['first_name'] = $first_name;
            $data['last_name'] = $last_name;
            $data['email'] = $email;
            $data['phone'] = $phone;
            $data['address_1'] = $address_1;
            $data['address_2'] = $address_2;
            $data['city'] = $city;
            $data['order_ref'] = $order_ref;
            $data['date'] = $date;
            $data['payment_method'] = $payment_method;

            return view('order-received',['data' => $data]);
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
