<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Municipalities, Addreses};

class Parishes extends Model
{
    public $timestamps = false;
    
    public function Municipalities()
    {
        return $this->belongsTo(Municipalities::class);
    }
    
    public function Addreses()
    {
        return $this->hasMany(Addreses::class);
    }
}
