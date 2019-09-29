<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car_1 = new Car();
        $car_1->name = 'Fadil';
        $car_1->price = 400;
        $car_1->save();

        $car_2 = new Car();
        $car_2->name = 'Civic';
        $car_2->price = 800;
        $car_2->save();

        $car_3 = new Car();
        $car_3->name = 'C200';
        $car_3->price = 1300;
        $car_3->save();
    }
}
