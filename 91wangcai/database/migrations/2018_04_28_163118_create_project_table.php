<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project', function(Blueprint $table)
		{
			$table->integer('p_id', true);
			$table->decimal('p_annual_interest_rate', 5, 4)->default(0.0000);
			$table->integer('p_term')->default(0);
			$table->integer('p_loan_amount')->default(0);
			$table->integer('p_amount_investment')->default(100);
			$table->integer('p_loan')->default(0);
			$table->string('p_purpose', 10);
			$table->integer('p_day_interest')->default(0);
			$table->string('p_one_source', 20);
			$table->string('p_two_source', 20);
			$table->string('p_three_source', 20);
			$table->integer('user_id')->index('fk_project_user_idx');
			$table->integer('p_status');
			$table->integer('p_start_time');
			$table->integer('p_state')->nullable();
			$table->string('p_name', 30)->nullable();
			$table->integer('p_now_period')->nullable();
			$table->integer('p_period')->nullable();
			$table->date('p_account_time')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project');
	}

}
