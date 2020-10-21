<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Cars};

class TestController extends Controller
{
    public function index()
    {
        $test = Cars::all();
        $test->last();

        return view('test',[
            'Test' => $test,
        ]);
    }
}
