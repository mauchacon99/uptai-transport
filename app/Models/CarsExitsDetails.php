<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{CarsExits};

class CarsExitsDetails extends Model
{
    protected  $guarded = [];
    
    public function carsExits()
    {
        return $this->belongsTo(CarsExits::class, 'cars_exits_id');
    }
}
