<?php
namespace App\Repositories;

use App\Repositories\RepositoryInterface;

abstract class Repository implements RepositoryInterface
{
    protected $_model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->_model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result =  $this->_model->all();
        return $result;
    }

    public function find($id)
    {
        $result = $this->_model->findOrFail($id);
        return $result;
    }

    public function create(array $data)
    {
        return $this->_model->create($data);
    }

    public function update(array $data, $id)
    {
        $result = $this->find($id);
        return $result->update($data);
    }

    public function delete($id)
    {
        $result = $this->find($id);
        return $result->delete();
    }
}
