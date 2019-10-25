@extends('template')

@section('judul', 'Tambah Barang')
@section('konten')
	<div class="container mt-5 form-data">
		<div class="clearfix mb-3">
			<h5 class="float-left">Input Data Barang</h5>
		</div>
		<form method="post" action="{{url('/simpan')}}">
            @csrf
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                <div class="col-sm-8">
                    <input type="kode" class="form-control" id="kode" name="kode">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="stok" name="stok">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="harga" name="harga">

                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="berat" name="berat">
                </div>
                <label for="berat" class="col-sm-2  col-form-label">gram</label>
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-success text-center mx-auto px-4 mt-2">Tambah</button>
            </div>
        </form>
	<div>
@endsection