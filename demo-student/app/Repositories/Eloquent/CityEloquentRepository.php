<?php


namespace App\Repositories\Eloquent;


use App\City;
use App\Repositories\Contracts\CityInterface;

class CityEloquentRepository extends EloquentRepository implements CityInterface
{
    public function getModel()
    {
        return City::class;
    }
}
