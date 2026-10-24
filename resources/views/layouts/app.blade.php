<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vendora - Multi-Vendor Marketplace')</title>
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    {{-- Custom CSS --}}
    @vite('resources/css/app.css')
    @stack('styles')
</head>

<body class="text-gray-800 antialiased pb-12 lg:pb-0">

    <!-- DESKTOP TOP HEADER -->
    @include('partials.header')

    <!-- DESKTOP NAVIGATION BAR -->
    @include('partials.navbar')

    <!-- MOBILE HEADER -->
    @include('partials.mobile-header')

    <!-- MAIN CONTENT CONTAINER -->
    @yield('content')

    <!-- FOOTER -->
    @include('partials.footer')

    <!-- MOBILE BOTTOM NAVIGATION BAR -->
    @include('partials.mobile-navigation')

    @stack('scripts')

</body>

</html>
