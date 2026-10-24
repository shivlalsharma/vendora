<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sign Up - Vendora')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    {{-- Custom CSS --}}
    @vite('resources/css/app.css')
    @stack('styles')
</head>

<body
    class="bg-[#F8FAFC] min-h-screen flex flex-col justify-between text-gray-800 antialiased font-['Plus_Jakarta_Sans',sans-serif]">

    <!-- TOP HEADER -->
    @include('partials.auth.header')

    <!-- MAIN CONTAINER -->
    @yield('content')

    <!-- FOOTER LINKS -->
    @include('partials.auth.footer')

    @stack('scripts')
</body>

</html>
