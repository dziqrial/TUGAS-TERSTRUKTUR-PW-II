<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntaks Dasar Blade</title>
</head>
<body>
    <p>selamat datang {{ $nama }}</p>
    <p>alamat anda {!! $alamat !!}</p>
    <p>id pengguna {{$id}}</p>

    {{--Struktur Kontrol--}}
    @if ($nilai > 80)
        <b>{{$nilai}} lulus grade A</b>
    @elseif($nilai > 70)
        <b>{{$nilai}} lulus grade B</b>
    @else
        <b>{{$nilai}} tidak lulus</b>
    @endif

    {{--@switch($nilai)
        @case(1)
            
            @break
        @case(2)
            
            @break
        @default
            
    @endswitch--}}
    <br>
    @for ($i = 0; $i < 5; $i++)
        {{ $i }} <br>
    @endfor
    <ul>
        @foreach ($buah as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
        

    
</body>
</html>