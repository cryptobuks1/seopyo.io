<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Enums\UserStatus;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name'        => $faker->firstName,
        'last_name'         => $faker->lastName,
        'email'             => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password'          => bcrypt('123456'),
        'remember_token'    => Str::random(10),
        'status'            => $faker->randomElement(UserStatus::toCollection()->pluck('value')->toArray()),
    ];
});
