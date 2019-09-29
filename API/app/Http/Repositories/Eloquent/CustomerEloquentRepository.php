<?php


namespace App\Http\Repositories\Eloquent;


use App\Customer;

class CustomerEloquentRepository extends EloquentRepository
{

    public function getModel()
    {
        return Customer::class;
    }
}
