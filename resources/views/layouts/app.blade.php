<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="background-color: #f4f1ea;">

    @include('partials.header')
    @include('partials.menu')

    <div class="container my-5 shadow-lg p-5 bg-white rounded">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>