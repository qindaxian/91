<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionFoldTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaction_fold', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('自增ID');
			$table->integer('t_amount')->comment('交易数额');
			$table->integer('t_time')->comment('交易时间');
			$table->integer('t_month')->comment('月份');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transaction_fold');
	}

}
