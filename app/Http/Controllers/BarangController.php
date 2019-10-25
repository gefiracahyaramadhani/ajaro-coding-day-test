<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Barang;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $barang = Barang::all();
           return view('home',compact('barang'));
           }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang::create($request->all());
        return redirect('/')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::where('id',$id)->first();
        return view('ubah',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $affectedRows = Barang::where('id', $id)
            ->update(
                [
                    'kode' => $request->kode,
                    'nama' => $request->nama,
                    'deskripsi' => $request->deskripsi,
                    'stok' => $request->stok,
                    'harga' => $request->harga,
                    'berat' => $request->berat
                ]
            );
        if ($affectedRows) {
            return redirect('/')->with('status','Data Berhasil Diubah');
        }
        return redirect('/')->with('status','Tidak ada perubahan data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::destroy($id);
        return redirect('/')->with('status','Data Berhasil Dihapus');
    }
}
