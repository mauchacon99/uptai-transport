<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Cars,TradeMarks};

class Models extends Model
{
    public function cars()
    {
        return $this->hasMany(Cars::class);
    }

    public function tradeMark()
    {
        return $this->belongsTo(TradeMarks::class, 'trade_marks_id');
    }
}
