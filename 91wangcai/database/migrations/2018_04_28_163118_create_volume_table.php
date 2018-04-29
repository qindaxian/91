<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVolumeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('volume', function(Blueprint $table)
		{
			$table->integer('v_id', true);
			$table->integer('u_id')->nullable()->comment('用户id');
			$table->decimal('v_val', 5, 4)->nullable()->comment('卷利息');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('volume');
	}

}
