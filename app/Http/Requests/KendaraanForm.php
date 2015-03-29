<?php namespace Rental\Http\Requests;

use Rental\Http\Requests\Request;

class KendaraanForm extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//'merk' => 'required',
			//'type' => 'required',
			'koken' => 'required',
			'nopol' => 'required',
			'warna' => 'required',
			'tahun' => 'required',
			'poto' => 'required'
		];
	}

}
