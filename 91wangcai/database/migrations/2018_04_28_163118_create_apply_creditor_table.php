<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplyCreditorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apply_creditor', function(Blueprint $table)
		{
			$table->integer('ac_id', true);
			$table->integer('ac_pro_money');
			$table->integer('ac_pro_status');
			$table->integer('ac_pro_id')->index('fk_apply_creditor_project1_idx');
			$table->integer('u_id')->index('fk_apply_creditor_user1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apply_creditor');
	}

}
