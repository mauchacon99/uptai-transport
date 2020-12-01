<?php

namespace App\Observers;

use App\Models\{Cars, Bitacoras};


class CarsObserver
{
    /**
     * Handle the cars "created" event.
     *
     * @param  \App\Cars  $cars
     * @return void
     */
    public function created(Cars $cars)
    {
        $data = [
            'description' => ' inserto el vehiculo con la Placa  '.$cars->plate,
            'action'      => 'created',
            'name_model'  => 'cars',
        ];
        Bitacoras::record($cars, $data);
    }

    /**
     * Handle the cars "updated" event.
     *
     * @param  \App\Cars  $cars
     * @return void
     */
    public function updated(Cars $cars)
    {
        $data = [
            'description' => ' actualizo el vehiculo con la Placa  '.$cars->plate,
            'action'      => 'update',
            'name_model'  => 'cars',
        ];
        Bitacoras::record($cars, $data);
    }

    /**
     * Handle the cars "deleted" event.
     *
     * @param  \App\Cars  $cars
     * @return void
     */
    public function deleted(Cars $cars)
    {
        $data = [
            'description' => 'elimino el vehiculo con la Placa  '.$cars->plate,
            'action'      => 'deleted',
            'name_model'  => 'cars',
        ];
        
        Bitacoras::record($cars, $data);
    }

    /**
     * Handle the cars "restored" event.
     *
     * @param  \App\Cars  $cars
     * @return void
     */
    public function restored(Cars $cars)
    {
        //
    }

    /**
     * Handle the cars "force deleted" event.
     *
     * @param  \App\Cars  $cars
     * @return void
     */
    public function forceDeleted(Cars $cars)
    {
        //
    }
}
