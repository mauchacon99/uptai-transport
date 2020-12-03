<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Cars,TradeMarks,Models, Bitacoras, user};
use App\Http\Requests\Cars\{CreateRequest,UpdateRequest};
use Illuminate\Support\Facades\DB;

 
use Response;

class CarsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
    	return view('cars.index',[
    		'cars' => Cars::all()
    	]);
    }

    public function create()
    {
    	return view('cars.create',[
            'cars' 		=> new Cars,
    		'tradeMarks'=> TradeMarks::all(),
            'Models'    => Models::all()

        ]);
    }

    public function toggleModel($id)
    {
    	$model = TradeMarks::find($id)->models;

    	return \Response::json($model, 200);
    }

    public function store(CreateRequest $request)
    {

    	$request->carsCreate();

    	return redirect()->route('cars.index',[
    		'cars' => Cars::all()
    	]);
    }

    public function show(Cars $car)
    {
        return view('cars.edit',[
            'cars' => $car,
            'tradeMarks'=> TradeMarks::all(),
            'Models'	=> Models::all()
        ]);
    }

    public function update(UpdateRequest $request, Cars $car)
    {
        $request->carsUpdate($car);

        return redirect()->route('cars.index',[
            'cars' => Cars::all()
        ]);
    }

      public function destroy(Cars $car)
    {

        $car->delete();

        return redirect()->route('cars.index',[
            'cars' => Cars::all()
        ]);
    }

   public function statusToogle(Cars $car)
    {
         
        $car->status = ($car->status == 0)? 1 : 0;
        $car->update();

        return redirect()->route('cars.index',[
            'cars' => Cars::all()
        ]);
    }

    public function showExits(Cars $car)
    {
        
         return view('cars.show-exits',[
            'exits'  => $car->Exits,
            'cars' => $car
        ]);
    }

    public function showDrivers(Cars $car){
        return view('cars.show-drivers',[
            'exits'  => $car->Exits,
            'cars'   => $car,
        ]);
    }
    public function onlyTrashed()
    {
        return view('cars.index-soft',[
            'cars' => Cars::onlyTrashed()->get()
        ]);
    }

    public function test(Request $request)
    {   
       $car = Cars::onlyTrashed()->findOrFail($request->id);
       $car->restore();
       return redirect()->route('cars.index',[
            'cars' => Cars::all()
        ]);
    }
}
