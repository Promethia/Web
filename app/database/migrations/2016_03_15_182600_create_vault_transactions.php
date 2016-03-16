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
			$table->integer('item_from')->unsigned();
			$table->foreign('item_from')->references('id')->on('items');
			$table->integer('item_to')->unsigned();
			$table->foreign('item_to')->references('id')->on('items');
			$table->integer('amount_from');
			$table->integer('amount_to');
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
