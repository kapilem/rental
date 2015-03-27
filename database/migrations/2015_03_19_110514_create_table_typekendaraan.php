<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTypekendaraan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('type_kendaraan',function(Blueprint $table)
			{
				$table->increments('id');
				$table->smallinteger('id_jenis_kendaraan');
				$table->string('merk' ,20);
				$table->string('type' ,20);
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('type_kendaraan');
	}

}
