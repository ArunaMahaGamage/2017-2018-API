<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
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

        $vendor_json = json_decode($request->id);

        $vendor = new Vendor;

        $vendor->id = $vendor_json->id;
        $vendor->name = $vendor_json->name;
        $vendor->staffnumber = $vendor_json->staffnumber;

        $vendor->save();;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor, Request $request)
    {
        //
        $vendor_json = json_decode($request->id);

        $vendor = $vendor::find($vendor_json->id);

        $vendor->toJson();

        echo $vendor;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
        $vendor_json = json_decode($request->id);

        $vendor = $vendor::find($vendor_json->id);

        $vendor->id = $vendor_json->id;
        $vendor->name = $vendor_json->name;
        $vendor->staffnumber = $vendor_json->staffnumber;

        $vendor->save();;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Vendor $vendor)
    {
        //
        $vendor_json = json_decode($request->id);

        $vendor = $vendor::find($vendor_json->id);

        $vendor->delete();
    }
}
