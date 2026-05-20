@extends('layouts.siak')
{{-- untuk memanggil content --}}
@section('content')
    <div class = "container mt-2">
        <h2>Form Dosen</h2>
        <div class= "card">
            <div class="card-header">Edit Dosen</div>
            <div class="card-body">
                <form action="{{route('dsn.update', $dataDosen->nidn)}}" method="POST">
                    {{-- dibutuhkan laravel untuk mengirim data --}}
                    @csrf 
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label">NIDN</label>
                        <input name="nidn" type="text" class="form-control" value="{{ old('nidn', $dataDosen->nidn) }}" readonly>
                        @error('nidn')
                            <div class="form-text">{{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" value="{{old('nama', $dataDosen->nama)}}">
                        @error('nama')
                            <div class="form-text">{{$message}} </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection