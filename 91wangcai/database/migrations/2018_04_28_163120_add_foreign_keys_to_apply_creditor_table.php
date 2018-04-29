<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToApplyCreditorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('apply_creditor', function(Blueprint $table)
		{
			$table->foreign('ac_pro_id', 'fk_apply_creditor_project1')->references('p_id')->on('project')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('u_id', 'fk_apply_creditor_user1')->references('user_id')->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('apply_creditor', function(Blueprint $table)
		{
			$table->dropForeign('fk_apply_creditor_project1');
			$table->dropForeign('fk_apply_creditor_user1');
		});
	}

}
