<?php
namespace App\Services\Implement;

use App\Services\ServicesInterface;

abstract class Services implements ServicesInterface
{
    abstract public function getAll();

    abstract public function create($request);

    abstract public function update($request);

    abstract public function delete($request);

    abstract public function getByID($id);
}
