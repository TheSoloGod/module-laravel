<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\Contract\CategoryRepositoryInterface;
use App\Http\Repositories\Eloquent\CategoryRepository;
use App\Http\Services\Intface\CategoryServiceInterface;

class CategoryService extends ServiceImplement implements CategoryServiceInterface
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll()
    {
        $categories = $this->categoryRepository->getAll();

        $statusCode = 200;
        if(!$categories)
            $statusCode = 404;

        $data = [
            'statusCode' => $statusCode,
            'category' => $categories
        ];

        return $data;
    }

    public function getByID($id)
    {
        $category = $this->categoryRepository->getByID($id);

        $statusCode = 200;
        if(!$category)
            $statusCode = 404;

        $data = [
            'statusCode' => $statusCode,
            'category' => $category
        ];

        return $data;
    }

    public function create($request)
    {
        $category = $this->categoryRepository->create($request);

        $statusCode = 201;
        if(!$category)
            $statusCode = 500;

        $data = [
            'statusCode' => $statusCode,
            'category' =>$category
        ];

        return $data;
    }

    public function update($id, $request)
    {
        $oldCategory = $this->categoryRepository->getByID($id);

        if(!$oldCategory){
            $newCategory = null;
            $statusCode = 404;
        }else{
            $newCategory = $this->categoryRepository->update($oldCategory, $request);
            $statusCode = 200;
        }

        $data = [
            'statusCode' => $statusCode,
            'category' => $newCategory
        ];

        return $data;
    }

    public function delete($id)
    {
        $category = $this->categoryRepository->getByID($id);

        $statusCode = 404;
        $message = 'Category not found';
        if($category){
            $this->categoryRepository->delete($category);
            $statusCode = 200;
            $message = 'Delete success';
        }

        $data = [
            'statusCode' => $statusCode,
            'message' => $message
        ];

        return $data;
    }
}
