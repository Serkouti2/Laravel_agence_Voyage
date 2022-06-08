<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Http\Requests\StoreChauffeurRequest;
use App\Http\Requests\UpdateChauffeurRequest;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chauffeurs = Chauffeur::with('Vehicule')->get();

        return response()->json([
            'status' => 200,
            'data' => $chauffeurs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $chauffeur = new Chauffeur();

        $chauffeur->nom = $request->nom;
        $chauffeur->prenom = $request->prenom;
        $chauffeur->nationalite = $request->nationalite;
        $chauffeur->telephone = $request->telephone;
        $chauffeur->email = $request->email;

        $chauffeur->save();

        $chauffeur->vehicule()->attach($request->vehicule);


        return response()->json([
            'status' => 200
        ]);
    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chauffeur = Chauffeur::with('vehicule')->where('id','=',$id)->get();

        return response()->json([
            'data' => $chauffeur,
            'status' =>200
        ]);
    }

  
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChauffeurRequest  $request
     * @param  \App\Models\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $chauffeur = Chauffeur::find($id);

        
        $chauffeur->nom = $request->nom;
        $chauffeur->prenom = $request->prenom;
        $chauffeur->nationalite = $request->nationalite;
        $chauffeur->telephone = $request->telephone;
        $chauffeur->email = $request->email;

        $chauffeur->save();

        
        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $chauffeur = Chauffeur::find($id);
        $chauffeur->delete();

        return response()->json([
            'status' => 200
        ]); 
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function add_Vehicule($id,Request  $request)
    {
        $chauffeur = Chauffeur::find($id);
        $chauffeur->vehicule()->attach($request->vehicule);

        return response()->json([
            'status' => 200
        ]); 
    }
}
