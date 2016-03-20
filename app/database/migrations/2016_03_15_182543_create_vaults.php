<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaults extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vaults', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('member_id')->unsigned();
			$table->foreign('member_id')->references('id')->on('members');
			$table->string('name');
			$table->integer('slot1_item_id')->unsigned();
			$table->foreign('slot1_item_id')->references('id')->on('items');
			$table->integer('slot1_stock');
			$table->integer('slot2_item_id')->unsigned();
			$table->foreign('slot2_item_id')->references('id')->on('items');
			$table->integer('slot2_stock');
			$table->integer('slot3_item_id')->unsigned();
			$table->foreign('slot3_item_id')->references('id')->on('items');
			$table->integer('slot3_stock');
			$table->integer('slot4_item_id')->unsigned();
			$table->foreign('slot4_item_id')->references('id')->on('items');
			$table->integer('slot4_stock');
			$table->integer('slot5_item_id')->unsigned();
			$table->foreign('slot5_item_id')->references('id')->on('items');
			$table->integer('slot5_stock');
			$table->integer('slot6_item_id')->unsigned();
			$table->foreign('slot6_item_id')->references('id')->on('items');
			$table->integer('slot6_stock');
			$table->integer('slot7_item_id')->unsigned();
			$table->foreign('slot7_item_id')->references('id')->on('items');
			$table->integer('slot7_stock');
			$table->integer('slot8_item_id')->unsigned();
			$table->foreign('slot8_item_id')->references('id')->on('items');
			$table->integer('slot8_stock');
			$table->integer('slot9_item_id')->unsigned();
			$table->foreign('slot9_item_id')->references('id')->on('items');
			$table->integer('slot9_stock');
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
		Schema::drop('vaults');
	}

}
