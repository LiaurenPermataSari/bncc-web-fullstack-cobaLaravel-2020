<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('answers_id');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('poin');
            $table->timestamps();
        });
        Schema::table('like_dislike_answers', function (blueprint $table){
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('answers_id')->references('id')->on('answers');        
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_dislike_answers');
    }
}
