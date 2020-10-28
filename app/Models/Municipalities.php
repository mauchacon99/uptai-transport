<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{States, Parishes, Addreses, Stops};

class Municipalities extends Model
{
    public function states()
    {
        return $this->belongsTo(States::class);
    }

    public function parishes()
    {
        return $this->hasMany(Parishes::class);
    }

    public function Stops()
    {
        return $this->hasManyThrough(Stops::class, Addreses::class);
    }  

    public function addreses()
    {
        return $this->hasMany(Addreses::class);
    }
}
