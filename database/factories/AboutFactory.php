<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Site\About::class, function (Faker $faker) {
    return [
        //
        'banner_image'=>$faker->imageUrl(770,294),
        'description'=>$faker->paragraphs(3, true),
        'house'=> $faker->buildingNumber,
        'street'=>$faker->streetAddress,
        'district'=>$faker->city,
        'country'=>$faker->country,
        'email'=>$faker->email,
        'phone_one'=>$faker->phoneNumber,
        'phone_two'=>$faker->tollFreePhoneNumber,
        'facebook'=>'https://www.facebook.com/',
        'twitter'=>'https://twitter.com/',
        'dribbble'=>'https://www.dribbble.com/',
        'google_plus'=>'https://www.google.com/',
    ];
});
