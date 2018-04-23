<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExercisePlanDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercise_plan_details', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('planID')->nullable()->index('planID');
			$table->string('day', 191);
			$table->integer('exerciseID')->index('exerciseID');
			$table->string('reps', 191);
			$table->string('sets', 191);
			$table->string('priority', 191);
			$table->string('weight', 191);
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
		Schema::drop('exercise_plan_details');
	}

}
