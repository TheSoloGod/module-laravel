<?php


namespace App\Repositories;


use App\Car;
use http\Env\Request;

class CarRepository extends Repository
{

    public function getModel()
    {
        return Car::class;
    }
}
