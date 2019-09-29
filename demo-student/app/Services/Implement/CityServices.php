<?php


namespace App\Services\Implement;


use App\Repositories\Contracts\CityInterface;
use App\Services\CityServicesInterface;

class CityServices extends Services implements CityServicesInterface
{
    protected $cityEloquentRepository;

    public function __construct(CityInterface $cityEloquentRepository)
    {
        $this->cityEloquentRepository = $cityEloquentRepository;
    }

    public function getAll()
    {
        return $this->cityEloquentRepository->getAll();
    }

    public function create($request)
    {
        $data = $request->all();
        $this->cityEloquentRepository->create($data);
    }

    public function update($request)
    {
        $id = $request->id;
        $result = $this->getByID($id);
        $data = $request->all();
        $this->cityEloquentRepository->update($data, $result);
    }

    public function delete($request)
    {
        $id = $request->id;
        $result = $this->getByID($id);
        $this->cityEloquentRepository->delete($result);
    }

    public function getByID($id)
    {
        $result = $this->cityEloquentRepository->getByID($id);
        return $result;
    }
}
