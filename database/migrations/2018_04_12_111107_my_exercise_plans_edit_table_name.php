<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MyExercisePlansEditTableName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('my_exercise_plans', function (Blueprint $table) {
            $table->renameColumn('exercisID', 'exercisePlanID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('my_exercise_plans', function (Blueprint $table) {
            $table->renameColumn('exerciseID', 'exercisePlanID');
        });
    }
}
