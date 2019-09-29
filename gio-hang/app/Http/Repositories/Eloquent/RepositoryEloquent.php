<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\Contracts\RepositoryInterface;

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
        return $this->model->all();
    }

    public function getByID($id)
    {
        return $this->model->findOrFail($id);
    }
}
