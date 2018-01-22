<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //

        /*echo ("ok");
        echo '<br/>';
        echo (csrf_token());
        echo '<br/>';*/

        $customer_id = $request->input('id');
        $customer_name = $request->input('name');
        $customer_address = $request->input('address');
        $customer_phone = $request->input('phone');


        /*$customer_json = json_decode($json);*/

        $customer = new Customer;

        $customer->id = $customer_id;
        $customer->name = $customer_name;
        $customer->address = $customer_address;
        $customer->customerphone = $customer_phone;



        $customer->save();;

        echo json_encode($customer);

        /*echo '{"status":"';
        echo $customer_id;
        echo '"}';*/

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer, Request $request)
    {
        //
        $customer_json = json_decode($request->id);

        $customer = $customer::find($customer_json->id);

        $customer->toJson();

        echo $customer;

        // return view('customer.customer',$customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
        $customer_json = json_decode($request->id);

        $customer = $customer::find($customer_json->id);

    //    $customer->id = $customer_json->id;
        $customer->name = $customer_json->name;
        $customer->address = $customer_json->address;
        $customer->customerphone = $customer_json->customerphone;

        $customer->save();;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Customer $customer)
    {
        //
        $customer_json = json_decode($request->id);

        $customer = $customer::find($customer_json->id);

        $customer->delete();
    }
}
