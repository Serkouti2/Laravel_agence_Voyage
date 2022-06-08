<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $clients = Client::all();
       return response()->json([
           'status' => 200,
           'data' =>$clients
       ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->nationalite = $request->nationalite;
        $client->telephone = $request->telephone;
        $client->save();

        return response()->json([
            'sucess' => 200,
            'message' =>'Bien Ajouter'
        ]);
    }

  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $client = Client::find($request->id);
        return response()->json([
            'data' => $client
        ]);
    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $client = Client::find($id);
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->telephone = $request->telephone;
        $client->nationalite = $request->nationalite;
        $client->save();

        return response()->json([
            'status' => 200
        ]);
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function delete(Client $client,$id)
    {
        $client = Client::find($id);
        $client->delete();
        return response()->json([
            'status' => 200,
            'Message' => "Bien Supprimer"
        ]);
    }
}
