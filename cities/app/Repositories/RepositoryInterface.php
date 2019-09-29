<?php
namespace App\Repositories;

interface RepositoryInterface
{
    public function getAll();

    public function getByID();

    public function create();

}
