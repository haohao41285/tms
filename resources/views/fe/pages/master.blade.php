<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title') - {{ENV('APP_NAME')}}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/logo/favicon_32x32.png') }}" sixe="32x32">
    <link rel="icon" href="{{ asset('images/logo/favicon_192x192.png') }}" sixe="196x196">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5LW8X88');</script>
    <!-- End Google Tag Manager -->

    @stack('meta_seo')
    
    @include('fe.lib._css')

    @stack('css')

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LW8X88"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('fe.partials._header')

    @yield('content')

    @include('fe.partials._footer')

	@include('fe.partials._popup')

    @include('fe.lib._js')
    
</body>

@stack('js')

</html>
