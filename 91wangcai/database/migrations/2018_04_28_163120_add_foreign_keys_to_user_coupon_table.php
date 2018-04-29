<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserCouponTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_coupon', function(Blueprint $table)
		{
			$table->foreign('coupon_id', 'fk_user_has_coupon_coupon1')->references('coupon_id')->on('coupon')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_user_has_coupon_user1')->references('user_id')->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_coupon', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_has_coupon_coupon1');
			$table->dropForeign('fk_user_has_coupon_user1');
		});
	}

}
