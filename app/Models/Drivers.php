<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{CarsExits};

class Drivers extends Model
{
    public function CarsExits()
    {
        return $this->hasMany(ExitCarsExits::class);
    }
}
