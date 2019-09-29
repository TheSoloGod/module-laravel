<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $customer = new Customer();
            $data = [
                'name' => str_random(10),
                'dob' => date('Y-m-d', mt_rand(1, time())),
                'email' => str_random(10) . '@gmail.com'
            ];
            $customer->create($data);
        }
    }
}
