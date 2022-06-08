<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Http\Requests\StoreVoyageRequest;
use App\Http\Requests\UpdateVoyageRequest;
use Exception;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = Voyage::all();

        return response()->json([
            'status' => 200,
            'data' => $voyages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $voyage = new Voyage();

            $voyage->nom = $request->nom;
            $voyage->description = $request->description;
            $voyage->duree = $request->duree;
            $voyage->villeDepart = $request->villeDepart;
            $voyage->villeArrivee = $request->villeArrivee;
            $voyage->date = $request->date;
            $voyage->heureDepart = $request->heureDepart;
            $voyage->heureArrivee = $request->heureArrivee;
            $voyage->type = $request->type;
            $voyage->prix = $request->prix;
    
            $voyage->save();

            $voyage->vehicule()->attach($request->vehicule);
    
            return response()->json([
                'status' => 200
            ]);
        
      
       
    }

 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function show(Voyage $voyage)
    {
        //
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVoyageRequest  $request
     * @param  \App\Models\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $voyage = Voyage::find($id);

        $voyage->nom = $request->nom;
        $voyage->description = $request->description;
        $voyage->duree = $request->duree;
        $voyage->villeDepart = $request->villeDepart;
        $voyage->villeArrivee = $request->villeArrivee;
        $voyage->date = $request->date;
        $voyage->heureDepart = $request->heureDepart;
        $voyage->heureArrivee = $request->heureArrivee;
        $voyage->type = $request->type;
        $voyage->prix = $request->prix;
        $voyage->vehicule()->attach($request->vehicule);

        $voyage->save();

        return response()->json([
            'status' => 200
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $voyage = Voyage::find($id);
        $voyage->delete();

        return response()->json([
            'status' => 200
        ]);
    }
}
