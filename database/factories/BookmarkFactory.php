<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookmark;
use Faker\Generator as Faker;

$factory->define(Bookmark::class, function (Faker $faker) {
    return [
        'url'   => $faker->url,
        'title' => $faker->realText($faker->numberBetween(30, 80)),
        'image' => $faker->imageUrl(320, 180),
    ];
});
