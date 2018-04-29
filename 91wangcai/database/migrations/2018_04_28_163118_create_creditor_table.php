<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creditor', function(Blueprint $table)
		{
			$table->integer('c_id', true);
			$table->decimal('c_interest_rate', 5, 4);
			$table->integer('c_borrow');
			$table->integer('p_id')->index('fk_creditor_project1_idx');
			$table->integer('user_id');
			$table->string('c_term')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('creditor');
	}

}
