<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Municipalities};

class MunicipalitiesController extends Controller
{
    public function toggleParishes($id)
    {

    	
    	$Response = Municipalities::find($id)->parishes;

    	return \Response::json($Response, 200);
    }
}
