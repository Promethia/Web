<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsComments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('member_id')->unsigned();
			$table->foreign('member_id')->references('id')->on('members');
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('news_posts');
			$table->text('content');
			$table->enum('status', array(
				'active',
				'inactive',
				'flagged'
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
		Schema::drop('news_comments');
	}

}
