<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\delivery;
use Illuminate\Support\Facades\Auth;  // used to check if user is logged in (Auth())
use Illuminate\Http\Request;
use App\Models\item;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //  return view('home');
    
        if  ($this->middleware('auth')==true)
        {
            
            $user1 = Auth::user()->name;
               if ($user1=='shiya' )
         
                {      
                

                    // $array1 = fbcc_activity::select ('id','name','activity','comment')->where ('name','like',$user1)
                    // ->get();
                    //return $array1;

                    
                    
                    // return view('home')-> with ('activity_data', $array1);  
                  return view('home');
                }
                if ($user1=='razy' or $user1=='fazy' )
         
                {                     
                  
                       // $goods = goodsreceive::orderByDesc('id')->get();
        
       // return view('receivegood',compact('goods'));
$item = item::orderByDesc('id')->get();

return view ('agent2',compact('item'));
                  
                  
                  
                  
              //    return view('agent2');
                }
                if ($user1=='Aminath' or $user1=='asim' )
         
                {                     
                  return view('agent3');
                }
                if ($user1=='Ahmed'  or $user1=='Ali' )
         
                {            

                  //$delivery = delivery::orderByDesc('id')->where('status','=' ,null)->get();
                   $delivery = delivery::all();
               
              
                  return view('agent4',compact('delivery'));         
                  
                  

                }
                if ($user1=='dheema'  or  $user1=='arjun')
         
                {
                  return view('agent3');
                }
                else
                {
                   //return 'please login';
                   return view('agent1');
                   
                }
    
    
    
    
    
    
    
    
    
    
    
            }}
    
            public function index1()
            {
                
              $customer = customer::all();
   
              
              
              return view('addcustomer1',compact('customer'));
            }
            public function index2()
            {
                
                       
              
              return view('addvendor');
            }
          
   
            public function index3()
            {
                
              $delivery = delivery::all();
               
              
              return view('agent4',compact('delivery'));
            }
           
   
   
   
            public function destroy($id)
            {
                customer::destroy($id);
              return redirect('home');
            }

           
            
}
