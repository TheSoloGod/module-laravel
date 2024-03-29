<?php


namespace App\Http\Repositories\Contract;


interface RepositoryInterface
{
    public function getAll();
    public function findById($id);
    public function create($data);
    public function update($data, $object);
    public function destroy($object);
}
