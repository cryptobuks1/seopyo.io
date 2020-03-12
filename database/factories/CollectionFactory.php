<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Collection;
use App\Organization;
use Faker\Generator as Faker;

$factory->define(Collection::class, function (Faker $faker) {
    $owner = $faker->boolean(60) ? User::inRandomOrder()->first() : Organization::inRandomOrder()->first();

    return [
        'name'        => Str::replaceLast('.', '', $faker->sentence($faker->numberBetween(2, 4))),
        'owner_id'    => $owner->id,
        'owner_type'  => get_class($owner),
        'description' => $faker->boolean(75) ? $faker->realText($faker->numberBetween(100, 300)) : null,
        'icon_image'  => $faker->imageUrl(320, 320),
        'cover_image' => $faker->imageUrl(1920, 600),
    ];
});
