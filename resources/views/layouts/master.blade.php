<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Global CSS -->
    <!-- Bootstrap -->
    <!-- Some other css -->

    @stack('styles')

</head>
<body>

    @yield('content')

    <!-- Global JS -->

    @stack('scripts')
</body>
</html>
