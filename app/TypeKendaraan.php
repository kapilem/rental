<?php namespace Rental;

use Illuminate\Database\Eloquent\Model;

class TypeKendaraan extends Model {

	protected $table = 'type_kendaraan';

    protected $hidden = ['id','id_jenis_kendaraan'];

    public function scopeMobil($query)
    {
        return $query->where('id_jenis_kendaraan', '=', 2);
    }
    public function scopeMotor($query)
    {
        return $query->where('id_jenis_kendaraan', '=', 1);
    }

	public $timestamps = false;

}
