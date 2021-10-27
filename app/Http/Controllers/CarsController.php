<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Cars,TradeMarks,Models, Bitacoras, user};
use App\Http\Requests\Cars\{CreateRequest,UpdateRequest};
use Illuminate\Support\Facades\{DB, Gate};
 

 
use Response;

class CarsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        if (! Gate::allows('cars.index')) {
            return abort(401);
        }
    	return view('cars.index',[
    		'cars' => Cars::all()
    	]);
    }

    public function create()
    {
          
        if (! Gate::allows('cars.create')) {
            return abort(401);
        }
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
  
        if (! Gate::allows('cars.create')) {
            return abort(401);
        }
    	$request->carsCreate();

    	return redirect()->route('cars.index',[
    		'cars' => Cars::all()
    	]);
    }

    public function show(Cars $car)
    {
          
        if (! Gate::allows('cars.edit')) {
            return abort(401);
        }
        return view('cars.edit',[
            'cars' => $car,
            'tradeMarks'=> TradeMarks::all(),
            'Models'	=> Models::all()
        ]);
    }

    public function update(UpdateRequest $request, Cars $cars)
    {
          
        if (! Gate::allows('cars.edit')) {
            return abort(401);
        }
        $request->carsUpdate($cars);
        return redirect()->route('cars.index',[
            'cars' => Cars::all()
        ]);
    }

      public function delete(Cars $car)
    {
          
        if (! Gate::allows('cars.deleteSoft')) {
            return abort(401);
        }
        $car->delete();

        return redirect()->route('cars.index',[
            'cars' => Cars::all()
        ]);
    }

    public function destroy(Cars $car)
    {
        if (! Gate::allows('cars.destroy')) {
            return abort(401);
        }
        $car->forceDelete();

        return redirect()->route('cars.index',[
            'cars' => Cars::all()
        ]);
    }

   public function statusToogle(Cars $car)
    {
         
        if (! Gate::allows('cars.changeStatus')) {
            return abort(401);
        }
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
        if (! Gate::allows('cars.destroy')) {
            return abort(401);
        }
        return view('cars.onlyTrashed',[
            'cars' => Cars::onlyTrashed()->get()
        ]);
    }

    public function restore(Request $request)
    {   
        if (! Gate::allows('cars.restore')) {
            return abort(401);
        }
        $car = Cars::onlyTrashed()->findOrFail($request->id);
        $car->restore();

       return redirect()->route('cars.index',[
            'cars' => Cars::all()
        ]);
    }

    public function remove(Request $request)
    {   
        if (! Gate::allows('cars.destroy')) {
            return abort(401);
        }
        Cars::where('id', $request->id)->forceDelete();
       
        return redirect()->route('cars.onlyTrashed',[
            'cars' => Cars::onlyTrashed()->get()
        ]);
    }
}
