<?php

use Illuminate\Database\Seeder;

class NewsArticleImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i < 101; $i++) {
            App\Models\News\NewsArticleImages::create([
                'article_id' => $i,
                'header' => $faker->imageUrl(770, 294),
                'right' => $faker->imageUrl(376, 522),
                'main' => $faker->imageUrl(730, 400),
                'bottom' => $faker->imageUrl(730, 153)
            ]);
        }
    }
}
