<?php

namespace App\Http\Controllers;

use App\Models\itemsimp;
use Illuminate\Http\Request;

class ItemsimpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


 $itemsimp = itemsimp:: paginate(5);
//    $itemslist = itemlist:: all();
 
        return view('itemsimp',compact('itemsimp'));  






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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\itemsimp  $itemsimp
     * @return \Illuminate\Http\Response
     */
    public function show(itemsimp $itemsimp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\itemsimp  $itemsimp
     * @return \Illuminate\Http\Response
     */
    public function edit(itemsimp $itemsimp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\itemsimp  $itemsimp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, itemsimp $itemsimp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\itemsimp  $itemsimp
     * @return \Illuminate\Http\Response
     */
    public function destroy(itemsimp $itemsimp)
    {
        //
    }


public function search(Request $request)
{
     $output ="";
    $itemimp = itemsimp::where('descript', 'like', '%' . $request->search . '%')->get();
    //return response()->json($itemimp);
      

   foreach ($itemimp as $item) {
    $output .= '
        <tr>
            <td> '.$item->descript. '</td> <br>
        </tr>';
}
    return response ($output);
}
}
