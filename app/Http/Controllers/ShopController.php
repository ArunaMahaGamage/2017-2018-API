<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
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

        $shop_json = json_decode($request->id);

        $shop = new Shop;

        $shop->id = $shop_json->id;
        $shop->name = $shop_json->name;
        $shop->address = $shop_json->address;

        $shop->save();;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop, Request $request)
    {
        //
        $shop_json = json_decode($request->id);

        $shop = $shop::find($shop_json->id);

        $shop->toJson();

        echo $shop;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
        $shop_json = json_decode($request->id);

        $shop = $shop::find($shop_json->id);

        $shop->id = $shop_json->id;
        $shop->name = $shop_json->name;
        $shop->address = $shop_json->address;

        $shop->save();;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop, Request $request)
    {
        //
        $shop_json = json_decode($request->id);

        $shop = $shop::find($shop_json->id);

        $shop->delete();
    }
}
