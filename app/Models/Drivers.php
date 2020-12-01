<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{CarsExits, Cars};

class Drivers extends Model
{

    protected $fillable = [
     	'identity' ,
        'name'     ,
        'surname'  ,
        'phone'    ,
        'sex'      ,
        'birthdate',
        'status',
   ];

    public function CarsExits()
    {
        return $this->hasMany(CarsExits::class);
    }

    public function cars()
    {
        return $this->hasManyThrough(cars::class, CarsExits::class);
    }
 
    

}
