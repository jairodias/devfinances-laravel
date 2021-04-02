<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <header>
            @include('layouts.partials.alert')
            <img id="logo" src="{{ asset('assets/logo.svg') }}" alt="Logo Dev Finance">
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.partials.modal')

        <footer>
            <p>{{ config('app.name') }}</p>
        </footer>
    </div>
</body>
</html>
