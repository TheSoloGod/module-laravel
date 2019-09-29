<?php
namespace App\Repositories;

use App\Repositories\RepositoryInterface;

abstract class RepositoryController implements RepositoryInterface
{
    protected $model;

    abstract public function getModel();

    public function setModel()
    {
        $this->model = $this->getModel();
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getByID()
    {
        // TODO: Implement getByID() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }
}
