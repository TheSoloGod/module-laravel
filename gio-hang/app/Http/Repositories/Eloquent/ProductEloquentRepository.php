<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\Contracts\ProductRepositoryInterface;
use App\Product;

class ProductEloquentRepository extends RepositoryEloquent implements ProductRepositoryInterface
{

    public function getModel()
    {
        return Product::class;
    }
}
