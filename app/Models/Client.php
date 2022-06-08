<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom','prenom','telephone','nationalite,'];
    use HasFactory;

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
