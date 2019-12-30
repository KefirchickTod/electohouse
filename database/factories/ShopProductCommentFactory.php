<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\ShopProductComment::class, function (Faker $faker) {
    return [
        'comment' => $faker->paragraph,
        'email' => $faker->email,
        'first_name' => $faker->firstName,
        'second_name' => $faker->lastName,
    ];
});
