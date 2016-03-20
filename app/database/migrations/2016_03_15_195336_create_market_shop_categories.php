<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketShopCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('market_shop_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('shop_id')->unsigned();
			$table->foreign('shop_id')->references('id')->on('market_shops');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('market_categories');
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
		Schema::drop('market_shop_categories');
	}

}
