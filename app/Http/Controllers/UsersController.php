<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use Illuminate\Http\Request;
use App\Models\{User,Role, RoleUser};
use Illuminate\Support\Facades\{DB, Gate};

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if (! Gate::allows('user.index')) {
            return abort(401);
        }
        
    	return view('users.index',[
    		'users' => User::with('roles')->get(),
    	]);
    }

    public function create()
    {
        if (! Gate::allows('user.create')) {
            return abort(401);
        }
        
    	return view('users.create',['
    		users' => User::with('roles')->get(),
    	   'roles' => Role::all(),
    	]);
    }

    public function userBitacora(User $user)        
    {
        if (! Gate::allows('user.bitacora')) {
            return abort(401);
        }
         return view('users.bitaUser',[
            'activity' => $user->activity,
            'user'     => $user
         ]);
    }
    public function edit(User $user)        
    {
        if (! Gate::allows('user.edit')) {
            return abort(401);
        }
         return view('users.edit',[
            'user'  => $user,
            'roles' => Role::all(),
         ]);
    }
    public function update(UserEditRequest $request, User $user)        
    {
        if (! Gate::allows('user.edit')) {
            return abort(401);
        }
         $request->createUser($user);

         return view('users.index',[
    		'users' => User::with('roles')->get(),
    	]);
    }

    public function statusToogle(User $user)
    {
        if (! Gate::allows('user.toogleStatus')) {
            return abort(401);
        }
        $user->status = ($user->status == 0) ? 1 : 0;
        $user->update();
        $user->save();
        return redirect()->route('users.index',[
            'users' => User::all()
        ]);
    }
}
