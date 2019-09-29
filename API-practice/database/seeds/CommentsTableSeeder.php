<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new Comment();
        $comment->comment = 'Viet Nam vo dich';
        $comment->post_id = '2';
        $comment->save();

        $comment = new Comment();
        $comment->comment = 'Trung Cong Vo Dich';
        $comment->post_id = '2';
        $comment->save();
    }
}
