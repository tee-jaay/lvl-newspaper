<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('article_id')->unsigned();
            $table->unsignedInteger('user_id')->unsigned();
            $table->text('comment');
            $table->foreign('article_id')
                ->references('id')->on('news_articles')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_comments');
    }
}
