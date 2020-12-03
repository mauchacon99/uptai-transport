<?php

namespace App\Observers;
 
use App\Models\{User, Bitacoras};

class userObserver
{
       /**
     * Handle the cars "created" event.
     *
     * @param  \App\user  $user
     * @return void
     */
    public function created(user $user)
    {
        $data = [
            'description' => ' inserto el usuario con el correo '.$user->email,
            'action'      => 'created',
            'name_model'  => 'user',
        ];
        Bitacoras::record($user, $data);
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\user  $user
     * @return void
     */
    public function updated(user $user)
    {
        $data = [
            'description' => ' actualizo el usuario  '.$user->plate,
            'action'      => 'update',
            'name_model'  => 'user',
        ];
        Bitacoras::record($user, $data);
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\user  $user
     * @return void
     */
    public function deleted(user $user)
    {
        $data = [
            'description' => 'elimino fisicamente el usuario '.$user->email,
            'action'      => 'deleted',
            'name_model'  => 'user',
        ];
        
        Bitacoras::record($user, $data);
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\user  $user
     * @return void
     */
}
