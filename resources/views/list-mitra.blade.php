@extends('dashboard-layout')

@section('content')

list mitra here

<form action="" class="form-inline">
	<div class="input-group">
		<input type="text" class="form-control">
	</div>
	<select name="" id="" class="form-control">
		<option value="">Nama</option>
		<option value="">Nomor ID</option>
	</select>
	<button class="btn btn-primary">Cari</button>
</form>

<a href="/customer/new">Tambah mitra baru</a>

<table class="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
		</tr>
	</tbody>
</table>
@endsection
