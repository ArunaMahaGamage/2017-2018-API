<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
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

        $sale_json = json_decode($request->id);

        $sale = new Sale;

        $sale->id = $sale_json->id;
        $sale->products = $sale_json->products;
        $sale->date = $sale_json->date;
        $sale->sum_total = $sale_json->sum_total;

        $sale->customer_id = $sale_json->customer_id;
        $sale->shop_id = $sale_json->shop_id;
        $sale->vendor_id = $sale_json->vendor_id;

        $sale->save();;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale, Request $request)
    {
        //
        $sale_json = json_decode($request->id);

        $sale = $sale::find($sale_json->id);

        $sale->toJson();

        echo $customer;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
        $sale_json = json_decode($request->id);

        $sale = $sale::find($sale_json->id);

        $sale->id = $sale_json->id;
        $sale->products = $sale_json->products;
        $sale->date = $sale_json->date;
        $sale->sum_total = $sale_json->sum_total;

        $sale->save();;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Sale $sale)
    {
        //
        $sale_json = json_decode($request->id);

        $sale = $sale::find($sale_json->id);

        $sale->delete();
    }
}
