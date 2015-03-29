<?php namespace Rental\Http\Controllers;

use Rental\Http\Requests;
use Rental\Http\Controllers\Controller;
use Rental\Http\Requests\KendaraanForm;
use Request;
use Rental\Kendaraan;
class KendaraanController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function getAdd()
	{
		return view('add-kendaraan');
	}
	public function postAdd(Request  $request)
	{
		
		$file = Request::file('poto');
		$extension = $file->getClientOriginalExtension();
		$destinationPath = 'images/kend';
		$namafile = $file->getClientOriginalName();
		$file->move($destinationPath,$namafile);
		//$entry = new Fileentry();
		//$entry->mime = $file->getClientMimeType();
		//$entry->original_filename = $file->getClientOriginalName();
		//$entry->filename = $file->getFilename().'.'.$extension;
 
		//$entry->save();
		$input = Request::all();
		$kend = new Kendaraan();
		//$kend->merk = $input['merk'];
		//$kend->type = $input['type'];
		$kend->kode_kendaraan = $input['koken'];
		$kend->no_polisi = $input['nopol'];
		$kend->warna = $input['warna'];
		$kend->tahun = $input['tahun'];
		$kend->foto = $destinationPath.'/'.$namafile;
		$kend->save();
		
		var_dump($input['tahun']);
		//return 'k';
	}
}
