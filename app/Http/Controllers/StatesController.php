<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{States};

class StatesController extends Controller
{
    
    public function toggleMunicipalities($id)
    {

    	$Response = States::find($id)->municipalities;

    	return \Response::json($Response, 200);
    }
}
