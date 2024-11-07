@extends('layouts.app')

@section('content')
    <h1>Benvenuto nel Back-Office</h1>
@endsection


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Boolfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>

    </header>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
</body>
</html>
