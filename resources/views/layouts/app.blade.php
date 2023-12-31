<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LMP</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    @yield('css')

</head>

<body>
    <main>
        @yield('content')
    </main>
    @yield('javascript')
</body>

</html>
