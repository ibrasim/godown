<?php

namespace App\Http\Controllers;

use App\Models\Requestorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Carbon\Carbon;

class RequestorderController extends Controller
{
    
    public function index()
    {
        if  ($this->middleware('auth')==true)
        {
            
            $user1 = Auth::user()->name;
               if ($user1=='admin' or $user=='zamu' )
         


                {
              

                   $requestorder = requestorder::all();                 
                    return view('requestorder',compact('requestorder'));
        
                }

                // else
                // {
                //     return view('auth.login');
                // }
  
                else
                {
                   //return 'please login';
                   return view('agent1');
                //    return view('auth.login');
                   
                }
                
    
              }
      }
    
      public function index6()
      {
      if (Auth::check()) {
        // The user is logged in...
        $requestorder = requestorder::all();                 
        return view('requestorder',compact('requestorder'));

    } else {
        // The user is not logged in...
        return view('auth.login');
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

        $Requestorder = new Requestorder();
        $Requestorder->item_name = $request->input('itemname');     
        $Requestorder->hscode = $request->input('hscode');     
        $Requestorder->brand = $request->input('brand');     
        $Requestorder->unit = $request->input('unit');     
        $Requestorder->packing = $request->input('packing');     
        $Requestorder->category = $request->input('category');     
        $Requestorder->reqested_qty = $request->input('reqby');     
        $Requestorder->req_date_time_by = $request->input('req_by');     
        $Requestorder ->save();
        return redirect('/')->with('success','Data entry data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requestorder  $requestorder
     * @return \Illuminate\Http\Response
     */
    public function show(Requestorder $requestorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requestorder  $requestorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Requestorder $requestorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Requestorder  $requestorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requestorder $requestorder)
    {
        //
    }

    public function update_requestorder(Request $request, $id)
    {
        
        // $approvedatetimeby =  Carbon\Carbon::now() . Auth::user()->name; 
        
        $approvedatetimeby = \Carbon\Carbon::now() . Auth::user()->name; ;

        $newbrand='sdf';
        $Requestorder = Requestorder::find($id);
        $Requestorder->brand =   $newbrand;  
        $Requestorder->approve_date_time_by =    $approvedatetimeby  ;

        $Requestorder->save();
        return redirect('/')->with('success','Data entry data saved');
    }


    


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requestorder  $requestorder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Requestorder::destroy($id);
        return redirect('home');
        //
    }
}
