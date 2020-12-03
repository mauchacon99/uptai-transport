<?php

namespace App\Observers;

use App\Models\Addreses as address ;
use App\Models\Bitacoras;

class AddressObserver
{
   	  public function deleted(address $address){
        
        $data = [
            'description' => 'elimino logicamente la ciudad '.$address->name,
            'action'      => 'deleted',
            'name_model'  => 'address',
        ];

	    Bitacoras::record($address, $data);
	  }

	  public function created(address $address){
        
        $data = [
            'description' => ' inserto la ciudad '.$address->name,
            'action'      => 'created',
            'name_model'  => 'address',
        ];

	    Bitacoras::record($address, $data);
	  }

	 public function updated(address $address){
        
        $data = [
            'description' => ' modifico la ciudad '.$address->name,
            'action'      => 'updated',
            'name_model'  => 'address',
        ];
        
	    Bitacoras::record($address, $data);
	 }

     public function restored(address $address){
        
        $data = [
            'description' => ' restauro la ciudad '.$address->name,
            'action'      => 'restore',
            'name_model'  => 'address',
        ];
        
        Bitacoras::record($address, $data);
    }

    public function forceDeleted(Address $address)
    {
        $data = [
            'description' => ' elimino fisicamente  la ciudad '.$address->name,
            'action'      => 'deleteForce',
            'name_model'  => 'address',
        ];
        Bitacoras::record($address, $data);
    }
}
