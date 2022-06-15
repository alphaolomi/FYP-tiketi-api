<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Passenger;
use App\Models\Bus;
use Illuminate\Http\Request;
use App\Http\Controllers\PassengerController;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Booking::all();
    }

    /**
     * Show the form for creating a new resource.
     *'name','LIKE','%'.$email_or_name.'%'
     * @return \Illuminate\Http\Response
     */
    public function searchBus(Request $request)
    {
        $request->validate(
            [
                'region_from' => ['string'],
                'destination' => ['string'],
                'trip_date' => ['date'],
            ]
        );

        $region_from = $request->region_from;

        $destination = $request->destination;

        // $date = $request->trip_date;

        // $query = Bus::with('routes', )->with(['products' => function($query) use ($searchString){
        //     $query->where('name', 'like', '%'.$searchString.'%');
        // }])->get();;

        $results = Bus::with(['routes' => function($query) use ($region_from, $destination)
                                {
                                    $query->where('region_from', 'LIKE', '%'.$region_from.'%');
                                    $query->where('destination', 'LIKE', '%'.$destination.'%');
                                }])->get()[0]->routes;



            return response()->json([
                'data' => $results
            ], 200);


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
            'passenger_id'=>'required',
            'seat_number'=>'required',
            'buses_class_id'=>'required'

        ]);
        return Booking::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return Booking::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function BookingProcess(Booking $booking)
    {



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       $booking = Booking::find($id);
       $booking -> update($request->all());
       return $booking;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return Booking::destroy($id);
    }




    //All booking process
}
