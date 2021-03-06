<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;
use App\Address;
use App\Food;
use App\Room;
use App\Social;
use App\Contact;
use App\Image;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a=Business::all()->first();
        $address=Address::all()->first();
        $room=Room::all()->first();
        $food=Food::all()->first();
        $social=Social::all()->first();
        $contact=Contact::all()->first();
        $image=Image::all()->first();
       return view('panel_business.add_listing',['b'=>$a,'address'=>$address,'room'=>$room,'food'=>$food,'social'=>$social,'contact'=>$contact,'image'=>$image]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //  $a=Business::latest()->first();
       // return view('panel_business.add_listing',['b'=>$a]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $b= Business::find(1);    
        $b->user_id=1;
        $b->business_name=$request->business_name;
        $b->tag=$request->tag;
        $b->keyword=$request->keyword;
        $b->description=$request->description;
        $b->save();
       $msg = 'business is added';
        return response()->json(array($msg),200);
        
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
