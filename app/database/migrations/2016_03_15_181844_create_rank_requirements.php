<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRankRequirements extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rank_requirements', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('rank_id')->unsigned();
			$table->foreign('rank_id')->references('id')->on('ranks');
			$table->string('name');
			$table->enum('type', array(
				'createAccount',
				'activateComplete',
				'serverLogin',
				'testComplete',
				'active',
				'hasLot',
				'onlineDays',
				'rankDays',
				'onlineTimeHours',
				'nominated'
			));
			$table->integer('rank')->unsigned()->nullable();
			$table->foreign('rank')->references('id')->on('ranks');
			$table->integer('hours')->nullable();
			$table->integer('days')->nullable();
			$table->string('caption');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rank_requirements');
	}

}
