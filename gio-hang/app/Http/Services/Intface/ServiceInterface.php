<?php


namespace App\Http\Services\Intface;


interface ServiceInterface
{
    public function getAll();

    public function getByID($id);
}
