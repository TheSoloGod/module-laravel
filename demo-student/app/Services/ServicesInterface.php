<?php
namespace App\Services;

interface ServicesInterface
{
    public function getAll();

    public function create($request);

    public function update($request);

    public function delete($request);

    public function getByID($id);
}
