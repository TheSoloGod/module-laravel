<?php


namespace App\Repositories;


use http\Env\Request;
use test\Mockery\ArgumentObjectTypeHint;

abstract class Repository
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    abstract public function getModel();

    public function all()
    {
        return $result = $this->model->all();
    }

    public function create()
    {

    }

    public function store($request)
    {
        $this->model->create($request->all());
    }
}
