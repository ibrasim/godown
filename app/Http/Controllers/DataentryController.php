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
    // $y=$request->input('billno');        
    // for ($x=0 ; $x <= $y; $x++) {
 
    $dataentry = new dataentry();
    date_default_timezone_set("Asia/Tashkent");
    $upd = date('d/m/Y h:i', time());
    
       
    $dataentry->billno = $request->input('billno');     
    $dataentry->bill_date =  now();  
    // $request->input('billdate');     
    $dataentry->suppid = $request->input('cust_id');   
    $dataentry->custid = $request->input('supp_id');   
    // $dataentry->itmeno = $request->input('itemno');  
    // $dataentry->itmeno = $x;
     $dataentry->itmeno = 1;
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
    //  echo "The number is: $x <br>";
// }
    return redirect('/')->with('success','Data entry data saved');
}

public function update(request $request, dataentry  $dataentry)
{

    // $dataentry = new dataentry();
    if ($request->ajax()){

//    $Category->find ($request->pk->update(['title'=>$request->value]));
//    return response()->json(['success'->true]);
// return view ('welcome');
}

else

return view ('welcome');
 }


}