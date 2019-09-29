<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\Contract\RepositoryInterface;

abstract class RepositoryEloquent implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }

    public function getByID($id)
    {
        $result = $this->model->findOrFail($id);
        return $result;
    }

    public function create(array $data)
    {
        try{
            $object = $this->model->create($data);
        }catch (\Exception $exception){
            return null;
        }

        return $object;
    }

    public function update($object, array $data)
    {
        $object->update($data);
        return $object;
    }

    public function delete($object)
    {
        $object->delete();
    }
}
