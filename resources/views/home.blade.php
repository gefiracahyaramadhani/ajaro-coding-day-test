@extends('template')

@section('judul', 'Data Barang')
@section('konten')
	<div class="container mt-5">
		<div class="clearfix">
			<h5 class="float-left">Data Barang</h5>
			<a href="{{ url('/tambah') }}"><button type="button" class="btn btn-success float-right font-weight-bold px-5">Tambah</button></a>
		</div>
		@if (session('status'))
			<div class="alert alert-success mt-3">
				{{ @session('status') }}
			</div>
		@endif
		<table class="table table-bordered mt-3 text-center">
			<thead>
				<tr>
				<th scope="col">Kode</th>
				<th scope="col">Nama</th>
				<th scope="col">Harga</th>
				<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
			@foreach ( $barang as $brg )
				<tr>
					<td>{{ $brg->kode }}</td>
					<td>{{ $brg->nama }}</td>
					<td>Rp. {{ number_format($brg->harga,2,',','.') }}</td>
					<td><a href="{{ url($brg->id.'/ubah') }}" class="mr-2 text-primary">Edit</a> <a href="{{url('hapus/'.$brg->id)}}" class="text-danger">Hapus</a></td>
				</tr>
			@endforeach
			</tbody>
		</table>
	<div>
@endsection