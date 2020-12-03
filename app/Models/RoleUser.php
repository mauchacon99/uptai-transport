<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{User,Role};

class RoleUser extends Model
{

    protected $table = "role_user";

	protected $fillable = [
     	'role_id' ,
   ];
    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

     public function role()
    {
    	return $this->belongsTo(Role::class);
    }
}
