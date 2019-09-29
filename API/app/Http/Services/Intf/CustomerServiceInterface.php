<?php


namespace App\Http\Services\Intf;


interface CustomerServiceInterface
{
    public function getAll();
    public function findById($id);
    public function create($request);
    public function update($request, $id);
    public function destroy($id);
}
