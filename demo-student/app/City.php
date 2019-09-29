<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $fillable = ['name', 'country'];

    public function student()
    {
        return $this->hasMany('App\Student');
    }
}
