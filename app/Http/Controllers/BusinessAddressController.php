<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
class BusinessAddressController extends Controller
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
        $b= Address::find(1);
        $b->business_id=1;
        $b->street_address=$request->street_address;
        $b->city=$request->city;
        $b->locality=$request->locality;
        $b->state=$request->state;
        $b->pincode=$request->pincode;
        $b->map_url=$request->map_url;
        $b->latitude=$request->latitude;
        $b->longitude=$request->longitude;
        $b->save();
        $msg="Address added";
        return response()->json(array($msg),200);
        //  $a=Address::latest()->first();
        // return view('panel_business.add_listing',['address'=>$a]);
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
