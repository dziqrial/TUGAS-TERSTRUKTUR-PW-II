@extends('layouts.main')
@section('content')
    <section>
        <div class = "container mt-2">
            <h2>Halaman Buku</h2>
            <div class= "card p-3">
                <div class= 'mb2'>
                    <a href="{{route('form_buku')}}" class="btn btn-primary btn-sm"> Tambah data </a>
                </div>

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Tahun terbit</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataBuku as $item)
                        <tr>
                            <td scope="row" class="text-center">{{$loop->iteration}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->penulis}}</td>
                            <td>{{$item->harga}}</td>
                            <td>{{$item->tahun_terbit}}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                <button type="button" class="btn btn-warning btn-sm">Edit</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection