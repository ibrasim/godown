<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Goodsreceivenote;
use App\Models\GoodsreceivenoteItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GoodsreceivenoteController extends Controller
{
   
    public function index()
    {
          
        if  ($this->middleware('auth')==true)

            if(Auth::check()        ==true)
                {
        
                     // $delivery = delivery::orderByDesc('id')->where('status','=' ,null)->paginate(8);


 $v = DB::table('goodsreceivenotes')->select('goodsreceivenotes.grn_no','goodsreceivenotes.cust_id','goodsreceivenotes.sup_id','goodsreceivenotes.no_pkgs','goodsreceivenotes.mode_trans','goodsreceivenote_items.grn_no','goodsreceivenote_items.id','goodsreceivenote_items.weight','goodsreceivenote_items.item_no')
->join('goodsreceivenote_items','goodsreceivenotes.grn_no','=','goodsreceivenote_items.grn_no')->get();                 

//  dd($v);

// ->where(['something' => 'something', 'otherThing' => 'otherThing'])


                   return view('goodsreceivenote',compact('v'));
                }   

else
{
    return redirect('login');
}
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
                $Goodsreceivenote = new Goodsreceivenote();
                $Goodsreceivenote->grn_no = $request->input('grn_no');     
                $Goodsreceivenote->sup_id = $request->input('sup_id');     
                $Goodsreceivenote->cust_id = $request->input('cust_id');     
                $Goodsreceivenote->no_pkgs = $request->input('no_pkgs');     
                $Goodsreceivenote->entry_staff_id = $request->input('cust_id');     
                $Goodsreceivenote->mode_trans = $request->input('mode_trans');     
                $Goodsreceivenote->fl1 = $request->input('weight');     
                $Goodsreceivenote->addit_info = $request->input('addit_info');     
                $Goodsreceivenote->deliv_name = $request->input('deliv_name');     
                $Goodsreceivenote->deliv_id = $request->input('deliv_id');
                $Goodsreceivenote->save();

$GoodsreceivenoteItem = new GoodsreceivenoteItem();
$y=$request->input('no_pkgs');        
                 for ($x=1 ; $x <= $y; $x++) 
                 {
                    $GoodsreceivenoteItem = new GoodsreceivenoteItem();
                     $GoodsreceivenoteItem->item_no = $x;
                     $GoodsreceivenoteItem->grn_no = $request->input('grn_no');
                     $GoodsreceivenoteItem->weight = $request->input('no_pkgs');    
                     $GoodsreceivenoteItem->save(); 
                 }
                

                }
  // for ($x=0 ; $x <= $y; $x++) 
                // {
                //     $dataentry->itmeno = $x;
                // }
                // else
    
                // return view ('welcome');
                //  }
                
        // return redirect('/')->with('success','Data entry data saved');
    


                 
                
                 
                

                 


                

               
                //  return view ('welcome');




                // date_default_timezone_set("Asia/Tashkent");
                // $upd = date('d/m/Y h:i', time());
                // $dataentry->bill_date =  now();  
                // // $dataentry->itmeno = $request->input('itemno');  
                // $dataentry->remarks = $request->input('remarks');        
                // $dataentry->received = $upd;  
                // $dataentry->user = $upd;  
              
                // $table->date('entry_date'); 
                // $table->string('f1')->nullable();       
                // $table->timestamps();
             
                //  echo "The number is: $x <br>";
                // $y=$request->input('billno');        
                // for ($x=0 ; $x <= $y; $x++) 
                // {
                //     $dataentry->itmeno = $x;
                // }
                // else
    
                // return view ('welcome');
                //  }
                
        // return redirect('/')->with('success','Data entry data saved');
            
        public function up1(request $request, $id)
        {
            $GoodsreceivenoteItem = GoodsreceivenoteItem::find($id);
            // $GoodsreceivenoteItem->weight = $request->weight1;
            
            $GoodsreceivenoteItem->weight = $request->input('weight1');
            

            $GoodsreceivenoteItem->update();
            // dd($GoodsreceivenoteItem);
        }

        public function update(request $request, $id)
        {

            //put relation here with id 
            // relate with customer name
            // get all revelant date
            // use one udpate for loop to update
            //coud do in a grid too for appearance

$GoodsreceivenoteItem = GoodsreceivenoteItem::find($id);
//   $GoodsreceivenoteItem->weight = $request->weight1;

//   dd($GoodsreceivenoteItem);
    return view('goodsreceivenoteupdate',compact('GoodsreceivenoteItem'));
//  $GoodsreceivenoteItem->update(); 
        }


    public function update1(request $request, dataentry  $dataentry)
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
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Goodsreceivenote  $goodsreceivenote
     * @return \Illuminate\Http\Response
     */
    public function show(Goodsreceivenote $goodsreceivenote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Goodsreceivenote  $goodsreceivenote
     * @return \Illuminate\Http\Response
     */
    public function edit(Goodsreceivenote $goodsreceivenote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Goodsreceivenote  $goodsreceivenote
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Goodsreceivenote  $goodsreceivenote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goodsreceivenote $goodsreceivenote)
    {
        //
    }
}



