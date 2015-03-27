<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomer extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer',function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('firstname',20);
			$table->string('lastname',20);
			$table->string('alamat',100);
			$table->string('no_telp',14);
			$table->string('no_identitas',18);
			$table->string('jenis_identitas',5);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer');
	}

}
