<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $data_buku = Buku::paginate(5); // Mengambil semua isi tabel
        $posts = Buku::orderBy('kode_buku', 'desc')->paginate(5);
        return view('Praktikum.product', compact('data_buku'))
        ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Praktikum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku' => 'required',
            'harga' => 'required',
            'qty' => 'required',
            ]);
//fungsi eloquent untuk menambah data
    Buku::create($request->all());
//jika data berhasil ditambahkan, akan kembali ke halaman utama
    return redirect()->route('product.index')
    ->with('success', 'Data Buku Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show($kode_buku)
    {
        $data_buku = Buku::find($kode_buku);
        return view('Praktikum.detail', compact('data_buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_buku)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $data_buku = Buku::find($kode_buku);
        return view('Praktikum.edit', compact('data_buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_buku)
    {
        //melakukan validasi data
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku' => 'required',
            'harga' => 'required',
            'qty' => 'required',
            ]);
            //fungsi eloquent untuk mengupdate data inputan kita
            Buku::find($kode_buku)->update($request->all());
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('product.index')
            ->with('success', 'Data Buku Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_buku)
    {
        //fungsi eloquent untuk menghapus data
        Buku::find($kode_buku)->delete();
        return redirect()->route('product.index')
        -> with('success', 'Data Buku Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $data_buku = Buku::where('kode_buku', 'like', "%" . $keyword . "%")->paginate(1);
        return view('Praktikum.product', compact('data_buku'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
