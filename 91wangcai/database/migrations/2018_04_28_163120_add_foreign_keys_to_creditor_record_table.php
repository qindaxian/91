<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCreditorRecordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('creditor_record', function(Blueprint $table)
		{
			$table->foreign('c_id', 'fk_creditor_record_creditor1')->references('c_id')->on('creditor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_creditor_record_user1')->references('user_id')->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('creditor_record', function(Blueprint $table)
		{
			$table->dropForeign('fk_creditor_record_creditor1');
			$table->dropForeign('fk_creditor_record_user1');
		});
	}

}
