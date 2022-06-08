<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Http\Requests\StoreActiviteRequest;
use App\Http\Requests\UpdateActiviteRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activites = Activite::all();

        return response()->json([
            'status' => 200,
            'data' => $activites 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $activite = new Activite();

        $activite->nom = $request->nom;
        $activite->description = $request->description;
        $activite->prix = $request->prix;

        $activite->save();

        $activite->voyage()->attach($request->voyage);

        return response()->json([
            'status' => 200,
           
        ]);
    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show(Activite $activite)
    {
        //
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActiviteRequest  $request
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $activite = Activite::find($id);


        $activite->nom = $request->nom;
        $activite->description = $request->description;
        $activite->prix = $request->prix;
        $activite->voyage()->attach($request->voyage);

        $activite->save();

        return response()->json([
            'status' => 200,
           
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $activite = Activite::find($id);
        $activite->delete();

        return response()->json([
            'status' => 200,
           
        ]);
    }
}
