<?php

namespace App\Http\Controllers;

use App\Models\itemswiftway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // used to check if user is logged in (Auth())

class itemswiftwayController extends Controller
{


public function __construct()
    {
        $this->middleware('auth');
    }


  public function index()
    {  

  
    // $itemswiftway = itemswiftway:: paginate(10);
    // return view('itemswiftway',compact('itemswiftway'));  


 if  ($this->middleware('auth')==true)
        {       
            $user1 = Auth::user()->name;
               if ($user1<>'asim' )

            //    if ($user1=='arshad' )
         
                {      
              
                //  return view('itemswiftway');
                    // $itemswiftway = itemswiftway:: paginate(3);

 $itemswiftway = itemswiftway::orderBy('id', 'DESC')->paginate(4);
                 return view('itemswiftway',compact('itemswiftway'));  



                //  $episodes = Episode::orderBy('episode_no', 'DESC')->paginate(10);

                }
              
                else
                {
                  
                     
                        return view('welcome');

                    
                   
                   
                }
      
            }










    }













    
public function search(Request $request)
{
     $output ="";
    $itemimp = itemswiftway::where('desc', 'like', '%' . $request->search . '%')->get();
    //return response()->json($itemimp);
      

   foreach ($itemimp as $item) {
    $output .= '
        <tr>
            <td> '.$item->id. '</td> <br>
            <td> '.$item->desc. '</td> <br>
            
        </tr>';
}
     return response ($output);

    
    // return view('itemswiftway',compact('itemswiftway'));  

}



 public function store(Request $request)
    {
        $validated = $request->validate([
            'desc' => 'required|string|max:255|unique:itemswiftways,desc',
        ]);

        ItemSwiftWay::create($validated);

        return redirect()->route('index')->with('success', 'Item added successfully!');
    }


    //
}
