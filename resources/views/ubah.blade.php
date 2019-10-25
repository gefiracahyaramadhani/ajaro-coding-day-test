@extends('template')

@section('judul', 'Perbarui Barang')
@section('konten')
	<div class="container mt-5 form-data">
		<div class="clearfix mb-3">
			<h5 class="float-left">Perbarui Data Barang</h5>
		</div>
		<form method="post" action="{{url('/perbarui/'.$barang->id)}}">
            @csrf
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                <div class="col-sm-8">
                    <input type="kode" class="form-control" id="kode" name="kode" value="{{ $barang->kode }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $barang->nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $barang->deskripsi }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="stok" name="stok" value="{{ $barang->stok }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="berat" name="berat" value="{{ $barang->berat }}">
                </div>
                <label for="berat" class="col-sm-2  col-form-label">gram</label>
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-success text-center mx-auto px-4 mt-2">Simpan</button>
            </div>
        </form>
	<div>
@endsection