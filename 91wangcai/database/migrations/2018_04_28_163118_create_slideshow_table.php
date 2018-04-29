<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlideshowTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slideshow', function(Blueprint $table)
		{
			$table->integer('slideshow_id', true);
			$table->char('url', 80)->nullable();
			$table->integer('status')->nullable();
			$table->dateTime('time')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('slideshow');
	}

}
