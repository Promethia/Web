<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketTransactions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('market_transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('member_id')->unsigned();
			$table->foreign('member_id')->references('id')->on('members');
			$table->integer('item_id')->unsigned();
			$table->foreign('item_id')->references('id')->on('items');
			$table->integer('sale_id')->unsigned();
			$table->foreign('sale_id')->references('id')->on('market_sales');
			$table->double('amount', 11, 2);
			$table->integer('stock');
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
		Schema::drop('market_transactions');
	}

}
