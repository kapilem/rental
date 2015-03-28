<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKendaraansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kendaraans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->tinyinteger('id_type_kendaraan');
			$table->string('kode_kendaraan',8);
			$table->string('no_polisi',7);
			$table->string('warna',10);
			$table->smallinteger('tahun');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kendaraans');
	}

}
