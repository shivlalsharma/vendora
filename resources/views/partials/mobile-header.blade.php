<header class="lg:hidden bg-white border-b border-gray-100 sticky top-0 z-40 px-4 py-3">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
            <button class="text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <a href="#" class="flex items-center gap-2 flex-shrink-0">
                <img src="{{ asset('assets/images/logo.png') }}" class="h-10 w-full" alt="">
            </a>
        </div>
        <div class="flex items-center gap-4 text-gray-700">
            <!-- Search Trigger -->
            <button aria-label="Search" class="cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                </svg>
            </button>

            <!-- Notifications (Badge: 3) -->
            <a href="#notifications" aria-label="Notifications" class="relative">
                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <span
                    class="absolute -top-1.5 -right-2 bg-[#EF4444] text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">3</span>
            </a>

            <!-- Wishlist with Badge (3) -->
            <a href="#wishlist" aria-label="Wishlist" class="relative">
                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                <span
                    class="absolute -top-1.5 -right-2 bg-[#EF4444] text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">3</span>
            </a>

            <!-- Cart with Badge (2) -->
            <a href="#cart" class="relative" aria-label="Cart">
                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span
                    class="absolute -top-1.5 -right-2 bg-[#00875A] text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">2</span>
            </a>
        </div>
    </div>
</header>

<div class="lg:hidden bg-white border-b border-gray-100/80 px-4 py-2">
    <a href="#account" class="flex items-center justify-between group active:scale-[0.99] transition-transform">
        <!-- Left: Avatar + Greeting -->
        <div class="flex items-center gap-3">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80"
                    alt="Alex" class="w-10 h-10 rounded-full object-cover ring-2 ring-[#00875A]/20">
                <span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-[#00875A] ring-2 ring-white"></span>
            </div>
            <div>
                <h3 class="text-sm font-extrabold text-[#0B1527] leading-tight">
                    Hi, Alex!
                </h3>
                <p class="text-[11px] text-gray-500 font-medium leading-tight mt-0.5">
                    Welcome back to Vendora
                </p>
            </div>
        </div>

        <div class="text-gray-400 group-hover:text-[#00875A] transition-colors pr-1">
            <svg class="w-4 h-4 stroke-[2.2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </div>
    </a>
</div>
