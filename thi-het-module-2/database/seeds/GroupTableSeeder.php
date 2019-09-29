<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new Group();
        $group->name = 'Quan tri he thong';
        $group->save();

        $group = new Group();
        $group->name = 'Quan ly nhan su';
        $group->save();

        $group = new Group();
        $group->name = 'Le tan';
        $group->save();

        $group = new Group();
        $group->name = 'Quan ly phong';
        $group->save();

        $group = new Group();
        $group->name = 'Quan ly dich vu';
        $group->save();
    }
}
