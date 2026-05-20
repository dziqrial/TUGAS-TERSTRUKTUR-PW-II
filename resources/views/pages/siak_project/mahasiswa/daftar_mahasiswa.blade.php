@extends('layouts.siak')
@section('content')
    <section>
        <div class = "container mt-2">
            <h2>Data Mahasiswa</h2>
            <div class= "card p-3">
                <div class= 'mb2'>
                    <a href="{{route('mhs.create')}}" class="btn btn-primary btn-sm"> Tambah data </a>
                </div>

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">NPM</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">NIDN</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataMhs as $mhs)
                        <tr>
                            <td>{{$mhs->npm}}</td>
                            <td>{{$mhs->nama}}</td>
                            <td>{{$mhs->nidn_dosen}}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                <button type="button" class="btn btn-warning btn-sm"><a href="{{route('mhs.edit', $mhs->npm)}}">Edit</a></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection