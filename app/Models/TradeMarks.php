<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Cars,Models};

class TradeMarks extends Model
{
    public function cars()
    {
        return $this->hasMany(Cars::class);
    }

    public function models()
    {
        return $this->hasMany(Models::class);
    }
}
