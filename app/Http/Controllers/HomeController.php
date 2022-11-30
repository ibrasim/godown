<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;  // used to check if user is logged in (Auth())
use Illuminate\Http\Request;

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
                if ($user1=='razy' )
         
                {                     
                  return view('home');
                }
                else
                {
                   //return 'please login';
                   return view('agent1');
                   
                }
    
    
    
    
    
    
    
    
    
    
    
            }}
    
}
