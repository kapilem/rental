<?php namespace Rental;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	protected $table = 'customer';

	protected $hidden = ['id'];

	public $timestamps = false;

}
