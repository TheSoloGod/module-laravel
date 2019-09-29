<?php


namespace App\Http\Repositories\Eloquent;


use App\Category;
use App\Http\Repositories\Contract\CategoryRepositoryInterface;

class CategoryRepository extends RepositoryEloquent implements CategoryRepositoryInterface
{

    public function getModel()
    {
        $model = Category::class;
        return $model;
    }
}
