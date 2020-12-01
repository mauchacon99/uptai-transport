<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Addreses, CarsExits};

class Routes extends Model
{
    public function addresesExit()
    {
        return $this->belongsTo(Addreses::class, 'addreses_exit_id');
    }

    public function addresesIntermediate()
    {
        return $this->belongsTo(Addreses::class, 'addreses_intermediate_id');
    }

    public function addresesDestination()
    {
        return $this->belongsTo(Addreses::class, 'addreses_destination_id');
    }

    public function CarsExits()
    {
        return $this->hasMany(CarsExits::class);
    }
}
