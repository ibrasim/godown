<?php

namespace App\Http\Controllers;

use App\Models\goodsreceive;
use Illuminate\Http\Request;

class GoodsreceiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = goodsreceive::orderByDesc('id')->get();
        
        return view('receivegood',compact('goods'));
        
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

        $goodsreceive = new goodsreceive();
        // $upd2 = date('m/d/Y h:i:s a', time());    
        // $upd2 = date('m/d/Y');
        // date_default_timezone_set("Asia/Calcutta");
        date_default_timezone_set("Asia/Tashkent");
        // $upd2 = date("d-m-y h:i:s"); 
        $upd2 = date("d-m-y h:i"); 
        $goodsreceive = new goodsreceive();
        $goodsreceive->customercode = $request->input('customercode');     
        $goodsreceive->customername = $request->input('customername');     
        $goodsreceive->suppliercode = $request->input('suppliercode');     
        $goodsreceive->suppliername = $request->input('suppliername');     
        $goodsreceive->deliverystaffname = $request->input('deliverystaffname');     
        $goodsreceive->deliverystaffid = $request->input('deliverystaffid');     
        $goodsreceive->modeoftransport = $request->input('modeoftransport');     
        $goodsreceive->receivedate =   $upd2 ;     
        $goodsreceive->receivetime = $request->input('goodsreceivetime');     
        $goodsreceive->cargotype = $request->input('typeofcargo');     
        $goodsreceive->packagetype = $request->input('packagetype');     
        $goodsreceive->noofpkgs = $request->input('noofpkg');     
        $goodsreceive->weight = $request->input('weight');     
        $goodsreceive->staff = $request->input('staffid');     
        $goodsreceive->location = $request->input('location');     
        $goodsreceive->status =  $upd2;     
        
        $goodsreceive->save();
       return redirect('/receivegood')->with('success','delivery data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\goodsreceive  $goodsreceive
     * @return \Illuminate\Http\Response
     */
    public function show(goodsreceive $goodsreceive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\goodsreceive  $goodsreceive
     * @return \Illuminate\Http\Response
     */
    public function edit(goodsreceive $goodsreceive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\goodsreceive  $goodsreceive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, goodsreceive $goodsreceive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\goodsreceive  $goodsreceive
     * @return \Illuminate\Http\Response
     */
    public function destroy(goodsreceive $goodsreceive)
    {
        //
    }
}
