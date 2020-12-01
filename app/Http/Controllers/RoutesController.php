<?php

namespace App\Http\Controllers;
use App\Models\{Routes, ExitsCars};
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    
    public function index()
    {
    	 return view('routes.index',[
    		'routes' => Routes::all(),
    	]);	

    }

    public function create()
    {
    	return view('routes.create',[
    		'drivers' => new Routes,
    	]);	
    }

    public function showCars(Routes $route)
    {   
        return view('routes.show-cars',[
            'exits'  =>  $route->CarsExits,
            'route'  =>  $route
        ]);
    }
    public function showDrivers(Routes $route)
    {   
        return view('routes.show-drivers',[
            'exits'=> $route->CarsExits,
            'route'=> $route
        ]);
    }
}
