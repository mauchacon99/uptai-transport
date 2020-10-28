<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{CarsDetails, Models,TradeMarks};

class Cars extends Model
{
    public function details()
    {
        return $this->hasMany(CarsDetails::class);
    }
    public function model()
    {
        return $this->belongsTo(Models::class, 'models_id');
    }

    public function tradeMarks()
    {
        return $this->belongsTo(TradeMarks::class);
    }
}
