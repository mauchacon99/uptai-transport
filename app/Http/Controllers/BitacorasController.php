<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Bitacoras};

class BitacorasController extends Controller
{
 	public function index()
 	{

 		$bitacora = Bitacoras::all();

 		return view('bitacora.index',[
 			'activities' => $bitacora
 		]);
 	}
}
