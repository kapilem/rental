<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Rental\Customer;



class CustomerSeeder extends Seeder{
	public function run(){
$faker = new Faker\Generator();
		$faker = Faker\Factory::create();

$faker->addProvider(new Faker\Provider\ro_RO\PhoneNumber($faker));
		foreach(range(1,10) as $item)
		{
			Customer::create(array(
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