<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->words(rand(1, 5), true);
    return [
        'title' => $title,
        'body' => $faker->text(rand(500, 1000)),
        'slug' => Post::generateSlug($title),
    ];
});
