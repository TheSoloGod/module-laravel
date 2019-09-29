<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Post_CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_category')->insert([
        ['post_id' => '2',
            'category_id' => '1'],
        ['post_id' => '3',
            'category_id' => '1'],
        ['post_id' => '4',
            'category_id' => '3'],
        ]);
    }
}
