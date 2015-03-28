<?php namespace Rental;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model {


	protected $table = 'kendaraans';

	protected $hidden =['id','id_type_kendaraan','id_jenis_kendaraan','created_at','updated_at'];

	public $timestamps = false;

	public function scopeTypeKendaraan($query)
    {
        //return $this->left_join('Rental\TypeKendaraan','id_type_kendaraan');
        return $this->leftJoin('type_kendaraan', function($join)
        	{
        		$join->on('type_kendaraan.id', '=', 'kendaraans.id_type_kendaraan');
        	});		
    }
    public function scopeMobil($query)
    {
        return $query->where('id_jenis_kendaraan', '=', 2);
    }
}
