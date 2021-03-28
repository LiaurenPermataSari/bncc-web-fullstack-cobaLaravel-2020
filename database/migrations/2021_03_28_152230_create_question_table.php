<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->id();
            $table->string('title',45);
            $table->string('content');
            $table->unsignedBigInteger('correct_answer_id');
            $table->unsignedBigInteger('users_id');
            $table->timestamps();
        });

        Schema::table('question', function (blueprint $table){
            $table->foreign('users_id')->references('id')->on('users');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question');
    }
}
