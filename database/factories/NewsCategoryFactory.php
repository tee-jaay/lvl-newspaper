<?php

use Faker\Generator as Faker;

$factory->define(App\Models\News\NewsCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'slug' => $faker->slug(2),
        'bg_color' => $faker->hexColor,
        'description' => $faker->paragraph
    ];
});
