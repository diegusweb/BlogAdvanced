<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'user_id' => rand(1,20),
        'title' => $title,
        'slug' => str_slug($title),
		'image' => 'default.jpg',
        'body' => $faker->text(500),
        'view_count' => rand(1,30),
        'status' => $faker->randomElement([true, false]),
		'is_approved' => $faker->randomElement([true, false]),
    ];
});
