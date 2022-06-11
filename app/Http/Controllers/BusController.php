<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;


class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bus::all();
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
            'bus_name'=>'required',
            'plate_number'=>'required',
            'insurance_number'=>'required',
            'bus_image'=>'required',
            'total_seats'=>'required',
            'depature_time'=>'required',
            'class_id'=>'required',
            'driver_id'=>'required'
        ]);
        return Bus::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Bus::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $busDetails = Bus::find($id);
        $busDetails -> update($request->all());
        return $busDetails;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Bus::destroy($id);
    }
}
