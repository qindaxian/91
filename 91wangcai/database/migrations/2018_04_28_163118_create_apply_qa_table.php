<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplyQaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apply_qa', function(Blueprint $table)
		{
			$table->integer('apply_qa_id', true);
			$table->string('apply_name')->nullable();
			$table->dateTime('apply_time')->nullable();
			$table->string('apply_idcard')->nullable();
			$table->integer('user_id')->nullable();
			$table->string('apply_status')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apply_qa');
	}

}
