<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Addreses, States};
use App\Http\Requests\Addreses\{CreateRequest};
 
class AddressController extends Controller
{
     public function index()
     {
 		return view('address.index',[
 			'Addreses' => Addreses::all(),
 		]);
     }

     public function create()
     {
     	return view('address.create',[
 			'states' => States::all(),
 			'address' => new Addreses 
 		]);
     }

     public function store(CreateRequest $request)
     {
     	$address = $request->createAddress();

     	return redirect()->route('stops.index',[
    		'address' => $address,
    		'stops'   => $address->stops
    	]);
     }

	 public function edit(Addreses $address)
	 {
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
        return view('address.onlyTrashed', [
            'Addreses' => Addreses::onlyTrashed()->get()
        ]);
    }

	public function destroy(Addreses $address)
	{
		$address->delete();

		return redirect()->route('address.index',[
			'address' => $address,
			'stops'   => $address->stops
		]);
	}
	public function restore(Request $request)
	{
		$address = Addreses::onlyTrashed()->findOrFail($request->id);
		$address->restore();

		return redirect()->route('address.index',[
			'Addreses' => Addreses::all(),
		]);
	}

	public function forceDelete(Request $request)
	{
		Addreses::where('id', $request->id)->forceDelete();
       
        return redirect()->route('address.onlyTrashed', [
            'Addreses' => Addreses::onlyTrashed()->get()
        ]);
	}
}
