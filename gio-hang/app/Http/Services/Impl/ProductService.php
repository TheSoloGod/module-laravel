<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\Contracts\ProductRepositoryInterface;
use App\Http\Services\Intface\ProductServiceInterface;

class ProductService extends Service implements ProductServiceInterface
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll()
    {
        return $this->productRepository->getAll();
    }

    public function getByID($id)
    {
        return $this->productRepository->getByID($id);
    }
}
