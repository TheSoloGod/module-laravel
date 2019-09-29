<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'table_student';

    protected $fillable = ['name', 'age', 'city_id'];

    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
