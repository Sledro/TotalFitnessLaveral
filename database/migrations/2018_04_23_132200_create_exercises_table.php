<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExercisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercises', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 191);
			$table->string('bodyPart', 191);
			$table->string('muscle', 191);
			$table->text('description', 16777215);
			$table->string('video', 191);
		});

		// Insert some stuff
		DB::table('exercises')->insert(
			array(
				array(
					'name' => 'Con Curls',
					'bodyPart' => 'Arm',
					'muscle' => 'Bicep',
					'description' => 'While sitting on a bench with your feet firmly on the floor, place the back of your left upper arm on the inside of your thigh. Keep your arm on your thigh throughout. Put your right hand on the right knee for stability. Do your curls on the left side, then repeat on the right side. ',
					'video' => 'https://www.youtube.com/watch?v=ebqgIOiYGEY',
				),
				array(
					'name' => 'Preacher Curls',
					'bodyPart' => 'Arm',
					'muscle' => 'Bicep',
					'description' => 'Using a regular preacher bench, grab an EZ Curl bar with both hands using an underhand grip (palms facing upwards). Slowly curl the bar up to the top and bring it a few inches from your chin. Return the weight back down with a slow and controlled tempo to the starting position, allowing some resistance (negative) on the way back down. Repeat the movement for the desired number of repetitions.',
					'video' => 'https://www.youtube.com/watch?v=fIWP-FRFNU0',
				),
				array(
					'name' => 'Barbell Press',
					'bodyPart' => 'Shoulders',
					'muscle' => 'Deltoid',
					'description' => 'Sit on the bench holding a barbell in front of your shoulders with an overhand grip. Press the weight up above your head until your arms are fully extended. Return slowly to the start position.',
					'video' => 'https://www.youtube.com/watch?v=ECWxumBMLVQ',
				),
				array(
					'name' => 'Cable Flys',
					'bodyPart' => 'Chest',
					'muscle' => 'Pectorals',
					'description' => 'Attach stirrup handles to the high pulleys of a cable crossover machine. Take one in each hand – your arms should be outstretched with a slight bend at the elbow. Place one foot slightly forward, brace you core, and pull the handles slightly downward and across your body until your hands meet, then slowly return to the start position.',
					'video' => 'https://www.youtube.com/watch?v=Iwe6AmxVf7o',
				)
			)
		);
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exercises');
	}

}
