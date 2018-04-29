<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->integer('user_id', true);
			$table->char('user_phone', 11);
			$table->char('user_password', 32);
			$table->integer('user_reg_time')->default(0);
			$table->char('user_transaction_pwd', 32)->nullable();
			$table->integer('user_total_assets')->default(0);
			$table->integer('user_forzen')->default(0);
			$table->string('user_real_name', 10)->nullable();
			$table->char('user_idcard', 18)->nullable();
			$table->integer('user_inviter')->nullable();
			$table->integer('user_commission')->default(0);
			$table->integer('user_balance')->default(0);
			$table->string('user_ip', 30)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
