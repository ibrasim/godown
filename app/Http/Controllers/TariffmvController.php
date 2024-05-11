<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use App\Models\Tariffmv;
use App\Models\User;
class TariffmvController extends Controller
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
    //
    public function index(Request $request)
    {
        $user1 = Auth::user()->name;
     
        if ($user1=='admin' )
 
        {
           

                $contacts = Tariffmv::when($request->term, function ($query, $term) {
                    $query->where(function ($query) use ($term) {
                        // $query->where('shippingmark', 'like', "%{$term}%")->orWhere('companyname', 'like', "%{$term}%");
                        $query->where('desc', 'like', "%{$term}%");
                    });




            })->get();
        
             return view('tariffsearch', ['contacts' => $contacts,]);
        }
             else
             {
                //return 'please login';
                return view('agent1');
                
             }
 
           }


     
    
}
