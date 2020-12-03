<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{user,RoleUser};

class Role extends Model
{
   public function users()
    {
        return $this->belongsToMany(User::class, 'user_id')->withTimestamps();
    }

    public function RoleUser()
    {
        return $this->hasMany(RoleUser::class, 'role_id');
    }
}
