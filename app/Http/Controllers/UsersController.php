<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
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
    		'users' => User::with('roles')->get(),
    	]);
    }

    public function create()
    {
    	return view('users.create',['
    		users' => User::with('roles')->get(),
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
    public function edit(User $user)        
    {
   
         return view('users.edit',[
            'user'  => $user,
            'roles' => Role::all(),
         ]);
    }
    public function update(UserEditRequest $request, User $user)        
    {
         $request->createUser($user);

         return view('users.index',[
    		'users' => User::with('roles')->get(),
    	]);
    }

    public function statusToogle(User $user)
    {
       
        $user->status = ($user->status == 0) ? 1 : 0;
        $user->update();
        $user->save();
        return redirect()->route('users.index',[
            'users' => User::all()
        ]);
    }
}
