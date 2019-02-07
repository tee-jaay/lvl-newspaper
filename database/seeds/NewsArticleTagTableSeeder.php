<?php

use Illuminate\Database\Seeder;

class NewsArticleTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 301; $i++) {
            DB::table('news_article_news_tag')->insert(
                [
                    'news_article_id' => rand(1, 142),
                    'news_tag_id' => rand(1, 30),
                ]
            );
        }
    }
}
