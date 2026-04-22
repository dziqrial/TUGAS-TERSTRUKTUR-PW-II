<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Design - Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="bg-glow-large"></div>
    <div class="bg-glow-small"></div>

    @include('partials.navbar')

    <div class="content-wrapper">
        @yield('content')
    </div>

</body>
</html>