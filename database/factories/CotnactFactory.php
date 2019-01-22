<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Site\Contact::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'email'=>$faker->email,
        'website'=>$faker->url,
        'subject'=>$faker->sentence,
        'message'=>$faker->paragraph,
    ];
});
