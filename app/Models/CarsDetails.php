<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarsDetails extends Model
{
    public function Cars()
    {
        return $this->belongsToMany(Cars::class);
    }
}
