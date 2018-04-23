<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientExercisePlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_exercise_plans', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('userID')->index('userID');
			$table->integer('exercisePlanID')->index('exercisePlanID');
			$table->integer('active');
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
		Schema::drop('client_exercise_plans');
	}

}
