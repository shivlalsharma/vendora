<header class="w-full bg-white border-b border-gray-100 hidden lg:block sticky top-0 z-50">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6 py-3.5 flex items-center justify-between gap-6">

        <!-- Logo -->
        <a href="#" class="flex items-center gap-2 flex-shrink-0">
            <img src="{{ asset('assets/images/logo.png') }}" class="h-14 w-full" alt="">
        </a>

        <!-- Search Bar -->
        <div class="flex-1 max-w-2xl relative">
            <form action="#" method="GET" class="relative flex items-center">
                <input type="text" name="q" placeholder="Search for products, brands and more..."
                    class="w-full pl-5 pr-14 py-2.5 rounded-full border border-gray-200 focus:outline-none focus:border-[#00875A] text-sm text-gray-700 placeholder-gray-400 shadow-sm">
                <button type="submit"
                    class="absolute right-1.5 p-2 bg-[#00875A] hover:bg-[#00744D] text-white rounded-full transition-colors flex items-center justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg>
                </button>
            </form>
        </div>

        <!-- Header Right Menu -->
        <div class="flex items-center gap-5 text-sm font-semibold text-gray-700">
            <a href="#login" class="flex items-center gap-1.5 hover:text-[#00875A] transition">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>Login</span>
            </a>
            <span class="text-gray-300">|</span>
            <a href="#register" class="flex items-center gap-1.5 hover:text-[#00875A] transition">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                <span>Register</span>
            </a>

            <!-- Become a Vendor Button -->
            <a href="#vendor-register"
                class="flex items-center gap-2 border text-gray-800 hover:text-[#00875A] px-3.5 py-1.5 rounded-md text-xs font-bold transition">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                <span>Become a Vendor</span>
            </a>

            <!-- Wishlist -->
            <a href="#wishlist" class="relative p-1 text-gray-600 hover:text-[#00875A]">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </a>

            <!-- Cart -->
            <a href="#cart" class="relative p-1 text-gray-600 hover:text-[#00875A]">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span
                    class="absolute -top-1.5 -right-2 bg-[#00875A] text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center">0</span>
            </a>
        </div>
    </div>
</header>
