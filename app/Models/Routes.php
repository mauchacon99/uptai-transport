<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Addreses, CarsExits};

class Routes extends Model
{
    public $timestamps = false;

    protected $fillable = [
            'km',
            'addreses_exit_id',         
            'addreses_intermediate_id',
            'addreses_destination_id',
    ];
    public function addresesExit()
    {
        return $this->belongsTo(Addreses::class, 'addreses_exit_id');
    }

    public function addresesIntermediate()
    {
        return $this->belongsTo(Addreses::class, 'addreses_intermediate_id')->withDefault([
            'name' => ''
        ]);;
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
