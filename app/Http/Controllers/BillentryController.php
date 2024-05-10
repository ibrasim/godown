<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillentryController extends Controller
{


    public function index()


    {
                
        if  ($this->middleware('auth')==true)
        {
            
            $user1 = Auth::user()->name;
               if ($user1=='admin' )
         
                {
        
        
         $vendor = vendor::all();
              
              return view('addvendor',compact('vendor'));
        
        }
  

  else
                {
                   //return 'please login';
                   return view('agent1');
                   
                }
    
              }
      }


}
