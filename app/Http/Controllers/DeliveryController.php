<?php

namespace App\Http\Controllers;

use App\Models\delivery;
use Illuminate\Http\Request;


class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delivery = delivery::orderByDesc('id')->get();
        // orderBy('id', 'DESC')
        // $posts = Post::orderBy('id', 'DESC')->get();
        // orderBy('created_at', 'desc')
        // $posts = Post::orderBy('name')->get();
        // $posts = Post::orderByDesc('name')->get();         
        return view('agent4',compact('delivery'));
    }

    public function index4()
    {
        $inst=null;
        // $delivery = delivery::where ('status',$inst)->orderByDesc('id')->get();
        $delivery = delivery::orderByDesc('id')->get();





        return view('agent4',compact('delivery'));
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
        $upd2 = date('m/d/Y h:i:s a', time());    
        $delivery = new delivery();
   
        $delivery->customer = $request->input('customer');     
        $delivery->pkgs = $request->input('packages');     
        $delivery->boat = $request->input('boat');     
        $delivery->vehicleno = $request->input('vehicleno');     
        $delivery->assignedtime =  $upd2; 
        
        $delivery->completetime = $request->input('shopname');     
        
        $delivery ->save();
       return redirect('/adddelivery')->with('success','delivery data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(delivery $delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(delivery $delivery)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    
//    
    public function update(Request $request, $id)
    {
        
        // $upd="DELIVERED";
        $upd = date('m/d/Y h:i:s a', time());
        // $upd="DELIVERED";

        $delivery = delivery::find($id);
        $delivery->assignedtime=$delivery->assignedtime.$upd;
        $delivery->save();
        return redirect('adddelivery');
        
        
    }

    public function complete(Request $request, $id)
    {
        
        // $upd="DELIVERED";
        $upd = date('m/d/Y h:i:s a', time());
        // $upd="DELIVERED";

        $delivery = delivery::find($id);
        // $delivery->remarks = $delivery-> assignedtime. $upd;
        $delivery->assignedtime=$delivery->assignedtime.$upd;
        $delivery->save();
        return redirect('adddelivery');
        
        
    }
    
   
   

    public function reverse(Request $request, $id)
    {
        $upd= null;
        $upd1= null;

        $delivery = delivery::find($id);
        $delivery->status =  $upd;
        $delivery->remarks =  $upd1;
        $delivery->save();
        return redirect('adddelivery');
        
        
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        delivery::destroy($id);
        return redirect('adddelivery');
    }


    



}
