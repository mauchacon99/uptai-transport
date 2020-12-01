<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{User};
use Request;

class Bitacoras extends Model
{
    public function users()
    {
    	return $this->belongsTo(User::class);
    }

    static function record($model, $data)
    {
    	$bitacora = new Bitacoras;

    	$bitacora->action      = $data['action'];
    	$bitacora->name_model  = $data['name_model'];
    	$bitacora->description = auth()->user()->name.' '.$data['description'];
     	$bitacora->model_id    = $model->id;
    	$bitacora->users_id    = auth()->user()->id;
    	$bitacora->ip_address  = Request::ip();

    	$bitacora->save();
    }

}
