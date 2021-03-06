<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PizzaHunt</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="position-relative" style="padding-bottom: 150px; min-height: 100vh;">
    <x-header/>
    @yield('content')
    @include('includes.common.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
