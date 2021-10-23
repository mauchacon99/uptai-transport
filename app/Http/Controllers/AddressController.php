<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Addreses, States};
use App\Http\Requests\Addreses\{CreateRequest};

 

class AddressController extends Controller
{
     public function index()
     {
 		return view('address.index',[
 			'Addreses' => Addreses::all(),
 		]);
     }

     public function create()
     {
     	return view('address.create',[
 			'states' => States::all(),
 			'address' => new Addreses 
 		]);
     }

     public function store(CreateRequest $request)
     {
     	$address = $request->createAddress();

     	return redirect()->route('stops.index',[
    		'address' => $address,
    		'stops'   => $address->stops
    	]);
     }

	 public function edit(Addreses $address)
	 {
		return view('address.edit',[
			'address'=> $address,
			'states' => States::all(),
		]);
	 }
}
