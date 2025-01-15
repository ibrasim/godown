<?php

namespace App\Http\Controllers;

use App\Models\Maintenancelog1;
use Illuminate\Http\Request;

class Maintenancelog1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $Maintenancelog1 = Maintenancelog1::orderByDesc('id')->get();

       return view ('maintenancelog',compact('Maintenancelog1'));
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
     * @param  \App\Models\Maintenancelog1  $maintenancelog1
     * @return \Illuminate\Http\Response
     */
    public function show(Maintenancelog1 $maintenancelog1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maintenancelog1  $maintenancelog1
     * @return \Illuminate\Http\Response
     */
    public function edit(Maintenancelog1 $maintenancelog1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maintenancelog1  $maintenancelog1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maintenancelog1 $maintenancelog1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maintenancelog1  $maintenancelog1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maintenancelog1 $maintenancelog1)
    {
        //
    }
}
