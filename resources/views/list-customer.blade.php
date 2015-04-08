@extends('dashboard-layout')

@section('content')

list customer here


<form action="">
<div class="row">
	<div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" aria-label="...">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Cari berdasarkan <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right" role="menu">
          <li><a href="#">Nama</a></li>
          <li><a href="#">Nomor ID</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 --> 	
</div>
</form>

<a href="/customer/add">Tambah cust baru</a>

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
				foreach ($customers as $key => $cust) {
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
