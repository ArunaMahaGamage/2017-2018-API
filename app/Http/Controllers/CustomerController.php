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
        echo ($request->id);
        echo '<br/>';

        $customer_json = json_decode($request->id);

        $customer = new Customer;

        $customer->id = $customer_json->id;
        $customer->name = $customer_json->name;
        $customer->address = $customer_json->address;
        $customer->customerphone = $customer_json->customerphone;

        $customer->save();;
        
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
