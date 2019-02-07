<?php

use Faker\Generator as Faker;

$factory->define(App\Models\News\NewsArticle::class, function (Faker $faker) {
    return [
        'author_id' => rand(1, 10),
        'category_id' => rand(1, 20),
        'title' => $faker->unique()->sentence(7, true),
        'slug' => $faker->slug(7),
        'dropcap' => $faker->paragraph,
        'top_d_block' => $faker->sentence(12),
        'mid_text' => $faker->paragraph,
        'bottom_d_block' => $faker->sentence(14),
        'right_list' => $faker->sentence(15),
        'blockquote' => $faker->sentence(12),
        'bottom_text' => $faker->paragraph
    ];
});
