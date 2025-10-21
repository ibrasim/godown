<?php

namespace App\Http\Controllers;

use App\Models\itemswiftway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // used to check if user is logged in (Auth())

class itemswiftwayController extends Controller
{


public function __construct()
    {
        // $this->middleware('auth');                              -to remove comments  later
    } 

public function index1()
{
  $itemswiftway1 = itemswiftway::orderBy('id', 'DESC')->paginate(12);

                 
 return view('itemswiftway1',compact('itemswiftway1'));   
}

  public function index()
    {    
    // $itemswiftway = itemswiftway:: paginate(10);
    // return view('itemswiftway',compact('itemswiftway'));  
//  if  ($this->middleware('auth')==true)                         ----------------to remove comments  later
        {       
            // $user1 = Auth::user()->name;                               ----------------to remove comments  later  -- check foR home controller 
            //    if ($user1<>'asim' )                                     ----------------to remove comments  later
            //    if ($user1=='arshad' )
                // {                                                      ----------------to remove comments  later
                //  return view('itemswiftway');
                    // $itemswiftway = itemswiftway:: paginate(3);
 $itemswiftway = itemswiftway::orderBy('id', 'DESC')->paginate(5);
                 return view('itemswiftway',compact('itemswiftway'));  
                //  $episodes = Episode::orderBy('episode_no', 'DESC')->paginate(10);
                // }                                                                            ----------------to remove comments  later
                // else                                                                                    ----------------to remove comments  later
                // {                                                                                ----------------to remove comments  later
                        // return view('welcome');                                                   ----------------to remove comments  later
                // }                                                                                   ----------------to remove comments  later
      
            }

    }





    
public function search(Request $request)
{
     $output ="";
    $itemimp = itemswiftway::where('desc', 'like', '%' . $request->search . '%')->get();
    // return response()->json($itemimp);
      

    foreach ($itemimp as $item) {
     $output .= '
         <tr>
             <td> '.$item->id. '</td> <br>
             <td> '.$item->desc. '</td> <br>
           
         </tr>';
 }
       return response ($output);

    
    //  return view('itemswiftway1',compact('itemswiftway1'));  

}



 public function store(Request $request)
    {
        $validated = $request->validate([
            'desc' => 'required|string|max:255|unique:itemswiftways,desc',
        ]);

        ItemSwiftWay::create($validated);

        return redirect()->route('itemsw')->with('success', 'Item added successfully!');
       

    }

      public function uaelist ()
            {
              return view('uaelist');
            }

    //
}
