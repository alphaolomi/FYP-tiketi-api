<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusClass;
class BusClassController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BusClass::all();
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
        $request->validate([
            'class_name'=>'required',
        ]);
        return BusClass::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusClass  $BusClass
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return  single item
        return BusClass::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusClass  $BusClass
     * @return \Illuminate\Http\Response
     */
    public function edit(BusClass $BusClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusClass  $BusClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $busClass = BusClass::find($id);
        $busClass -> update($request->all());
        return $busClass;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusClass  $BusClass
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return BusClass::destroy($id);
    }

    /**
     * Search the specified resource from storage.
     *
     * @param  \App\Models\BusClass  $BusClass
     * @return \Illuminate\Http\Response
     */
    public function search($class_name)
    {
        return BusClass::where('class_name','like','%'.$class_name.'%')->get();
    }
}
