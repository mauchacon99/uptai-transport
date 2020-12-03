<?php

namespace App\Observers;
use App\Models\{Stops,Bitacoras};

class StopsObserver
{
    /**
     * Handle the stops "created" event.
     *
     * @param  \App\stops  $stops
     * @return void
     */
    public function created(Stops $stop)
    {
        $data = [
            'description' => ' creo la parada #'.$stop->name.' a la ciudad'.$stop->address->name
            'action'      => 'created',
            'name_model'  => 'Stops',
        ];
        Bitacoras::record($stop, $data);
    }

    /**
     * Handle the stops "updated" event.
     *
     * @param  \App\Stops  $stop
     * @return void
     */
    public function updated(Stops $stop)
    {
        $data = [
            'description' => ' modifico la parada '.$stop->name.' a la ciudad'.$stop->address->name,
            'action'      => 'update',
            'name_model'  => 'Stops',
        ];
        Bitacoras::record($stop, $data);
    }

    /**
     * Handle the stops "deleted" event.
     *
     * @param  \App\stops  $stops
     * @return void
     */
    public function deleted(Stops $stop)
    {
        $data = [
            'description' => 'elimino logicamente la parada'.$stop->name.' de la ciudad '.$stop->address->name,
            'action'      => 'deleted',
            'name_model'  => 'stops',
        ];

        Bitacoras::record($stop, $data);
    }
}
