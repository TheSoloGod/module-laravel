<?php
namespace App\Repositories\Contracts;

interface RepositoryInterface
{
    public function getAll();

    public function create(array $data);

    public function update(array $data, $obj);

    public function delete($obj);

    public function getByID($id);
}
