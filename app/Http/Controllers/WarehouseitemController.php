<?php

namespace App\Http\Controllers;

use App\Models\warehouseitem;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class WarehouseitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
     
        $warehouseitem = warehouseitem::orderByDesc('id')->get();
             
        return view('agent7',compact('warehouseitem'));
     
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
        $warehouseitem = new warehouseitem();
        $warehouseitem->item_code = $request->input('itemcode');
        
        $warehouseitem->item_category = implode(',', $request->category);
        

        $warehouseitem->item_name = $request->input('inputdetail');
        
        
        $warehouseitem->min_quantity = $request->input('reorderlevel');
        //$warehouseitem->user = $request->input('itemcode');
        //$warehouseitem->user =  $request->user();
        $warehouseitem->user =  $request->user()->name;
        

        //dd($warehouseitem);
        $warehouseitem ->save();


      return redirect('/warehouse_item_entry');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\warehouseitem  $warehouseitem
     * @return \Illuminate\Http\Response
     */
    public function show(warehouseitem $warehouseitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\warehouseitem  $warehouseitem
     * @return \Illuminate\Http\Response
     */
    public function edit(warehouseitem $warehouseitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\warehouseitem  $warehouseitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, warehouseitem $warehouseitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\warehouseitem  $warehouseitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(warehouseitem $warehouseitem)
    {
        //
    }
}
