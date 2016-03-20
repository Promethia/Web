<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealms extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('realms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('url')->unique();
			$table->text('description')->nullable();
			$table->text('descriptionShort')->nullable();
			$table->boolean('tagCreative');
			$table->boolean('tagSurvival');
			$table->boolean('tagPvp');
			$table->boolean('tagHome');
			$table->boolean('tagLots');
			$table->boolean('tagMaps');
			$table->enum('status', array(
				'active',
				'inactive'
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
		Schema::drop('realms');
	}

}
