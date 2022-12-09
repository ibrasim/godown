<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
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
        $customer = new customer();
       
        $customer->shippingmark = $request->input('ShippingMark');     
        $customer->nickname = $request->input('NickNameSirName');       
        $customer->firstname = $request->input('FirstName');   
        $customer->lastname = $request->input('LastName');            
        $customer->companyname = $request->input('CompanyName');  
        $customer->registration = $request->input('BusinessRegistration');     
        $customer->address = $request->input('Address');   
        $customer->road = $request->input('RoadName');   
        $customer->city = $request->input('City');   
        $customer->country = $request->input('Country');   
        $customer->zipcode = $request->input('ZipCode'); 
       $customer->telephone = $request->input('Telephone'); 
       $customer->mobile = $request->input('Mobile'); 
       $customer->email1 = $request->input('e-mail1'); 
       $customer->email2 = $request->input('e-mail2'); 
       $customer->socialaccounts = $request->input('socialaccounts'); 
       $customer ->save();
       return redirect('/home')->with('success','customer data saved');
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
