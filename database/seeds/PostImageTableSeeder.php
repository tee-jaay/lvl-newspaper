<?php

use Illuminate\Database\Seeder;

class PostImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        for($i = 1; $i < 101; $i++) {
            App\Models\Blog\PostImage::create([
                'post_id' => $i,
                'post_header' => $faker->imageUrl(770, 294),
                'main' => $faker->imageUrl(730, 400),
                'float_left' => $faker->imageUrl(359, 534),
                'float_right' => $faker->imageUrl(352, 271)
            ]);
        }
    }
}
