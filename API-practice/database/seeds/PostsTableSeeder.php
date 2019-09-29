<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = 'Viet Nam - Thai Lan';
        $post->content = 'Viet Nam thang Thai Lan';
        $post->due_date = '2019-09-05';
        $post->save();

        $post = new Post();
        $post->title = 'MU';
        $post->content = 'MU lai thua';
        $post->due_date = '2019-09-06';
        $post->save();

        $post = new Post();
        $post->title = 'Tran Quang Dai hi sinh';
        $post->content = 'Tran Quang Dai hi sinh cho to quoc';
        $post->due_date = '2019-09-07';
        $post->save();
    }
}
