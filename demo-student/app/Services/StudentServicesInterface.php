<?php
namespace App\Services;

interface StudentServicesInterface
{
    public function filterByCity($request);

    public function paginate();
}
