<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';

    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
