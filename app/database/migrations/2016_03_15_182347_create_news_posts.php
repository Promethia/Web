<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsPosts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news_posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('member_id')->unsigned();
			$table->foreign('member_id')->references('id')->on('members');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('news_categories');
			$table->string('title');
			$table->string('url')->unique();
			$table->text('content');
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
		Schema::drop('news_posts');
	}

}
