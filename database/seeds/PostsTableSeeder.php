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
        factory(App\Post::class, 50)->create()->each(function(App\Post $post){
            $post->categories()->attach([
                rand(1, 5),
                rand(1,9),
                rand(4,9),
            ]);

            $post->tags()->attach([
                rand(1, 5),
                rand(6,14),
                rand(15,20),
            ]);


        });

    }
}
