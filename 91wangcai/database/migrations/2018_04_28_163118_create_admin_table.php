<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function(Blueprint $table)
		{
			$table->integer('a_id', true);
			$table->string('a_name', 20);
			$table->char('a_password', 32);
			$table->integer('a_end_time');
			$table->string('a_end_ip', 30);
			$table->integer('a_phone')->nullable();
			$table->string('a_email', 20)->nullable();
			$table->integer('a_start_time')->nullable();
			$table->integer('a_log_num')->default(0);
			$table->integer('a_status')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin');
	}

}
