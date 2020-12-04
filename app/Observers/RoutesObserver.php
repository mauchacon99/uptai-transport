<?php

namespace App\Observers;
use App\Models\{Routes, Bitacoras};

class RoutesObserver
{
     /**
     * Handle the routes "created" event.
     *
     * @param  \App\routes  $routes
     * @return void
     */
    public function created(routes $route)
    {
        $data = [
            'description' => ' publico la salida #'.$route->id,
            'action'      => 'created',
            'name_model'  => 'routes',
        ];
        Bitacoras::record($route, $data);
    }

    /**
     * Handle the routes "updated" event.
     *
     * @param  \App\routes  $routes
     * @return void
     */
    public function updated(routes $route)
    {
        $data = [
            'description' => ' modifico la salida #'.$route->id,
            'action'      => 'update',
            'name_model'  => 'routes',
        ];
        Bitacoras::record($route, $data);
    }

    /**
     * Handle the routes "deleted" event.
     *
     * @param  \App\routes  $routes
     * @return void
     */
    public function deleted(routes $route)
    {
        $data = [
            'description' => 'elimino logicamente la salida'.$route->id,
            'action'      => 'deleted',
            'name_model'  => 'routes',
        ];

        Bitacoras::record($route, $data);
    }
 
}
