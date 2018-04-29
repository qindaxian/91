<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBorrowInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('borrow_information', function(Blueprint $table)
		{
			$table->integer('b_id', true);
			$table->string('b_company_name', 30);
			$table->integer('b_register_money');
			$table->string('b_register_address', 20);
			$table->integer('b_company_time');
			$table->string('b_company_ceo', 10);
			$table->string('b_company_industry', 10);
			$table->string('b_company_situation', 30);
			$table->integer('b_stay');
			$table->integer('b_frequency');
			$table->integer('b_company_stay');
			$table->integer('b_company_information');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('borrow_information');
	}

}
