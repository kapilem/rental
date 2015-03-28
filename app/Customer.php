<?php namespace Rental;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	protected $table = 'customers';

	protected $hidden = ['id'];

	public $timestamps = false;

}
