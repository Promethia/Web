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
			$table->integer('promotes_from')->unsigned();
			$table->foreign('promotes_from')->references('id')->on('ranks');
			$table->integer('promotes_to')->unsigned();
			$table->foreign('promotes_to')->references('id')->on('ranks');
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
