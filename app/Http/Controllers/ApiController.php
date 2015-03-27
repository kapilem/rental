<?php namespace Rental\Http\Controllers;

use Rental\Http\Requests;
use Rental\Http\Controllers\Controller;
use Response;
use Illuminate\Http\Request;
use Rental\JenisKendaraan;
use Rental\TypeKendaraan;
use Rental\Customer;
class ApiController extends Controller {

	/**
	 * Tampilkan jenis kendaraan
	 *
	 * @return Response
	 */
	public function getJenisKendaraan()
	{
		return Response::json(['status' => 200,'results'=>JenisKendaraan::all()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getMobil()
	{
		$query = TypeKendaraan::mobil()->get();
		if ($query->isEmpty()) {
    		return Response::json(['error'=>array('code'=>404,'messages'=>'data not found')],404);
		} else {
			return Response::json(['results'=>$query]);
		}
	}
	public function getByMerkMobil($merk)
	{
		$query = TypeKendaraan::where('id_jenis_kendaraan', '=', 2)->where('merk',$merk)->get();
		//var_dump($query);

		if ($query->isEmpty()) {
    		return Response::json(['error'=>array('code'=>404,'messages'=>'merk '.$merk.' tidak terdaftar')],404);
		}
		else
		{
			return Response::json(['results'=>$query]);			
		}
	}
	public function getMotor()
	{
		$query = TypeKendaraan::motor()->get();
		if ($query->isEmpty()) {
			return Response::json(['error'=>array('code'=>404,'messages'=>'data not found')],404);
		} else {
			return Response::json(['results'=>$query]);
		}
		
		return Response::json(['status' => 200,'results'=>TypeKendaraan::where('id_jenis_kendaraan', '=', 1)->get()]);
	}
	public function getCust()
	{
		$query = Customer::all();
		return Response::json(['results'=>$query]);
	}
	public function getCustByName($nama)
	{
		$query = Customer::where('firstname','like',$nama.'%')->get();
		return Response::json(['results'=>$query]);
	}
}
