@extends('layouts.app')
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<!--nav-->
				@include('layouts.dashboard')
			<!--end nav-->
	</div>
	<div class="col-md-10">
		<center><h1>Data ustad</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">Data ustad
			<div class="panel-title pull-right"><a href="/ustad/create">Tambah Data</a></div></div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>No_induk</th>
					  <th>Santri</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td><p>{{ $data->no_induk }}</p></td>
				    	<td>@foreach($data->Santri as $mhs)<li>{{ $mhs->nama }}@endforeach</li></td>
<td>
	<a class="btn btn-warning" href="{{ route('ustad.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('ustad.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('ustad.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection