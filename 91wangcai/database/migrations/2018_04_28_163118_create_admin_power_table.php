<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminPowerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_power', function(Blueprint $table)
		{
			$table->integer('ap_id', true);
			$table->string('url', 50)->nullable();
			$table->string('ap_content', 30);
			$table->integer('parent_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin_power');
	}

}
