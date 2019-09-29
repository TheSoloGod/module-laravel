<?php

namespace App\Http\Controllers;

use App\Http\Services\Intface\ProductServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAll();
        return view('product.list', compact('products'));
    }

    public function show($id)
    {
        $product = $this->productService->getByID($id);
        return view('product.show', compact('product'));
    }

    public function cart($id)
    {
        $product = $this->productService->getByID($id);

        if(Session::has('cart')){
            $cart = Session::get('cart');
        }else{
            $cart = [];
        }


        return view('product.cart', compact('products'));
    }
}
