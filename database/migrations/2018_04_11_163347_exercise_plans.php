<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExercisePlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trainerID');
            $table->string('day');
            $table->string('exercise');
            $table->string('reps');
            $table->string('sets');
            $table->string('priority');
            $table->string('weight');
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
        Schema::dropIfExists('exercise_plans');
    }
}
