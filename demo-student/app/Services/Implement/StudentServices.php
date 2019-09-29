<?php
namespace App\Services\Implement;

use App\Repositories\Contracts\StudentInterface;
use App\Services\StudentServicesInterface;

class StudentServices extends Services implements StudentServicesInterface
{
    protected $studentEloquentRepository;

    public function __construct(StudentInterface $studentEloquentRepository)
    {
        $this->studentEloquentRepository = $studentEloquentRepository;
    }

    public function getAll()
    {
        $result = $this->studentEloquentRepository->getAll();
        return $result;
    }

    public function create($request)
    {
        $data = $request->all();
        $this->studentEloquentRepository->create($data);
    }

    public function update($request)
    {
        $id = $request->id;
        $result = $this->getByID($id);
        $data = $request->all();
        $this->studentEloquentRepository->update($data, $result);
    }

    public function delete($request)
    {
        $id = $request->id;
        $result = $this->getByID($id);
        $this->studentEloquentRepository->delete($result);
    }

    public function getByID($id)
    {
        $result = $this->studentEloquentRepository->getByID($id);
        return $result;
    }

    public function filterByCity($city_id)
    {
        $column = 'city_id';
        $value = $city_id;
        $number = 5;
        $result = $this->studentEloquentRepository->filterByCity($column, $value, $number);
        return $result;
    }

    public function paginate()
    {
        $result = $this->studentEloquentRepository->paginate(10);
        return $result;
    }
}

