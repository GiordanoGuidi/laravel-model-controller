<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{Vite::asset('resources/img/hd.jpg')}}">
    <title>{{env('APP_NAME', 'Movies')}} | @yield('title')</title>
    {{-- Importazione Vite e Sass --}}
    @vite('resources/js/app.js')
    {{--CDNS--}}
    @yield('cdns')
</head>
<body>

    {{--Main Content--}}
    @yield('main-content')
    
</body>
{{--Scripts--}}
@yield('scipts')
</html>