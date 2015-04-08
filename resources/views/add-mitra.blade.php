@extends('dashboard-layout')

@section('content')

<form method="post" action="/kendaraan/add" enctype="multipart/form-data">
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
	<div class="form-group">
		<label>Merk</label>
		<div class="row">
			<div class="col-xs-2">
				<select name="merk" class="form-control col-md-4">
					<option value="">Pilih Merk</option>
					<option>Toyota</option>
					<option>Honda</option>
					<option>Daihatsu</option>
					<option>Suzuki</option>
				</select>
			</div>
		</div>	
	</div>
	<div class="form-group">
		<label>Type</label>
		<div class="row">
			<div class="col-xs-4">
				<input type="text" name="type" class="form-control col-md-4">		
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Kode Kendaraan</label>
		<div class="row">
			<div class="col-xs-4">
				<input type="text" name="koken" class="form-control col-md-4">		
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>No.  Polisi</label>
		<div class="row">
			<div class="col-xs-4">
				<input type="text" name="nopol" class="form-control col-md-4">		
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Warna</label>
		<div class="row">
			<div class="col-xs-4">
				<input type="radio" name="warna" value="hitam"> Hitam <br>
				<input type="radio" name="warna" value="putih"> Putih <br>
				<input type="radio" name="warna" value="silver"> Silver <br>
				<input type="radio" name="warna" value="merah"> Merah <br>	
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Tahun</label>
		<div class="row">
			<div class="col-xs-2">
				<select name="tahun" class="form-control col-md-4">
				@for ($i = 0; $i < 20; $i++)
    				<option>{{ 2015-$i }}</option>
				@endfor
				</select>
			</div>					
		</div>
	</div>
	<div class="form-group">
		<input name="poto" type="file">
	</div>

	<button type="submit" class="btn">Upload</button>
</form>

@endsection
