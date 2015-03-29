<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Rental\JenisKendaraan;
use Rental\TypeKendaraan;
use Rental\Customer;
use Rental\Kendaraan;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		//$this->call('JenisKendaraanTableSeeder');
		//$this->call('TypeKendaraanTableSeeder');
    //$this->call('CustomerTableSeeder');
    //$this->call('KendaraanTableSeeder');
	}

}
	class JenisKendaraanTableSeeder extends Seeder {

    public function run()
    {
        DB::table('jenis_kendaraan')->delete();

        JenisKendaraan::create(['jenis' => 'Sepeda Motor']);
        JenisKendaraan::create(['jenis' => 'Mobil']);
    }
  }
  
  class TypeKendaraanTableSeeder extends Seeder {

    public function run()
  	{
      DB::table('type_kendaraan')->delete();
	    TypeKendaraan::create(['id_jenis_kendaraan' => '2','merk'=>'Toyota','type'=>'Avanza']);
      TypeKendaraan::create(['id_jenis_kendaraan' => '2','merk'=>'Toyota','type'=>'Innova']);
      TypeKendaraan::create(['id_jenis_kendaraan' => '2','merk'=>'Toyota','type'=>'Alphard']);
      TypeKendaraan::create(['id_jenis_kendaraan' => '2','merk'=>'Daihatsu','type'=>'Xenia']);
      TypeKendaraan::create(['id_jenis_kendaraan' => '2','merk'=>'Suzuki','type'=>'Apv']);
      TypeKendaraan::create(['id_jenis_kendaraan' => '2','merk'=>'Suzuki','type'=>'Ertiga']);
  	}
  }
  class CustomerTableSeeder extends Seeder{
    public function run()
    {
      DB::table('customers')->delete();
      Customer::create(['firstname'=>'Endang','lastname'=>'Kurniawan','alamat'=>'Jl. buntu No.2','no_telp'=>'+628123456789','no_identitas'=>'0192838475753','jenis_identitas'=>'sim']);
    }
  }
  class KendaraanTableSeeder extends Seeder{
    public function run(){
   // DB::table('kendaraans')->delete();
    Kendaraan::create(['id_type_kendaraan'=>4,'kode_kendaraan'=>'MBL3','no_polisi'=>'E123AA','warna'=>'merah','tahun'=>2009]);
    }

  }