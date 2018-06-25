<?php

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
        $posts = [
            [
                'user_id' => 1,
                'category_id' => 1,
                'slug' => 'sample-post-1',
                'title' => 'Sample Post 1',
                'body' => '
                <p><strong>Lorem ipsum</strong>
                <h2>Header Level 2</h2>
                <ol>
                    <li>Lorem ipsum</li>
                    <li>Lorem lagi</li>
                </ol>
                <blockquote>
                asdkfasfaskfkasdsdf
                </blockquote></p>',
                'status' => 1,
                'featured' => '/images/featured-image.jpg',
                'published_at' => '2018-05-11 00:00:00'
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'slug' => 'sample-post-2',
                'title' => 'Sample Post 2',
                'body' => '
                <p><strong>Lorem ipsum</strong>
                <h2>Header Level 2</h2>
                <ol>
                    <li>Lorem ipsum</li>
                    <li>Lorem lagi</li>
                </ol>
                <blockquote>
                asdkfasfaskfkasdsdf
                </blockquote></p>',
                'status' => 1,
                'featured' => '/images/featured-image.jpg',
                'published_at' => '2018-05-11 00:00:00'
            ]
            ];

            DB::table('posts')->insert($posts);
    }
}
