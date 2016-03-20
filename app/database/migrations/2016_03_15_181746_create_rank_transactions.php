<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRankTransactions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rank_transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('member_id')->unsigned();
			$table->foreign('member_id')->references('id')->on('members');
			$table->enum('type', array(
				'promotion',
				'demotion'
			));
			$table->integer('fromRank_id')->unsigned();
			$table->foreign('fromRank_id')->references('id')->on('ranks');
			$table->integer('toRank_id')->unsigned();
			$table->foreign('toRank_id')->references('id')->on('ranks');
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
		Schema::drop('rank_transactions');
	}

}
