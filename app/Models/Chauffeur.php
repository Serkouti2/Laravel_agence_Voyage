<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    protected $fillable = ['nom','prenom','telephone','nationalite,'];

    use HasFactory;


    public function vehicule()
    {
       return $this->belongsToMany(Vehicule::class);
    }
}
