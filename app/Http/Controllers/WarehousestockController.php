<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\warehousestock;
use App\Models\warehousesitem;
use CreateWarehouseitemsTable;
use Illuminate\Http\Request;

class WarehousestockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
     public function show(Request $request)
     {
     


 $data1 =         DB::table('warehouseitems')
         ->select('warehouseitems.item_code','warehouseitems.item_name','warehousestocks.qty')
        
         ->join('warehousestocks','warehousestocks.item_code','=','warehouseitems.item_code')
        
         //->where(['warehouseitems.item_code', '=', 12])
        
         ->get();
//         dd($data);
          //return view('agent8');
        
          return view('agent8',compact('data1'));


         
     }
    
    




    
    
    
     public function index()
    {

        $data1 =  DB::table('warehouseitems')
            ->join('warehousestocks', 'warehouseitems.item_code', '=','warehousestocks.item_code')
            ->select('warehouseitems.item_code', 'warehouseitems.item_name', DB::raw('SUM(warehousestocks.qty) as totalstock'))
            ->groupBy('warehouseitems.item_code','warehousestocks.item_code','warehouseitems.item_name')
            
            
            ->get();
        //dd( $data1);

        return view('agent8',compact('data1'));




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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\warehousestock  $warehousestock
     * @return \Illuminate\Http\Response
     */
    //public function show(warehousestock $warehousestock)
    //{      
  //  }


    public function edit(warehousestock $warehousestock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\warehousestock  $warehousestock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, warehousestock $warehousestock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\warehousestock  $warehousestock
     * @return \Illuminate\Http\Response
     */
    public function destroy(warehousestock $warehousestock)
    {
        //
    }
}
