<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRankBenefits extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rank_benefits', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('rank_id')->unsigned();
			$table->foreign('rank_id')->references('id')->on('ranks');
			$table->string('name');
			$table->enum('type', array(
				"lots",
				"vaults",
				"homes",
				"days"
			));
			$table->string('icon');
			$table->integer('data')->nullable();
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
		Schema::drop('rank_benefits');
	}

}
