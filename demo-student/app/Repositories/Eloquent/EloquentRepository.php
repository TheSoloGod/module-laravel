<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
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

   public function create(array $data)
   {
        return $this->model->create($data);
   }

   public function update(array $data, $obj)
   {
        return $obj->update($data);
   }

   public function delete($obj)
   {
       return $obj->delete();
   }

   public function getByID($id)
   {
       $result = $this->model->findOrFail($id);
       return $result;
   }
}
