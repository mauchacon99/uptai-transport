<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Routes, Drivers, Cars, CarsExitsDetails};

class CarsExits extends Model
{
    public function Routes()
    {
        return $this->belongsTo(Routes::class);
    }

    public function Drivers()
    {
        return $this->belongsTo(Drivers::class);
    }
    
    public function Cars()
    {
        return $this->belongsTo(Cars::class);
    }

    public function CarsExitsDetails()
    {
        return $this->belongsTo(CarsExitsDetails::class);
    }

}
