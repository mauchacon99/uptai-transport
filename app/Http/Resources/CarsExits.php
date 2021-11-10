<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class CarsExits extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'route'      => ucwords($this->routes->addresesExit->name  . ' ' . $this->routes->addresesIntermediate->name . ' ' . $this->routes->addresesDestination->name),
            'date_exit'  => $this->details->date_exit,
            'time_exit'  => $this->details->time_exit,
            'driver'     => $this->drivers->name . '' . $this->drivers->surname,
            'number_car' => $this->cars->number ,
            'plate_car'  => $this->cars->plate,
        ];
    }

     
}
