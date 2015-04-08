<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Rental\Mitra;



class MitraSeeder extends Seeder{
	public function run(){
$faker = new Faker\Generator();
		$faker = Faker\Factory::create();

$faker->addProvider(new Faker\Provider\ro_RO\PhoneNumber($faker));
		foreach(range(1,10) as $item)
		{
			Mitra::create(array(
				'firstname' => $faker->firstName,
				'lastname' => $faker->lastName,
				'alamat' => $faker->streetAddress,
				'no_telp' =>$faker->tollFreePhoneNumber,
				'no_identitas' =>$faker->premiumRatePhoneNumber,
				'jenis_identitas'=> 'KTP'
			));
		}
	}	
}