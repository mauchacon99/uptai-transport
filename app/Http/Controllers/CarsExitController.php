<?php

namespace App\Http\Controllers;

use App\Http\Requests\Exits\StoreRequest;
use Illuminate\Http\Request;
use App\Models\{CarsExits, Routes, Drivers,Cars};
 

class CarsExitController extends Controller
{
    
    public function index()
    {
    	return view('carsExits.index',[
    		'exits'   => CarsExits::all(),
    	]);
    }

    public function create()
    {
    	return view('carsExits.create',[
    		'exits'   => CarsExits::with('CarsExits'),
    		'drivers' => Drivers::where('status', 1)->get(),
    		'routes'  => Routes::all(),
    		'cars'    => Cars::where('status', 1)->get()
    	]);
    }

	public function store(StoreRequest $request)
	{
		$request->insert();

		return view('carsExits.index',[
    		'exits'   => CarsExits::all(),
    	]);
	}
}
