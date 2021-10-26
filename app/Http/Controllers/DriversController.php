<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Drivers,TradeMarks, Routes, Cars, CarsExits};
use App\Http\Requests\Drivers\{CreateRequest,UpdateRequest};
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate;
use App\Events\DeleteAudit;
use Barryvdh\DomPDF\Facade as PDF;



class DriversController extends Controller
{
 

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('drivers.index',[
    		'drivers'=> Drivers::all(),
        ]);
    }

    public function showCars(Drivers $driver)
    {
        return view('drivers.show-cars',[
            'exits'  =>  $driver->CarsExits,
            'driver' =>  $driver
        ]);
    }

    public function showRoutes(Drivers $driver)
    {
        return view('drivers.show-routes',[
            'exits'  =>  $driver->CarsExits,
            'driver' =>  $driver
        ]);
    }


    public function create()
    {
    	return view('drivers.create',[
            'drivers' => new drivers,
        ]);
    }

    public function store(CreateRequest $request)
    {
    	$request->driversCreate();

    	return redirect()->route('drivers.index',[
    		'drivers' => Drivers::all()
    	]);
    }

    public function show(Drivers $driver)
    {
        return view('drivers.edit',[
            'drivers' => $driver,
        ]);
    }

    public function update(UpdateRequest $request, Drivers $driver)
    {
        $request->driversUpdate($driver);

        return redirect()->route('drivers.index',[
            'drivers' => Drivers::all()
        ]);
    }

      public function delete(Drivers $driver)
    {
        $driver->delete();

        return redirect()->route('drivers.index',[
            'drivers' => Drivers::all()
        ]);
    }

    public function restore(Request $request)
    {
       $driver = Drivers::onlyTrashed()->findOrFail($request->id);
       $driver->restore();

       return redirect()->route('drivers.index',[
            'Drivers' => Drivers::all()
        ]);
    }

    public function onlyTrashed()
    {
        return view('drivers.onlyTrashed',[
            'drivers' => Drivers::onlyTrashed()->get()
        ]);
    }
     public function remove(Request $request)
    {
        Drivers::where('id', $request->id)->forceDelete();
       
        return view('drivers.onlyTrashed',[
            'drivers' => Drivers::onlyTrashed()->get()
        ]);
    }

}
