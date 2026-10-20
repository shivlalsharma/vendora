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
            <a href="{{ route('signin') }}" class="flex items-center gap-1.5 hover:text-[#00875A] transition">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>Login</span>
            </a>
            <span class="text-gray-300">|</span>
            <a href="{{ route('signup') }}" class="flex items-center gap-1.5 hover:text-[#00875A] transition">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                <span>Register</span>
            </a>

            <a href="#vendor-register"
                class="flex items-center gap-2 border text-gray-800 hover:text-[#00875A] px-3.5 py-1.5 rounded-md text-xs font-bold transition">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                <span>Become a Vendor</span>
            </a>

            <a href="#notifications" class="relative p-1 text-gray-600 hover:text-[#00875A] transition"
                aria-label="Notifications">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <span
                    class="absolute -top-1 -right-1.5 bg-[#EF4444] text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-xs">3</span>
            </a>

            <a href="#wishlist" class="relative p-1 text-gray-600 hover:text-[#00875A] transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                <span
                    class="absolute -top-1 -right-1.5 bg-[#EF4444] text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-xs">3</span>
            </a>

            <a href="#cart" class="relative p-1 text-gray-600 hover:text-[#00875A] transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span
                    class="absolute -top-1 -right-1.5 bg-[#00875A] text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-xs">2</span>
            </a>

            {{-- <div class="relative group/profile py-2 ml-8">
                <!-- Profile Trigger Button -->
                <button type="button" class="flex items-center gap-2.5 focus:outline-none cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80"
                        alt="Alex Carter" class="w-9 h-9 rounded-full object-cover ring-2 ring-[#00875A]/20">
                    <span class="text-sm font-bold text-gray-900 group-hover/profile:text-[#00875A] transition">Alex
                        Carter</span>
                    <svg class="w-4 h-4 text-gray-400 group-hover/profile:text-[#00875A] transition transform group-hover/profile:rotate-180"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Profile Dropdown Menu (Exact match to Desktop - Profile Hover Dropdown) -->
                <div
                    class="absolute right-0 top-full pt-1 w-64 hidden group-hover/profile:block z-50 animate-in fade-in duration-150">
                    <div
                        class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden p-2 text-gray-700">

                        <!-- User Info Header -->
                        <div class="flex items-center gap-3 p-3 bg-gray-50/70 rounded-xl mb-1.5">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80"
                                alt="Alex Carter" class="w-10 h-10 rounded-full object-cover">
                            <div class="overflow-hidden">
                                <h4 class="text-sm font-bold text-gray-900 truncate">Alex Carter</h4>
                                <p class="text-[11px] text-gray-500 font-medium truncate">alex.carter@example.com
                                </p>
                            </div>
                        </div>

                        <!-- Menu Links -->
                        <div class="space-y-0.5 text-xs font-semibold">
                            <a href="#account"
                                class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-gray-50 hover:text-[#00875A] transition">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>My Account</span>
                            </a>

                            <a href="#orders"
                                class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-gray-50 hover:text-[#00875A] transition">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                                <span>My Orders</span>
                            </a>

                            <a href="#wishlist"
                                class="flex items-center justify-between px-3 py-2.5 rounded-lg hover:bg-gray-50 hover:text-[#00875A] transition">
                                <div class="flex items-center gap-3">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    <span>My Wishlist</span>
                                </div>
                                <span
                                    class="bg-[#EF4444] text-white text-[10px] font-bold px-1.5 py-0.2 rounded-full">3</span>
                            </a>

                            <a href="#addresses"
                                class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-gray-50 hover:text-[#00875A] transition">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>My Addresses</span>
                            </a>

                            <a href="#settings"
                                class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-gray-50 hover:text-[#00875A] transition">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Settings</span>
                            </a>

                            <div class="my-1 border-t border-gray-100"></div>

                            <a href="#help"
                                class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-gray-50 hover:text-[#00875A] transition">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Help &amp; Support</span>
                            </a>

                            <form method="POST" action="#">
                                @csrf
                                <button type="submit"
                                    class="w-full flex items-center gap-3 px-3 py-2.5 rounded-lg text-red-600 hover:bg-red-50 transition cursor-pointer">
                                    <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    <span>Log Out</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</header>
