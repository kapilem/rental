@extends('dashboard-layout')

@section('content')

trx penyewaan dan pengembalian mitra cust

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
		
			<?php 
				//var_dump($customers)
				foreach ($mitra as $key => $cust) {
					?>
					<tr>
			<td>{{$cust->id}}</td>
			<td>{{$cust->firstname}} {{$cust->lastname}}</td>
			<td>{{$cust->alamat}}</td>
					</tr>	
					<?php
				}
			?>
	</tbody>
</table>
@endsection
