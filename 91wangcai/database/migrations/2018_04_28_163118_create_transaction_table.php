<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaction', function(Blueprint $table)
		{
			$table->integer('t_id', true);
			$table->boolean('p_type');
			$table->integer('p_id')->nullable();
			$table->integer('user_id')->index('fk_transaction_user1_idx');
			$table->integer('t_amount')->comment('项目或债权id');
			$table->integer('t_balance');
			$table->boolean('t_type')->comment('交易类型  0:购买项目   1出售项目  2购买债权');
			$table->dateTime('t_time')->comment('项目类型 0:项目 1:债权');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transaction');
	}

}
