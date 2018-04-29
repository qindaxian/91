<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loan', function(Blueprint $table)
		{
			$table->integer('l_id', true);
			$table->integer('user_id')->nullable()->comment('用户id');
			$table->integer('p_id')->nullable()->comment('项目id');
			$table->boolean('p_type')->nullable()->comment('0：项目 1：债务');
			$table->boolean('l_type')->nullable()->comment('项目类型：0：普通项目 1：优先项目');
			$table->boolean('l_state')->nullable()->comment('项目状态0：审核中 1：回款中 2：已回款');
			$table->integer('l_account')->nullable()->comment('持有金额');
			$table->integer('volume_id')->nullable()->comment('利息卷id');
			$table->dateTime('l_payment_time')->nullable()->comment('回款时间');
			$table->boolean('allow_credit')->nullable()->comment('0.同意转债 1.不同意转债');
			$table->boolean('selling_status')->nullable()->comment('0.未转债 1.已转债 2.转债中');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loan');
	}

}
