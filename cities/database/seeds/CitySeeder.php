<?php

use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            $city = new City();
            $data = [
                'name' => str_random(10),
                'country' => str_random(5)
            ];
            $city->create($data);
        }
    }
}
