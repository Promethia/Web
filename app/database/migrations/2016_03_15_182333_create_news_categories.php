<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('url')->unique();
			$table->text('description')->nullable();
			$table->text('description_short')->nullable();
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
		Schema::drop('news_categories');
	}

}
