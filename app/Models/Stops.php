<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Addreses,Municipalities};

class Stops extends Model
{
    public function Addreses()
    {
        return $this->belongsTo(Addreses::class);
    }
    
}
