<?php namespace Rental\Http\Controllers;

use Rental\Http\Requests;
use Rental\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Response;
use Rental\Customer;


class AdminController extends Controller {

	//public function __construct()
	//{
	//	$this->middleware('auth');
	//}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin');
	}

	public function getCustomerList()
	{
		$query = Customer::all();
//		return Response::json(['customers'=>$query]);
		return view('list-customer')->with('customers', $query);
	}

	public function getMitraList()
	{
		return view('list-mitra');
	}

	public function getAddCustomer()
	{
		return view('add-customer');
	}

	public function getArmada()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
