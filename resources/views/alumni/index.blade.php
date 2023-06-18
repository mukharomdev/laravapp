@extends('layout.master')
@section('title','Alumni')
@section('content')


<div class="container-fluid container-sm mt-3">
 	<div class="row">
		<div class="col-12">
			<div class="py-4">
				<h2>Daftar Alumni</h2>
			</div>
		<table class="table table-striped table-sm">
			<thead>
			<tr>
			<th>ID</th>
			<th>NIS </th>
			<th>NAMA</th>
			<th>TTL</th>
			<th>ALAMAT</th>
			</tr>
			</thead>
		<tbody>
		@forelse ($alumnies as $alumni)
		<tr>
		<th>{{$alumni->id}}</th>
		<td>{{$alumni->nis}}</td>
		<td>{{$alumni->nama}}</td>
		<td>{{$alumni->tanggal_lahir}}</td>
		<td>{{$alumni->alamat_lengkap}}</td>
		</tr>
		@empty
		<td colspan="6" class="text-center">Tidak ada data...</td>
		@endforelse
		</tbody>
		</table>
		</div>
	</div>
</div>
@endsection