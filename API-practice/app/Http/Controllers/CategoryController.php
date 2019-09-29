<?php

namespace App\Http\Controllers;

use App\Http\Services\Intface\CategoryServiceInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $dataCategory = $this->categoryService->getAll();
        return response()->json($dataCategory['category'], $dataCategory['statusCode']);
    }

    public function show($id)
    {
        $dataCategory = $this->categoryService->getByID($id);
        return response()->json($dataCategory['category'], $dataCategory['statusCode']);
    }

    public function store(Request $request)
    {
        $dataCategory = $this->categoryService->create($request->all());
        return response()->json($dataCategory['category'], $dataCategory['statusCode']);
    }

    public function update($id, Request $request)
    {
        $dataCategory = $this->categoryService->update($id, $request->all());
        return response()->json($dataCategory['category'], $dataCategory['statusCode']);
    }

    public function delete($id)
    {
        $dataCategory = $this->categoryService->delete($id);
        return response()->json($dataCategory['message'], $dataCategory['statusCode']);
    }
}
