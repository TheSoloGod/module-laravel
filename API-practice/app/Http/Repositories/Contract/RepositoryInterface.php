<?php


namespace App\Http\Repositories\Contract;


interface RepositoryInterface
{
    public function getAll();

    public function getByID($id);

    public function create(array $data);

    public function update($object, array $data);

    public function delete($object);
}
