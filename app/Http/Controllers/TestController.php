<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Routes, CarsExits};

class TestController extends Controller
{
    public function index()
    {
        $test = CarsExits::find(1);
      
        dd($test->CarsExitsDetails);
       
    }
}
