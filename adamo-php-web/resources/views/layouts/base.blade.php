<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @stack('styles')
</head>
<body>
    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    <script src="js/app.js"></script>
</body>
</html>
