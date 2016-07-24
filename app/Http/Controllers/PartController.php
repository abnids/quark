<?php

namespace horsefly\Http\Controllers;

use Illuminate\Http\Request;

use horsefly\Http\Requests;
use horsefly\Http\Requests\PartRequest;
use horsefly\Part;


class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts = Part::all();
        return view('parts.index',['parts' => $parts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parts = Part::all();
        return view('parts.new3',[
            'parts' => $parts
]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartRequest $request)
    {
            
        $request->user()->parts()->create($request->all());

        return redirect('/parts')->with('success','Guardado con exito');
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
    public function edit($id){
     

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $part->update($request->all());
  }
     
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($request, Part $part)
    {
        
        $part->delete($id);
        return redirect('/parts')->with('success','Borrado con exito');
    }
}
