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


    
public function search(Request $request)
{
     $output ="";
    $itemimp = itemsimp::where('descript', 'like', '%' . $request->search . '%')->get();
    //return response()->json($itemimp);
      

   foreach ($itemimp as $item) {
    $output .= '
        <tr>
            <td> '.$item->id. '</td> <br>
            <td> '.$item->hscode. '</td> <br>
            <td> '.$item->hsdescrip. '</td> <br>
            <td> '.$item->descript. '</td> <br>
            <td> '.$item->qty. '</td> <br>
            <td> '.$item->unit. '</td> <br>
            <td> '.$item->impyear. '</td> <br>
            <td> '.$item->impmonth. '</td> <br>
            <td> '.$item->cur. '</td> <br>
             <td>      <button class="btn btn-primary add-to-temp" data-id="{{ $item1->id }}" data-name="{{ $item1->desc }}">Add</button> </td>   
        </tr>';
}
    return response ($output);
     
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



 public function indexL()
    {
        // $posts = Post::paginate(10);
        //  $itemsimp = itemsimp:: paginate(10);
            // $itemsimp = itemsimp:: all();
            $itemsimp = itemsimp:: paginate(120);

         return view('itemsimpws', compact('itemsimp'));

        // dd( $itemsimp);
    }

    public function loadMoreData(Request $request)
    {
        $start = $request->input('start');

        $data = itemsimp::orderBy('id', 'ASC')
            ->offset($start)
            ->limit(10)
            ->get();

        return response()->json([
            'data' => $data,
            'next' => $start + 10
        ]);

    }



}
