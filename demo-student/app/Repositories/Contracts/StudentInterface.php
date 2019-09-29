<?php
namespace App\Repositories\Contracts;

interface StudentInterface
{
    public function filterByCity($column, $value, $number);

    public function paginate($number);
}
