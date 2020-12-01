<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{CarsExits, Routes};

class CarsExitController extends Controller
{
    
    public function index()
    {
    	return view('carsExits.index',[
    		'exits'  => CarsExits::all(),
    	]);
    }
}
