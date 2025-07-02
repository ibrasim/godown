<?php

namespace App\Http\Controllers;

use App\Models\itemswiftway;
use Illuminate\Http\Request;

class itemswiftwayController extends Controller
{


  public function index()
    {
        //


 $itemswiftway = itemswiftway:: paginate(20);
//    $itemslist = itemlist:: all();
        return view('itemswiftway',compact('itemswiftway'));  
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
     
}




    //
}
