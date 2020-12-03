<?php

namespace App\Observers;

use App\Models\{Drivers, Bitacoras};

class DriversObserver
{
    public function deleted(Drivers $driver){
        $data = [
            'description' => 'elimino el conductor con la C.I  '.$driver->identity,
            'action'      => 'deleted',
            'name_model'  => 'drivers',
        ];

        Bitacoras::record($driver, $data);
    }

    public function created(Drivers $driver){
    $data = [
        'description' => ' inserto el conductor con la C.I  '.$driver->identity,
        'action'      => 'created',
        'name_model'  => 'drivers',
    ];
    Bitacoras::record($driver, $data);
    }

    public function updated(Drivers $driver){

    $data = [
    'description' => ' modifico el conductor con la C.I  '.$driver->identity,
    'action'      => 'updated',
    'name_model'  => 'drivers',
    ];

    Bitacoras::record($driver, $data);
    }

    public function restore(Drivers $driver){

        $data = [
            'description' => ' reciclo el conductor con la C.I  '.$driver->identity,
            'action'      => 'restore',
            'name_model'  => 'drivers',
        ];
        
        Bitacoras::record($driver, $data);
    }
}
