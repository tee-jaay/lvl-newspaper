<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->unique()->word,
        'slug'=>$faker->slug(1),
        'bg_color'=>$faker->hexColor,
        'description'=>$faker->paragraph,
    ];
});
