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
			$table->integer('slot1_item')->unsigned();
			$table->foreign('slot1_item')->references('id')->on('items');
			$table->integer('slot1_amount');
			$table->integer('slot2_item')->unsigned();
			$table->foreign('slot2_item')->references('id')->on('items');
			$table->integer('slot2_amount');
			$table->integer('slot3_item')->unsigned();
			$table->foreign('slot3_item')->references('id')->on('items');
			$table->integer('slot3_amount');
			$table->integer('slot4_item')->unsigned();
			$table->foreign('slot4_item')->references('id')->on('items');
			$table->integer('slot4_amount');
			$table->integer('slot5_item')->unsigned();
			$table->foreign('slot5_item')->references('id')->on('items');
			$table->integer('slot5_amount');
			$table->integer('slot6_item')->unsigned();
			$table->foreign('slot6_item')->references('id')->on('items');
			$table->integer('slot6_amount');
			$table->integer('slot7_item')->unsigned();
			$table->foreign('slot7_item')->references('id')->on('items');
			$table->integer('slot7_amount');
			$table->integer('slot8_item')->unsigned();
			$table->foreign('slot8_item')->references('id')->on('items');
			$table->integer('slot8_amount');
			$table->integer('slot9_item')->unsigned();
			$table->foreign('slot9_item')->references('id')->on('items');
			$table->integer('slot9_amount');
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
