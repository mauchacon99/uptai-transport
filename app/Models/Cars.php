<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{CarsDetails, Models,TradeMarks,Bitacoras, CarsExits };

class Cars extends Model
{

    use SoftDeletes;

    protected $fillable = [
    'color','chairs','year' , 'plate','number','status','models_id','trade_marks_id'
    ];

    
    public $timestamps = false;

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
    
    public function bitacoras()
    {
        if(Bitacoras::where('name_model','cars')->get()){
           return $this->hasMany(Bitacoras::class,'model_id');
        }
    }

    public function Exits()
    {
        return $this->hasMany(CarsExits::class);
    
    }
}
