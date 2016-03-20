<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRanks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ranks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('url')->unique();
			$table->integer('level');
			$table->text('description')->nullable();
			$table->text('descriptionShort')->nullable();
			$table->string('hex');
			$table->string('format');
			$table->enum('status',
			array(
				'active',
				'inactive'
			));
			$table->integer('promotesToRank_id')->unsigned()->nullable();
			$table->foreign('promotesToRank_id')->references('id')->on('ranks');
			$table->integer('demotesToRank_id')->unsigned()->nullable();
			$table->foreign('demotesToRank_id')->references('id')->on('ranks');
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
		Schema::drop('ranks');
	}

}
