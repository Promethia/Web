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
				"create_account",
				"activate_complete",
				"server_login",
				"test_complete",
				"active",
				"has_lot",
				"online_for_days",
				"rank_for_days",
				"online_time_for_hours",
				"nominated"
			));
			$table->integer('rank')->unsigned()->nullable();
			$table->foreign('rank')->references('id')->on('ranks');
			$table->integer('hours')->nullable();
			$table->integer('days')->nullable();
			$table->string('message');
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
