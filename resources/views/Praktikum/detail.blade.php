@extends('layouts.app')
 
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Buku
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nim: </b>{{$data_buku->kode_buku}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$data_buku->judul}}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{$data_buku->pengarang}}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{$data_buku->jenis_buku}}</li>
                    <li class="list-group-item"><b>No_Handphone: </b>{{$data_buku->harga}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$data_buku->qty}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('product.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
