<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientExercisePlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('client_exercise_plans', function(Blueprint $table)
		{
			$table->foreign('userID', 'client_exercise_plans_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('client_exercise_plans', function(Blueprint $table)
		{
			$table->dropForeign('client_exercise_plans_ibfk_1');
		});
	}

}
