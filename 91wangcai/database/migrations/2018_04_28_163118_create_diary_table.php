<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiaryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diary', function(Blueprint $table)
		{
			$table->integer('d_id', true);
			$table->string('title', 30);
			$table->integer('year');
			$table->integer('month')->nullable();
			$table->integer('day')->nullable();
			$table->text('contents', 65535);
			$table->string('file_url', 100)->nullable();
			$table->string('content_url', 100);
			$table->boolean('is_diary');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('diary');
	}

}
