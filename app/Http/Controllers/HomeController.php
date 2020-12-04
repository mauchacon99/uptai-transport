<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Drivers, Routes, Cars, CarsExits};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {

        return view('home',[
            'drivers' => Drivers::all()->count(),
            'cars'    => Cars::all()->count(),
            'routes'  => Routes::all()->count(),
            'exits'   => CarsExits::all()->count(),
        ]);
    }
}
