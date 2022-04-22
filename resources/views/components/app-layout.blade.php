<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{darkMode:false}" :class=" darkMode ? 'dark' : ''">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.svg')}}">
        <title>Larafolio</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body class="antialiased">
        <main class="min-h-screen">
            <x-layout.navbar></x-layout.navbar>
            {{ $slot }}
            <x-layout.footer></x-layout.footer>
        </main>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>
