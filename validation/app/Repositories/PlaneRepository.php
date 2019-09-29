<?php


namespace App\Repositories;


use App\Plane;

class PlaneRepository extends Repository
{

    public function getModel()
    {
        return Plane::class;
    }
}
