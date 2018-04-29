<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditorRecordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creditor_record', function(Blueprint $table)
		{
			$table->integer('r_id', true);
			$table->boolean('r_state');
			$table->integer('r_price');
			$table->integer('r_value');
			$table->integer('r_lend');
			$table->integer('r_hold');
			$table->integer('r_start_time');
			$table->integer('user_id')->index('fk_creditor_record_user1_idx');
			$table->integer('c_id')->index('fk_creditor_record_creditor1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('creditor_record');
	}

}
