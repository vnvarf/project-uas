<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>Resep Masak Yuk</title>
    @vite([
        'resources/sass/app.scss',
        'resources/css/app.css'
    ])
    @stack('css')
</head>
<body>
    @include('layouts.components.navbar')
    {{-- content --}}
    <div class="main-content">
       @yield('content')
    </div>



    @vite('resources/js/app.js')
    @stack('js-libraries')
    @stack('js')
</body>
</html>
