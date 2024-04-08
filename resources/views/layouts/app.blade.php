<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Examen') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
      background-color: #0d6efd; 
    }
    </style>
</head>
<body>
<div class="bg-primary p-3 m-3 text-white">    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand shadow-lg" href="{{ url('/') }}">
                    {{ config('app.name', 'Examen') }}
                </a>
            </div>
        </nav>


    </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>