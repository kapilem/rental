@extends('dashboard-layout')

@section('content')

add customer here
<div class="panel panel-default">
	<div class="panel-heading">Form Tambah Customer</div>
	<div class="panel-body">
	<form action="">
	<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			<label for="">Nama Depan</label>
			<input type="text" class="form-control">
		</div>
		<div class="col-sm-6">
			<label for="">Nama Belakang</label>
			<input type="text" class="form-control">	
		</div>
	</div>
	</div>
	<div class="form-group">
		<label for="">Alamat</label>
		<textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
	</div>
	<label for="">Nomor Telepon</label>
	<input type="text" class="form-control col-sm-6">
	<div class="row">
	<div class="form-group col-sm-6">
		<label for="">Nomor Identitas</label>
		<input type="text" class="form-control">
	</div>
	<div class="col-sm-4">
		
	</div>
	</div>
</form>	
	</div>
</div>


@endsection
