<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditorFoldTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creditor_fold', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('自增ID');
			$table->integer('r_price')->comment('转让价格');
			$table->integer('r_lend')->nullable()->comment('出借金额');
			$table->integer('r_time')->nullable()->comment('时间');
			$table->integer('r_month')->nullable()->comment('月份');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('creditor_fold');
	}

}
