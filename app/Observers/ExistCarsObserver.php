<?php

namespace App\Observers;
use App\Models\{CarsExits, Bitacoras};
class ExistCarsObserver
{
      /**
     * Handle the cars "created" event.
     *
     * @param  \App\Cars  $cars
     * @return void
     */
    public function created(CarsExits $exit)
    {
        $data = [
            'description' => ' publico la  salida  #'.$exit->id,
            'action'      => 'created',
            'name_model'  => 'Exits',
        ];
        Bitacoras::record($exit, $data);
    }

    /**
     * Handle the cars "updated" event.
     *
     * @param  \App\Cars  $cars
     * @return void
     */
    public function updated(CarsEXits $exit)
    {
        $data = [
            'description' => ' modifico la  salida  #'.$exit->id
            'action'      => 'update',
            'name_model'  => 'Exits',
        ];
        Bitacoras::record($exit, $data);
    }

    /**
     * Handle the cars "deleted" event.
     *
     * @param  \App\Cars  $cars
     * @return void
     */
    public function deleted(CarsExits $exit)
    {
        $data = [
            'description' => ' elimino logicamente la salida #'.$exit->id,
            'action'      => 'deleted',
            'name_model'  => 'exit',
        ];
        
        Bitacoras::record($exit, $data);
    }

    /**
     * Handle the cars "restored" event.
     *
     * @param  \App\Cars  $cars
     * @return void
     */
    public function restored(CarsExits $exit)
    {
         
        $data = [
            'description' => ' restauro la salida # '.$exit->id,
            'action'      => 'restored',
            'name_model'  => 'exit',
        ];
        Bitacoras::record($exit, $data);
    }

    /**
     * Handle the cars "force deleted" event.
     *
     * @param  \App\Cars  $cars
     * @return void
     */
    public function forceDeleted(CarsExits $exit)
    {
        $data = [
            'description' => ' elimino fisicamente  la salida #'.$exit->id,
            'action'      => 'deleteForce',
            'name_model'  => 'exit',
        ];
        Bitacoras::record($exit, $data);
    }
}
