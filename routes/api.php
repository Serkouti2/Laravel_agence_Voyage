<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\VoyageController;
use App\Models\Chauffeur;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//////////////////////Clients\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('clients',[ClientController::class,'index']);
Route::post('clients',[ClientController::class,'create']);
Route::put('clients/{id}',[ClientController::class,'update']);
Route::delete('clients/{id}',[ClientController::class,'delete']);

//////////////////////Voyages\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::get('voyages',[VoyageController::class,'index']);
Route::post('voyages',[VoyageController::class,'create']);
Route::put('voyages/{id}',[VoyageController::class,'update']);
Route::delete('voyages/{id}',[VoyageController::class,'delete']);

//////////////////////Reservations\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('reservations',[ReservationController::class,'index']);
Route::post('reservations',[ReservationController::class,'create']);
Route::put('reservations/{id}',[ReservationController::class,'update']);
Route::delete('reservations/{id}',[ReservationController::class,'delete']);

//////////////////////Vehicules\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('vehicules',[VehiculeController::class,'index']);
Route::post('vehicules',[VehiculeController::class,'create']);
Route::put('vehicules/{id}',[VehiculeController::class,'update']);
Route::delete('vehicules/{id}',[VehiculeController::class,'delete']);

//////////////////////Chauffeurs\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('chauffeurs',[ChauffeurController::class,'index']);
Route::get('chauffeurs/{id}',[ChauffeurController::class,'show']);
Route::post('chauffeurs',[ChauffeurController::class,'create']);
Route::put('chauffeurs/{id}',[ChauffeurController::class,'update']);
Route::delete('chauffeurs/{id}',[ChauffeurController::class,'delete']);
Route::post('chauffeur/{id}/vehicule/add',[ChauffeurController::class,'add_Vehicule']);

//////////////////////Activites\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('activites',[ActiviteController::class,'index']);
Route::post('activites',[ActiviteController::class,'create']);
Route::put('activites/{id}',[ActiviteController::class,'update']);
Route::delete('activites/{id}',[ActiviteController::class,'delete']);
