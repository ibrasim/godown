<?php

namespace App\Http\Controllers;

use App\Models\delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\mysql_query;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        
        if  ($this->middleware('auth')==true)

if(Auth::check()        ==true)
        {
                    //$delivery = delivery::orderByDesc('id')->where('assignedtime' ,'=', '19-12')->get(); 
        //$delivery5 = delivery::orderByDesc('id')->get();
        //$deliv =  strlen($delivery5->assignedtime);

        

        
        //$delivery = delivery::orderByDesc('id')->where('status','=' ,null)->get();
        $delivery = delivery::orderByDesc('id')->where('status','=' ,null)->paginate(8);
        
        //$delivery = delivery::orderByDesc('id')->get();
        // orderBy('id', 'DESC')
        // $posts = Post::orderBy('id', 'DESC')->get();
        // orderBy('created_at', 'desc')
        // $posts = Post::orderBy('name')->get();
        // $posts = Post::orderByDesc('name')->get();         
        return view('agent4',compact('delivery'));
     


        }

else
{
    return redirect('login');
}

    }


    public function index9()
    {
        return view('receivegood');
    }


    public function index4()
    {
        $inst=null;
        // $delivery = delivery::where ('status',$inst)->orderByDesc('id')->get();
        


//        $delivery = delivery::orderByDesc('id')->where('status','=' ,null)->paginate(8);


        $delivery = delivery::orderBy('customer')->paginate(15);
        return view('agent6',compact('delivery'));
    
    
   

    
    
     
    
    }


    public function shopodered()
    {
        $inst=null;
        // $delivery = delivery::where ('status',$inst)->orderByDesc('id')->get();
     
        
        $delivery = delivery::orderBy('completetime')->paginate(15);





        return view('agent6',compact('delivery'));
    }



    public function index5()
    {
        if(Auth::check()        ==true)
        {

        $inst=null;
        // $delivery = delivery::where ('status',$inst)->orderByDesc('id')->get();
        //$delivery = delivery::all()->sortByDesc('id');
        
        
        //$students = Student::orderBy('first_name')->paginate(5);
        //$delivery = delivery::get()->sortByDesc('id');
        $delivery = delivery::orderByDesc('id')->paginate(45);



//        $results = Project::all()->sortByDesc("name");
        // $results = delivery::orderBy('id')->get();



        return view('agent6',compact('delivery'));
    }

    else{

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

        if  ($this->middleware('auth')==true)
        {
        // $upd2 = date('m/d/Y h:i:s a', time());    
        // $upd2 = date('m/d/Y');

        // date_default_timezone_set("Asia/Calcutta");
        date_default_timezone_set("Asia/Tashkent");
        
        // $upd2 = date("d-m-y h:i:s"); 
        $upd2 = date("d-m-y h:i"); 
            
        
        $delivery = new delivery();
   
        $delivery->customer = $request->input('customer');     
        $delivery->pkgs = $request->input('packages');     
        $delivery->boat = $request->input('boat');     
        $delivery->vehicleno = $request->input('vehicleno');     
        $delivery->assignedtime =  $upd2."|"; 
        $delivery->completetime =  $request->input('shopname');     
        
        // $delivery->completetime = $request->input('shopname');     
        
        $delivery ->save();
       return redirect('/adddelivery')->with('success','delivery data saved');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
     public function show(delivery $delivery,$id)
     
    {
    //  return  delivery::find($id);
    $data = delivery::find($id);
    return view('agent5',['data'=>$data]);
        
    }

    public function edit2(Request  $req)
    {

        $da=delivery::find($req->id);
         $da->customer=$req->input('customer');
         $da->boat=$req->input('boat');
         $da->assignedtime=$req->input('assignedtime');
         $da->status=$req->input('status');
         $da->pkgs=$req->input('pkgs');
         $da->completetime=$req->input('newshopname');
         $da->vehicleno=$req->input('vehicleno');
         $da->remarks=$req->input('remarks');

        //$data->assignedtime='assignedtime';
        $da->save();
        return redirect('adddelivery');
 //return redirect('adddelivery');
 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(delivery $delivery,$request)
    {
return $request->input();
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
        // date_default_timezone_set("Asia/Tashkent");
        // //$upd="DELIVERED";
        // $upd = date('d/m/Y h:i', time());
        // //$upd="DELIVERED";
        // $delivery = delivery::find($id);
        // $delivery->assignedtime=$delivery->assignedtime.$upd."|"; ;
        // $delivery->save();
        // return redirect('adddelivery');
        
        $delivery = delivery::find($id);

        
        // if (is_null($delivery->assignedtime))
        $var1=0;
        $var1=strlen($delivery->assignedtime);
           if ($var1 == 15) 
        {
            
            date_default_timezone_set("Asia/Tashkent");
        $upd = date('d/m/Y h:i', time());
        $delivery = delivery::find($id);
    $delivery->assignedtime=$delivery->assignedtime.$upd."|"; ;
    $delivery->save();
    return redirect('adddelivery');
        }
        
        
        else
    {
        
        return redirect('adddelivery');
           
    }

        // if (strlen($delivery->assignedtime == 32 ))
        // {
        //     date_default_timezone_set("Asia/Tashkent");
        //     $upd = date('d/m/Y h:i', time());
        //     $delivery = delivery::find($id);
        // $delivery->assignedtime=$delivery->assignedtime.$upd."|"; ;
        // $delivery->save();
        // return redirect('adddelivery');
        // }
        // else
        // {
        //     return redirect('adddelivery');
        // }







        
    }

    public function complete(Request $request, $id)
    {

        $delivery = delivery::find($id);
        $var1=0;
        $var1=strlen($delivery->assignedtime);
           if ($var1 == 32) 
        {
            
            date_default_timezone_set("Asia/Tashkent");
            // $upd="DELIVERED";
            $upd = date('d/m/Y h:i', time());
            // $upd="DELIVERED";
    
            $completestatus='completed';
            $delivery = delivery::find($id);
            // $delivery->remarks = $delivery-> assignedtime. $upd;
            $delivery->assignedtime=$delivery->assignedtime.$upd."|"; ;
            $delivery->status=$completestatus;
            $delivery->save();
            return redirect('adddelivery');    
            
            
        }
        
        
        else
    {

        return redirect('adddelivery');

        
    }   
        
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


    
public function data_dump()
{

    $delivery = delivery::orderByDesc('id')->get();
    return view('agent6',compact('delivery'));
 

}


    
public function chart()
{

    if  ($this->middleware('auth')==true)

    if(Auth::check()        ==true)
            {
    


//                $year = delivery::select('created_at', delivery::raw('count(*) as daily_count'))
  //             ->groupBy('created_at')
    //           ->get()->pluck('daily_count')->toarray();



            //    $user = delivery::all()->pluck('pkgs')->toarray();  




    $year = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23'];
    $user = [40,13,0,47,31,36,30,29,41,0,30,63,38,34,36,36,0,34,30,42,22,26,23,43];
    
    foreach ($year as $key => $value) {
    
    //$user[] = delivery::where(delivery::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();  
    //$user[] = delivery::where(delivery::raw("DATE_FORMAT(created_at, '%d')"),$value)->count();         
        }
         
    return view('chart1')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));


}




else
{
    return redirect('login');
}
}


}


