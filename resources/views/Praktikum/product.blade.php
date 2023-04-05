@extends('layouts.app')
@section('title', 'Product')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div>
            <form class="form-left my-2" method="get" action="{{ route('search') }}">
            <div class="form-group w-80 mb-3">
                        <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Nama">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    </div>
            </form>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Input Data Buku</a>
            </div>
    </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>kode_buku</th>
            <th>judul</th>
            <th>pengarang</th>
            <th>jenis_buku</th>
            <th>harga</th>
            <th>qty</th>
            <th width="280px">Action</th>
        </tr>
            @foreach ($data_buku as $Mahasiswa)
        <tr>
            <td>{{ $Mahasiswa->kode_buku }}</td>
            <td>{{ $Mahasiswa->judul }}</td>
            <td>{{ $Mahasiswa->pengarang }}</td>
            <td>{{ $Mahasiswa->jenis_buku }}</td>
            <td>{{ $Mahasiswa->harga }}</td>
            <td>{{ $Mahasiswa->qty }}</td>
            <td>
        <form action="{{ route('product.destroy',$Mahasiswa->kode_buku) }}" method="POST">
 
        <a class="btn btn-info" href="{{ route('product.show',$Mahasiswa->kode_buku) }}">Show</a>

        <a class="btn btn-primary" href="{{ route('product.edit',$Mahasiswa->kode_buku) }}">Edit</a>
        @csrf

        @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
    {{$data_buku->links()}}
@endsection