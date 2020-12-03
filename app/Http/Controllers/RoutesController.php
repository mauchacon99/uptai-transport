<?php

namespace App\Http\Controllers;
use App\Models\{Routes, ExitsCars, Addreses};
use App\Http\Requests\Routes\{CreateRequest};
use Illuminate\Http\Request;

class RoutesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('routes.index',[
    		'routes' => Routes::all(),
    	]);	

    }

    public function store(CreateRequest $request)
    {
        $request->createRoute();

        return view('routes.index',[
            'routes' => Routes::all(),
        ]);
    }

    public function create()
    {
    	return view('routes.create',[
    		'drivers' => new Routes,
            'Addreses' => Addreses::all()
    	]);	
    }

    public function showCars(Routes $route)
    {   
        return redirect()->route('routes.show-cars',[
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
