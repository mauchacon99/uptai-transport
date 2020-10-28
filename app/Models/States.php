<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Municipalities, Parishes,Addreses};

class States extends Model
{
    public function municipalities()
    {
        return $this->hasMany(Municipalities::class);
    }

    public function parishes()
    {
        return $this->hasManyThrough(Parishes::class, Municipalities::class);
    }

    public function Addreses()
    {
        return $this->hasMany(Addreses::class);
    }
}
