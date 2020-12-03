<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User,Role, RoleUser};

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('users.index',[
    		'users' => User::all(),

    	]);
    }

    public function create()
    {
    	return view('users.create',['
    		users' => User::all(),
    	   'roles' => Role::all(),
    	]);
    }

    public function userBitacora(User $user)        
    {
         return view('users.bitaUser',[
            'activity' => $user->activity,
            'user'     => $user
         ]);
    }

    public function statusToogle(User $user)
    {
         
        $user->status = ($user->status == 0)? 1 : 0;
        $user->update();

        return redirect()->route('users.index',[
            'users' => User::all()
        ]);
    }
}
