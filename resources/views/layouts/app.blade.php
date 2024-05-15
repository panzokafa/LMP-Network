<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>LMP</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('css')
    @livewireStyles
</head>

<body>
    <main>
        @yield('content')
    </main>
    @livewireScripts
    @yield('javascript')
</body>

</html>
