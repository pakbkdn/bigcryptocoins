<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->longText('content');
            $table->string('image');
            $table->string('thumbnail');
            $table->timestamps();
            $table->integer('category_id')->unsigned()->nullable(); //unsigned:Không âm; nullable:ko rỗng;
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('user_id')->unsigned()->nullable(); //unsigned:Không âm; nullable:ko rỗng;
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
