<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title') - {{ENV('APP_NAME')}}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/logo/favicon_32x32.png') }}" sixe="32x32">
    <link rel="icon" href="{{ asset('images/logo/favicon_192x192.png') }}" sixe="196x196">

    @stack('meta_seo')
    
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
