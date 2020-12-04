<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Bitacoras};

class BitacorasController extends Controller
{
 	public function index()
 	{

 		$bitacora = Bitacoras::orderBy('id', 'desc')->get();

 		return view('bitacora.index',[
 			'activities' => $bitacora
 		]);
 	}
}
