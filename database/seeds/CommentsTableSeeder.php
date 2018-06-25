<?php

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
        $comments = [
            [
                'post_id' => 1,
                'name' => 'Ajie',
                'email' => 'ajie@gmail.com',
                'body' => 'Cie pake laravel ye',
                'status' =>1,
            ],
            [
                'post_id' => 2,
                'name' => 'Anonim',
                'email' => 'anonim@gmail.com',
                'body' => 'Cie pake laravel ye',
                'status' =>1,
            ],
        ];

        DB::table('comments')->insert($comments);
    }
}
