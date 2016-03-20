<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLots extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lots', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('displayName');
			$table->integer('member_id')->unsigned()->nullable;
			$table->foreign('member_id')->references('id')->on('members');
			$table->integer('realm_id')->unsigned();
			$table->foreign('realm_id')->references('id')->on('realms');
			$table->enum('status', array(
				'active',
				'inactive',
				'occupied',
				'reset',
				'locked'
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
		Schema::drop('lots');
	}

}
