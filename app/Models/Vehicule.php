<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $fillable = ['matricule','capacite'];

    use HasFactory;

    public function chauffeur()
    {
       return $this->belongsToMany(Chauffeur::class);
    }

    public function voyage()
    {
        return $this->belongsToMany(Voyage::class);
    }
}
