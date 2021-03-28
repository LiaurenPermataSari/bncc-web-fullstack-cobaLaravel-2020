<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('users_id');
            $table->timestamps();
        });
        
        Schema::table('answers', function (Blueprint $table){
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('question_id')->references('id')->on('question');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answers');
    }
}
