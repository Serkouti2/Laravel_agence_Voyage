<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::with('Client','Voyage')->get();
        // $reservations = $reservations->with('Voyage')->get();
        

        return response()->json([
            'data' => $reservations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $reservation = new Reservation();

        $reservation->date = $request->date;
        $reservation->nombrePlace = $request->nombrePlace;
        $reservation->client_id =$request->client_id;
        $reservation->voyage_id = $request->voyage_id;

        $reservation->save();

        return response()->json([
            'status' => 200
        ]);
    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReservationRequest  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $reservation = Reservation::find($id);

        $reservation->date = $request->date;
        $reservation->nombrePlace = $request->nombrePlace;
        $reservation->client_id =$request->client_id;
        $reservation->voyage_id = $request->voyage_id;

        $reservation->save();

        return response()->json([
            'status' => 200
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return response()->json([
            'status' => 200
        ]);
    }
}
