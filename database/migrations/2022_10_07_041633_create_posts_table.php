<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('musictitle')->nullable();
            $table->string('artist')->nullable();
            $table->timestamps();
            $table->string('placticeplace')->nullable();
            $table->string('goal')->nullable();
            $table->integer('genre_id')->unsigned();
            $table->integer('dance_type_id')->unsigned();
            $table->string('url')->nullable();
            $table->string('sns')->nullable();
            $table->string('others')->nullable();
            $table->softDeletes();
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
