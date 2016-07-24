<?php

namespace horsefly\Http\Controllers;

use Illuminate\Http\Request;

use horsefly\Http\Requests;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->user()->venues()->create([

        'name'=> $request->name,
        'adress'=> $request->adress, 
        'rfc'=> $request->rfc,
        'rnim'=> $request->rnim,
        'curp'=> $request->curp,
        'prosec'=> $request->prosec,
        'ppc'=> $request->ppc,
        'noprogram'=> $request->noprogram,
        'email'=> $request->email,
        'activity'=> $request->activity,
        'immex'=> $request->immex,
        'intermaquilas'=> $request->intermaquilas,
        'productsToimport'=> $request->productsToimport,
        'division'=> $request->division,
        'businesstype'=> $request->businesstype,
        
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
