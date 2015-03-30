<?php namespace Rental;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	protected $table = 'customers';

	protected $hidden = ['created_at','updated_at'];

	//public $timestamps = false;

}
