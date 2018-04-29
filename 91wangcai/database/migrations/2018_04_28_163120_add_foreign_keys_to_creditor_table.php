<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCreditorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('creditor', function(Blueprint $table)
		{
			$table->foreign('p_id', 'fk_creditor_project1')->references('p_id')->on('project')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('creditor', function(Blueprint $table)
		{
			$table->dropForeign('fk_creditor_project1');
		});
	}

}
