<?php

use Illuminate\Database\Seeder;

class NewsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\News\NewsCategory::class, 30)->create();
    }
}
