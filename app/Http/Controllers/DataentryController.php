<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataentry;
class DataentryController extends Controller
{
    //
    public function index()
    {
        //
    }

public function store(Request $request)
{
    $dataentry = new dataentry();
    date_default_timezone_set("Asia/Tashkent");
    $upd = date('d/m/Y h:i', time());
    
       
    $dataentry->billno = $request->input('billno');     
    $dataentry->bill_date =  now();  
    // $request->input('billdate');     
    $dataentry->suppid = $request->input('supp_id');   
    $dataentry->custid = $request->input('cust_id');   
    $dataentry->itmeno = $request->input('itemno');  
    $dataentry->unit = $request->input('unit');     
    $dataentry->qty = $request->input('qty');   
    $dataentry->packing = $request->input('packing');   
    $dataentry->bill_desc = $request->input('bill_item_name');   
    $dataentry->act_desc = $request->input('item_name');   
    $dataentry->rate = $request->input('bill_rate'); 
    $dataentry->act_rate = $request->input('act_rate'); 
    $dataentry->total = $request->input('bill_total'); 
    $dataentry->brand = $request->input('brand'); 
    $dataentry->model = $request->input('model'); 
    $dataentry->size = $request->input('size'); 
    $dataentry->grno = $request->input('grno'); 
    $dataentry->boxno = $request->input('boxno'); 
    $dataentry->hscode = $request->input('hscode'); 
    $dataentry->hs_desc = $request->input('hsdesc'); 
    $dataentry->remarks = $request->input('remarks'); 
   
    $dataentry->received = $upd;  
    
    

    $dataentry->packed = $upd;  
    $dataentry->dispatched = $upd;  
    $dataentry->shipped = $upd;  
    $dataentry->received = $upd;  
    $dataentry->user = $upd;  
    $dataentry->entry_date = now();  

    // $table->date('entry_date'); 
    // $table->string('f1')->nullable();       
    // $table->string('f2')->nullable();       
    // $table->string('f3')->nullable();       
    // $table->string('f4')->nullable();      
    // $table->timestamps();

    $dataentry ->save();
    return redirect('/')->with('success','Data entry data saved');
}

}