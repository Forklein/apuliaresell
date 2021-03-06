<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('images/logo_circle.png' )}}" type="image/x-icon">
        <title>{{ config('app.name')}}</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        {{-- <a href="{{ url('/admin') }}">Dashboard</a> --}}
                    @else
                        {{-- <a href="{{ route('login') }}">Login</a> --}}
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div id="app"></div>

        <script src="{{asset('js/front.js')}}"></script>
    </body>
</html>
