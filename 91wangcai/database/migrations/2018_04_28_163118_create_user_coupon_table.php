<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserCouponTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_coupon', function(Blueprint $table)
		{
			$table->integer('user_id')->index('fk_user_has_coupon_user1_idx');
			$table->integer('coupon_id')->index('fk_user_has_coupon_coupon1_idx');
			$table->primary(['user_id','coupon_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_coupon');
	}

}
