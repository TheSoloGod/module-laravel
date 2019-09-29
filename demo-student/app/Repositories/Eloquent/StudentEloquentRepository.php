<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\StudentInterface;
use App\Student;

class StudentEloquentRepository extends EloquentRepository implements StudentInterface
{
    public function getModel()
    {
        return Student::class;
    }

    public function filterByCity($column, $value, $number)
    {
        $result = $this->model->where($column, $value)->paginate($number);
        return $result;

    }

    public function paginate($number)
    {
        $result = $this->model->paginate($number);
        return $result;
    }
}
