<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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

        $product_json = json_decode($request->id);

        $product = new Product;

        $product->id = $product_json->id;
        $product->price = $product_json->price;
        $product->type = $product_json->type;
        $product->manufacturer = $product_json->manufacturer;
        $product->customer_id = $product_json->customer_id;

        $product->save();;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, Request $request)
    {
        //
        $product_json = json_decode($request->id);

        $product = $product::find($product_json->id);

        $product->toJson();

        echo $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $product_json = json_decode($request->id);

        $product = $product::find($product_json->id);

    //    $customer->id = $customer_json->id;
        $product->id = $product_json->id;
        $product->price = $product_json->price;
        $product->type = $product_json->type;
        $product->manufacturer = $product_json->manufacturer;

        $product->save();;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        //
        $product_json = json_decode($request->id);

        $product = $product::find($product_json->id);

        $product->delete();
    }
}
