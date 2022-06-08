<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
protected $fillable = ['date','nombrePlace'];
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(client::class);
    }

    public function voyage()
    {
        return $this->belongsTo(voyage::class);
    }
}
