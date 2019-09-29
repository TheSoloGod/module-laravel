<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'San pham 1';
        $product->price = '10000';
        $product->save();

        $product = new Product();
        $product->name = 'San pham 2';
        $product->price = '20000';
        $product->save();

        $product = new Product();
        $product->name = 'San pham 3';
        $product->price = '30000';
        $product->save();
    }
}
