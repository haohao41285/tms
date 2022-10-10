<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ENV('APP_NAME')}} | @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    @include('fe.lib._css')

    @stack('css')

</head>

<body>
    @include('fe.partials._header')

    @yield('content')

    @include('fe.partials._footer')

	@include('fe.partials._popup')

    @include('fe.lib._js')
    
</body>

@stack('js')

</html>
