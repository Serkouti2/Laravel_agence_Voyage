<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    protected $fillable = ['nom','description','duree','villeDepart','villeArrivee','date','heureDepart','heureArrivee','type','prix'];
    use HasFactory;

    public function reservation()
    {
        return $this->hasMany(reservation::class);
    }

    public function vehicule()
    {
        return $this->belongsToMany(Vehicule::class);
    }

    public function activite()
    {
        return $this->belongsToMany(Activite::class);
    }
}
