<?php

use Illuminate\Database\Seeder;

class UserProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i < 21; $i++) {
            \App\Models\UserProfile::create([
                'user_id'=>$i,
                'image'=>$faker->imageUrl(90,90),
                'bio'=>$faker->paragraphs(3,true),
                'facebook'=>'https://www.facebook.com/',
                'twitter'=>'https://twitter.com/',
                'google_plus'=>'https://www.google.com/',
                'dribbble'=>'https://dribbble.com/',
                'pinterest'=>'https://www.pinterest.com/',
            ]);
        }
    }
}
