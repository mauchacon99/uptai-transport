<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};
 
class Employee extends Model
{
    //
    protected $guarded = [];
    protected $table = 'employee';
    use SoftDeletes;

}
