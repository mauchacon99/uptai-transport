<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Addreses, States};
 

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
}
