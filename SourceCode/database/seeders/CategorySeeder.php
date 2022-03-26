<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
    [
        'id'=>'1',
        'title'=>'Children Lessons',
        'detail'=>'riding horse',
        'image'=>'1.jpg',
            ],

    [
        'id'=>'2',
        'title'=>'Adult Riding Lessons',
        'detail'=>'Lesson',
        'image'=>'2.jpg',
            ],
    [
        'id'=>'3',
        'title'=>'Group Riding Lessons',
        'detail'=>'taking lessons',
        'image'=>'3.jpg',
            ],
    [
        'id'=>'4',
        'title'=>'Vaulting Lesson',
        'detail'=>'Lesson',
        'image'=>'4.jpg',
            ],
    ]);
}
}
