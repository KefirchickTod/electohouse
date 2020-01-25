<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ShopList;
use Faker\Generator as Faker;

$factory->define(\App\Models\ShopList::class, function (Faker $faker) {
    return [
        'categories_id' => rand(1, 9),
        'author_id' => 1,
        'status' => 1,
        'manufacture_id' => rand(1, 9),
        'viewed' => rand(0, 100),
        'slug' => '"none'.rand(0,100).'"',
        'title' => "'$faker->title'",
        'description' => "'$faker->text'",
        'short_text' => "'$faker->paragraph'",
        'is_published' => 1,
        'price' => rand(10, 5000),
    ];
});
