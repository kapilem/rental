@extends('dashboard-layout')

@section('content')

list mitra here

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

<a href="/mitra/add">Tambah mitra baru</a>

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
			<td><a href="/link ke masingmasing" data-toggle="modal" data-target="#detailMitra">{{$cust->firstname}} {{$cust->lastname}}</a></td>
			<td>{{$cust->alamat}}</td>
					</tr>	
					<?php
				}
			?>
	</tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="detailMitra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Informasi Mitra</h4>
      </div>
      <div class="modal-body">
      <form action="" class="form-horizontal">
      	<div class="form-group">
    		<label class="col-sm-2 control-label">Nama</label>
    		<div class="col-sm-10">
    		  <p class="form-control-static">Ahmad Burhan Arifin</p>
    		</div>
  		</div>
      	<div class="form-group">
    		<label class="col-sm-2 control-label">Alamat</label>
    		<div class="col-sm-10">
    		  <p class="form-control-static">Jl. Buntu</p>
    		</div>
  		</div>
      </form>
		<div class="row">
		  <div class="col-sm-3"><strong>Nama</strong></div>
      		<div class="col-sm-9">Ahmad</div> 
		</div>
      <div class="row">
		  <div class="col-sm-3"><strong>Alamat</strong></div>
      		<div class="col-sm-9">Ahmad</div> 
		</div>
		<div class="row">
		  <div class="col-sm-3"><strong>No. Identitas</strong></div>
      		<div class="col-sm-9">0123123923</div> 
		</div>
		<div class="row">
		  <div class="col-sm-3"><strong>Jenis Ientitas</strong></div>
      		<div class="col-sm-9">Ahmad</div> 
		</div>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection
