<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDetailsAddedToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
        $table->integer('isTrainer');
        $table->integer('trainerID');
        $table->string('street');
        $table->string('town');
        $table->string('country');
        $table->string('profession');
        $table->string('gender');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->integer('isTrainer');
        $table->integer('trainerID');
        $table->string('street');
        $table->string('town');
        $table->string('country');
        $table->string('profession');
        $table->string('gender');
    }
}
