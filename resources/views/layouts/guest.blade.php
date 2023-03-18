<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Generic National School') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased"><div>
        {{-- <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a> --}}
        {{ $slot }}
        <script>
            window.addEventListener('scroll', function () {
                const navbar = document.querySelector('nav');
                const scrollPosition = window.scrollY / (document.body.scrollHeight - window.innerHeight);
                if (scrollPosition >= 0.2) {
                    navbar.classList.remove('h-20', 'py-5', 'bg-white');
                    navbar.classList.add('h-18', 'py-3', 'bg-black');
                    $isExpanded = true;
                } else {
                    navbar.classList.remove('h-18', 'py-3', 'bg-black');
                    navbar.classList.add('h-20', 'py-5', 'bg-white');
                    $isExpanded = false;
                }
            });
        </script>
    </body>
</html>
