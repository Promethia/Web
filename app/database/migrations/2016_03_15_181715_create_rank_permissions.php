<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRankPermissions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rank_permissions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('rank_id')->unsigned();
			$table->foreign('rank_id')->references('id')->on('ranks');
			$table->integer('permission_id')->unsigned();
			$table->foreign('permission_id')->references('id')->on('permissions');
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
		Schema::drop('rank_permissions');
	}

}
