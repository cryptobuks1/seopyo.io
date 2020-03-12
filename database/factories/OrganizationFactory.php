<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Organization;
use Faker\Generator as Faker;

$factory->define(Organization::class, function (Faker $faker) {
    return [
        'owner_id' => User::inRandomOrder()->first()->id,
        'name'     => $faker->company,
    ];
});
