<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM BLADE</title>
</head>
<body>
    <h1>Form Data Mahasiswa</h1>
    <form action="{{route('mahasiswa.simpan')}}" method="POST">
        @csrf
        <label for="npm">NPM</label><br>
        <input type="text" name="npm"><br>

        <label for="nama">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br>

        <button type="submit">Simpan</button>
</form> 
</body>
</html>