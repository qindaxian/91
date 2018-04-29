<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplyProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apply_project', function(Blueprint $table)
		{
			$table->integer('ap_id', true);
			$table->string('ap_pro_rate', 30);
			$table->integer('ap_pro_money');
			$table->float('ap_pro_state', 5, 0);
			$table->integer('ap_pro_status')->default(0);
			$table->integer('ap_pro_date')->nullable();
			$table->dateTime('ap_pro_time')->nullable();
			$table->integer('user_id')->nullable();
			$table->string('apply_name', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apply_project');
	}

}
