<?php

namespace App\Http\Controllers;

use App\Models\goodsreceive;
use Illuminate\Http\Request;

class GoodsreceiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = goodsreceive::orderByDesc('id')->get();
        
        return view('receivegood',compact('goods'));
        
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
     * @param  \App\Models\goodsreceive  $goodsreceive
     * @return \Illuminate\Http\Response
     */
    public function show(goodsreceive $goodsreceive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\goodsreceive  $goodsreceive
     * @return \Illuminate\Http\Response
     */
    public function edit(goodsreceive $goodsreceive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\goodsreceive  $goodsreceive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, goodsreceive $goodsreceive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\goodsreceive  $goodsreceive
     * @return \Illuminate\Http\Response
     */
    public function destroy(goodsreceive $goodsreceive)
    {
        //
    }
}
