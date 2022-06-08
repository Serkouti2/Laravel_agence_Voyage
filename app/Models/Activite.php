<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
   protected $fillable = ['nom','description','prix'];
    use HasFactory;

    public function voyage()
    {
        return $this->belongsToMany(Voyage::class);
    }
}
