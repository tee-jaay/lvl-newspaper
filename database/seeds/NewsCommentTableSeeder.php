<?php

use Illuminate\Database\Seeder;

class NewsCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\News\NewsComment::class, 200)->create();
    }
}
