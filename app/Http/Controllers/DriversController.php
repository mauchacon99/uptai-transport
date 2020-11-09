<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Drivers};
use App\Http\Requests\Drivers\{CreateRequest,UpdateRequest};

class DriversController extends Controller
{
    public function index()
    {
    	return view('drivers.index',[
    		'drivers' => Drivers::all()
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

      public function destroy(Drivers $driver)
    {

    	$driver->delete();
        return redirect()->route('drivers.index',[
            'drivers' => Drivers::all()
        ]);
    }

}
