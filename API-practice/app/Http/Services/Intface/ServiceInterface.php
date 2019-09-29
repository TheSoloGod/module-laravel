<?php


namespace App\Http\Services\Intface;


interface ServiceInterface
{
    public function getAll();

    public function getByID($id);

    public function create($request);

    public function update($id, $request);

    public function delete($id);
}
