<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Bitacoras};
use Illuminate\Support\Facades\{DB, Gate};

class BitacorasController extends Controller
{
 	public function index()
 	{
		
		if (! Gate::allows('activities.index')) {
            return abort(401);
        }
 		$bitacora = Bitacoras::orderBy('id', 'desc')->get();

 		return view('bitacora.index',[
 			'activities' => $bitacora
 		]);
 	}
}
