<?php

use Faker\Generator as Faker;

$factory->define(App\Models\News\NewsComment::class, function (Faker $faker) {
    return [
        'article_id'=>rand(1,100),
        'user_id'=>rand(1,20),
        'comment'=>$faker->paragraph
    ];
});
