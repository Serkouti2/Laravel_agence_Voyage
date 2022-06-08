<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use App\Http\Requests\StoreVehiculeRequest;
use App\Http\Requests\UpdateVehiculeRequest;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Vehicule::all();

        return response()->json([
            'status' => 200,
            'data' => $vehicules
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $vehicule = new Vehicule();

        $vehicule->matricule = $request->matricule;
        $vehicule->capacite = $request->capacite;

        $vehicule->save();

        return response()->json([
            'status' => 200,
        ]);
    }

  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
    }

  
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehiculeRequest  $request
     * @param  \App\Models\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $vehicule = Vehicule::find($id);

       
        $vehicule->matricule = $request->matricule;
        $vehicule->capacite = $request->capacite;

        $vehicule->save();

        return response()->json([
            'status' => 200,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $vehicule = Vehicule::find($id);

        $vehicule->delete();
        return response()->json([
            'status' => 200,
        ]);
    }
}
