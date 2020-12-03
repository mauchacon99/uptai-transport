<?php

namespace App\Http\Controllers;

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
    		'exits'   => CarsExits::all(),
    		'drivers' => Drivers::all(),
    		'routes'  => Routes::all(),
    		'cars'    => Cars::all()
    	]);
    }
}
