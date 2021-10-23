<?php

namespace App\Http\Requests\Exits;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\{CarsExits, CarsExitsDetails, Cars, Drivers};

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       
         return   [
            'routes_id'  => ['present', 'required'],
            'cars_id'    => ['present'],
            'description'=> ['required'],
            'time_exit'  => ['required'],
            'time_entry' => ['required'],
            'time_public'  => ['present'],
            'date_exit'    => ['required'],
            'date_public'  => ['present'],       
            'drivers_id' => ['present','required']
         ];
         
    }

    public function insert()
    {

       
        $CarsExits = CarsExits::create([
            'routes_id'  => $this->routes_id,
            'cars_id'    => $this->cars_id,
            'drivers_id' => $this->drivers_id,
        ]);

        
        
        $CarsExits->details()->create([
            'description'=> $this->description,
            'time_exit'  => $this->time_exit,
            'time_entry' => $this->time_entry,
            'time_public'   => $this->time_public,
            'date_exit'     => $this->date_exit,
            'date_public'   => $this->date_public,      
            'status_public' => $this->date_public && $this->time_public ?  1 : 0
        ]); 

        
        //cars
        $car =  Cars::find($this->cars_id);
        $car->status = 0;
        $car->update();
        
        //driver
        $driver = Drivers::find($this->cars_id);
        $driver->status = 0;
        $car->update();

        return true;
    }
}
