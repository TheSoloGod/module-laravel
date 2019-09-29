<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=20; $i++){
            $student = new Student();
            $data =[
                'name' => str_random(10),
                'age' => mt_rand(10, 15),
                'city_id' => mt_rand(1, 4)
            ];
            $student->create($data);
        }
    }
}
