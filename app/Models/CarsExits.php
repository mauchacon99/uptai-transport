<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Routes, Drivers, Cars, CarsExitsDetails};
use Carbon;

class CarsExits extends Model
{
    public function Routes()
    {
        return $this->belongsTo(Routes::class);
    }
    public function cars()
    {
         return $this->belongsTo(Cars::class);
    }
    public function Drivers()
    {
        return $this->belongsTo(Drivers::class);
    }
    
    public function CarsExits()
    {
        return $this->belongsTo(Cars::class);
    }

    public function details()
    {
        return $this->hasOne(CarsExitsDetails::class, 'cars_exits_id');
    }

     public function scopeBetweenDate($query)
    {
        if(empty(request('from')) && empty(request('to'))) {
            return $query->orderByDesc('created_at');
        }else{
          return  $query->whereBetween('created_at', [
            Carbon::parse(request('from'))->startOfDay(),
            Carbon::parse(request('to'))->endOfDay(),
            ])->orderByDesc('created_at');
        }
    }

}
