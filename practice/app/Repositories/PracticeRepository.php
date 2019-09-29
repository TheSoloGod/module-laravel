<?php
namespace App\Repositories;

use App\Repositories\Repository;

class PracticeRepository extends Repository implements PracticeRepositoryInterface
{
    public function getModel()
    {
        return \App\Practice::class;
    }
}
