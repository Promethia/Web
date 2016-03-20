<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaultTransactions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vault_transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('member_id')->unsigned();
			$table->foreign('member_id')->references('id')->on('members');
			$table->integer('vault_id')->unsigned();
			$table->foreign('vault_id')->references('id')->on('vaults');
			$table->integer('slot');
			$table->integer('fromItem_id')->unsigned();
			$table->foreign('fromItem_id')->references('id')->on('items');
			$table->integer('toItem_id')->unsigned();
			$table->foreign('toItem_id')->references('id')->on('items');
			$table->integer('fromStock');
			$table->integer('toStock');
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
		Schema::drop('vault_transactions');
	}

}
