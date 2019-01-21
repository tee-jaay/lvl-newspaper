<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialLinksToAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            //
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('dribbble')->nullable();
            $table->string('google_plus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
            $table->dropColumn('dribbble');
            $table->dropColumn('google_plus');
        });
    }
}
