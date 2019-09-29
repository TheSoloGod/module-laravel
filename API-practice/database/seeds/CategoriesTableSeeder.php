<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'The thao';
        $category->save();

        $category = new Category();
        $category->name = 'Giao duc';
        $category->save();

        $category = new Category();
        $category->name = 'Chinh tri';
        $category->save();
    }
}
