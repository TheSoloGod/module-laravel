<?php


namespace App\Http\Repositories\Contracts;


interface RepositoryInterface
{
    public function getAll();

    public function getByID($id);

}
