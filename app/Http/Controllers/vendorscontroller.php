<?php

namespace App\Http\Controllers;

use App\Models\vendor;
use Illuminate\Http\Request;

class vendorscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('addvendor');

        $vendor = vendor::all();
   
              
              
        return view('addvendor',compact('vendor'));


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
        $vendor = new vendor();
        $vendor->vendorname = $request->input('vendorname');     
        $vendor->vendorregno = $request->input('vendorregno');       
        $vendor->vendoraddress = $request->input('vendoraddress');  
        $vendor->vendorroad = $request->input('vendorroad');  
        $vendor->vendodistrict = $request->input('vendodistrict');  
        $vendor->vendorarea = $request->input('vendorarea');  
        $vendor->vendorcity = $request->input('vendorcity');  
        $vendor->vendorctry = $request->input('vendorctry');  
        $vendor->vendorzip = $request->input('vendorzip');  
        $vendor->vendorprimarybuis = $request->input('vendorprimarybuis');  
        $vendor->vendorcontactpersonsir = $request->input('vendorcontactpersonsir');  
        $vendor->vendorcontactpersonfirst = $request->input('vendorcontactpersonfirst');  
        $vendor->vendorothername = $request->input('vendorothername');  
        $vendor->vendorsocialaccount = $request->input('vendorsocialaccount');  
        $vendor->vendormobile1 = $request->input('vendormobile1');  
        $vendor->vendormobile2 = $request->input('vendormobile2');  
        $vendor->vendoremail1 = $request->input('vendoremail1');  
        $vendor->vendorbank = $request->input('vendorbank');  
        $vendor->vendoraccountno1 = $request->input('vendoraccountno1');  
        $vendor->vendoraccountholdername1 = $request->input('vendoraccountholdername1');  
        $vendor->vendorbank2 = $request->input('vendorbank2');  
        $vendor->vendoraccountno2 = $request->input('vendoraccountno2');  
        $vendor->vendorwebsite = $request->input('vendorwebsite');  
       
       $vendor  ->save();
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
        vendor::destroy($id);
              return redirect('home');
    }
}
