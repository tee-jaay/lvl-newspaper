<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        //
        'author_id'=>rand(1,15),
        'title'=>$faker->unique()->sentence(8,true),
        'slug'=>$faker->unique()->slug(8),
        'category_id'=>rand(1,9),
        'top_text'=>$faker->paragraphs(2,true),
        'italic'=>$faker->sentence(20,true),
        'mid_text'=>$faker->paragraphs(3,true),
        'color_quote'=>$faker->paragraph(2,true),
        'bottom_text'=>$faker->paragraphs(3,true)
    ];
});
