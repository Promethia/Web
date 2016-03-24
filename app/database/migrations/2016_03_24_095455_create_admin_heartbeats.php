<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminHeartbeats extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_heartbeats', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('server', array(
				'red',
				'yellow',
				'green',
			));
			$table->integer('players');
			$table->enum('mojang_api', array(
				'red',
				'yellow',
				'green',
			));
			$table->enum('mojang_login', array(
				'red',
				'yellow',
				'green',
			));
			$table->enum('mojang_session', array(
				'red',
				'yellow',
				'green',
			));
			$table->enum('mojang_skin', array(
				'red',
				'yellow',
				'green',
			));
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
		Schema::drop('admin_heartbeats');
	}

}
