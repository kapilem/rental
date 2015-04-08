@extends('dashboard-layout')

@section('content')

<form method="post" action="/mitra/add" enctype="multipart/form-data">
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
	<div class="form-group">
		<label>Nama Depan</label>
		<div class="row">
			<input type="text" name="namadpn" class="form-control col-md-4">
		</div>
	</div>
	<div class="form-group">
		<label>Nama Belakang</label>
		<div class="row">
			<input type="text" name="namablk" class="form-control col-md-4">
		</div>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<div class="row">
			<input type="text" name="alamat" class="form-control col-md-4">
		</div>
	</div>
	<div class="form-group">
		<label>No. Telepon</label>
		<div class="row">
			<input type="text" name="notelp" class="form-control col-md-4">
		</div>
	</div>
	<div class="form-group">
		<label>No. Identitas</label>
		<div class="row">
			<input type="text" name="noident" class="form-control col-md-4">
		</div>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<div class="row">
			<div class="col-xs-4">
				<input type="radio" name="kelamin" value="pria"> Laki-laki <br>
				<input type="radio" name="kelamin" value="wanita"> Perempuan <br>
			</div>
		</div>
	</div>
</form>

@endsection