<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('author_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->unsignedInteger('category_id');
            $table->text('dropcap')->nullable();
            $table->text('first_italic')->nullable();
            $table->text('content')->nullable();
            $table->text('second_italic')->nullable();
            $table->text('ordered_list')->nullable();
            $table->text('blackquote')->nullable();
            $table->text('end_para')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
