<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{CarsExits};

class Drivers extends Model
{

    protected $fillable = [
     	'identity' ,
        'name'     ,
        'surname'  ,
        'phone'    ,
        'sex'      ,
        'birthdate',
        'status'
   ];

    public function CarsExits()
    {
        return $this->hasMany(ExitCarsExits::class);
    }
}
