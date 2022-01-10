<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}@yield('title')</title>
    @yield('cdns')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="shortcut icon" href="{{ asset('images/logo_circle.png' )}}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="vh-100">
    
    <main style="height: 100%">
        @yield('content')
    </main>
    @yield('scripts')
</body>
</html>
