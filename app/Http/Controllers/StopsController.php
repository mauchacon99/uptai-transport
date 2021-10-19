<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Addreses,Stops};
use App\Http\Requests\Stops\{CreateRequest};


class StopsController extends Controller
{
    public function index(Addreses $address)
    {
    	return view('stops.index',[
    		'address' => $address,
    		'stops'   => $address->stops
    	]);
    }

    public function toggleStatus(Stops $stop)
    {
    	$address = $stop->addreses;
    	$stop->status = ($stop->status == 0)? 1 : 0;
        $stop->update();

        return redirect()->route('stops.index',[
            'address' => $address,
            'stops'   => $address->stops
        ]);
    }

    public function store(CreateRequest $request, Addreses $address)
    {
		$request->createStops($address);

    	return redirect()->route('stops.index',[
            'address' => $address,
    		'stops'   => $address->stops
        ]);
    }

    public function destroy(Stops $stop)
    {
        $address = $stop->Addreses;
        $stop->delete();
        return view('stops.index',[
    		'address' => $address,
    		'stops'   => $address->stops
    	]);
    }
}
