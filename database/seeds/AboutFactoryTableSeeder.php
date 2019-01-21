<?php

use Illuminate\Database\Seeder;

class AboutFactoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Models\About::class, 1)->create();
    }
}
