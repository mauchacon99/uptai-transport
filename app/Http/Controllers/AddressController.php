<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Addreses, States};
use App\Http\Requests\Addreses\{CreateRequest};
use Illuminate\Support\Facades\Gate;

class AddressController extends Controller
{
     public function index()
     {
		if (! Gate::allows('address.index')) {
            return abort(401);
        }
 		return view('address.index',[
 			'Addreses' => Addreses::all(),
 		]);
     }

     public function create()
     {
		if (! Gate::allows('address.create')) {
            return abort(401);
        }
     	return view('address.create',[
 			'states' => States::all(),
 			'address' => new Addreses 
 		]);
     }

     public function store(CreateRequest $request)
     {
		if (! Gate::allows('address.create')) {
            return abort(401);
        }
     	$address = $request->createAddress();

     	return redirect()->route('stops.index',[
    		'address' => $address,
    		'stops'   => $address->stops
    	]);
     }

	 public function edit(Addreses $address)
	 {
		if (! Gate::allows('address.edit')) {
            return abort(401);
        }
		return view('address.edit',[
			'address'=> $address,
			'states' => States::all(),
		]);
	 }

	 
	function getAddress($id)
	{
		
		$address = Addreses::where('id', '<>', $id)->get();
		return response()->json($address);
	}

	 public function onlyTrashed()
    {
		if (! Gate::allows('address.onlyTrashed')) {
            return abort(401);
        }
        return view('address.onlyTrashed', [
            'Addreses' => Addreses::onlyTrashed()->get()
        ]);
    }

	public function destroy(Addreses $address)
	{
		if (! Gate::allows('address.deleteSoft')) {
            return abort(401);
        }
		$address->delete();

		return redirect()->route('address.index',[
			'address' => $address,
			'stops'   => $address->stops
		]);
	}
	public function restore(Request $request)
	{
		if (! Gate::allows('address.restore')) {
            return abort(401);
        }
		$address = Addreses::onlyTrashed()->findOrFail($request->id);
		$address->restore();

		return redirect()->route('address.index',[
			'Addreses' => Addreses::all(),
		]);
	}

	public function forceDelete(Request $request)
	{
		if (! Gate::allows('address.destroy')) {
            return abort(401);
        }
		Addreses::where('id', $request->id)->forceDelete();
       
        return redirect()->route('address.onlyTrashed', [
            'Addreses' => Addreses::onlyTrashed()->get()
        ]);
	}
}
