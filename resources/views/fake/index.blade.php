@php
    $categories = [
        [
            'name' => 'Electronics',
            'icon' => 'laptop',
            'img' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=300&auto=format&fit=crop&q=80',
        ],
        [
            'name' => 'Fashion',
            'icon' => 'dress',
            'img' => 'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?w=300&auto=format&fit=crop&q=80',
        ],
        [
            'name' => 'Home & Living',
            'icon' => 'couch',
            'img' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=300&auto=format&fit=crop&q=80',
        ],
        [
            'name' => 'Beauty & Health',
            'icon' => 'sparkles',
            'img' => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?w=300&auto=format&fit=crop&q=80',
        ],
        [
            'name' => 'Sports & Outdoors',
            'icon' => 'sneakers',
            'img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=300&auto=format&fit=crop&q=80',
        ],
        [
            'name' => 'Toys & Games',
            'icon' => 'teddy',
            'img' => 'https://images.unsplash.com/photo-1559715745-e1b33a271c8f?w=300&auto=format&fit=crop&q=80',
        ],
        [
            'name' => 'Books & Stationery',
            'icon' => 'book',
            'img' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=300&auto=format&fit=crop&q=80',
        ],
        [
            'name' => 'Automotive',
            'icon' => 'car',
            'img' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=300&auto=format&fit=crop&q=80',
        ],
    ];

    $products = [
        [
            'title' => 'Wireless Headphones',
            'subtitle' => 'Premium Sound Quality',
            'price' => '59.99',
            'old_price' => '89.99',
            'rating' => '4.5',
            'reviews' => '120',
            'badge' => 'Best Seller',
            'badge_color' => 'bg-[#00875A] text-white',
            'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&auto=format&fit=crop&q=80',
        ],
        [
            'title' => 'Smart Watch',
            'subtitle' => 'Fitness & Health Tracker',
            'price' => '79.99',
            'old_price' => '99.99',
            'rating' => '4.3',
            'reviews' => '89',
            'badge' => '-20%',
            'badge_color' => 'bg-[#FF4D4D] text-white',
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&auto=format&fit=crop&q=80',
        ],
        [
            'title' => 'Running Shoes',
            'subtitle' => 'Comfortable & Stylish',
            'price' => '49.99',
            'old_price' => '69.99',
            'rating' => '4.6',
            'reviews' => '200',
            'badge' => null,
            'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&auto=format&fit=crop&q=80',
        ],
        [
            'title' => 'Travel Backpack',
            'subtitle' => 'Water Resistant',
            'price' => '34.99',
            'old_price' => '49.99',
            'rating' => '4.7',
            'reviews' => '156',
            'badge' => null,
            'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&auto=format&fit=crop&q=80',
        ],
        [
            'title' => 'Air Fryer',
            'subtitle' => 'Healthy Cooking Made Easy',
            'price' => '84.99',
            'old_price' => '99.99',
            'rating' => '4.4',
            'reviews' => '98',
            'badge' => '-15%',
            'badge_color' => 'bg-[#FF4D4D] text-white',
            'image' => 'https://images.unsplash.com/photo-1585515320310-259814833e62?w=400&auto=format&fit=crop&q=80',
        ],
        [
            'title' => 'Skincare Set',
            'subtitle' => 'Natural & Organic',
            'price' => '29.99',
            'old_price' => '39.99',
            'rating' => '4.8',
            'reviews' => '143',
            'badge' => null,
            'image' => 'https://images.unsplash.com/photo-1556228720-195a672e8a03?w=400&auto=format&fit=crop&q=80',
        ],
    ];

    $vendors = [
        [
            'name' => 'TechWorld',
            'category' => 'Electronics & Gadgets',
            'initials' => 'TW',
            'badge_bg' => 'bg-[#111827] text-white',
            'rating' => '4.8',
            'reviews' => '2.1k',
            'products_count' => '120 Products',
        ],
        [
            'name' => 'FashionHub',
            'category' => 'Fashion & Lifestyle',
            'initials' => 'FH',
            'badge_bg' => 'bg-[#BE185D] text-white',
            'rating' => '4.6',
            'reviews' => '1.8k',
            'products_count' => '98 Products',
        ],
        [
            'name' => 'HomeEssentials',
            'category' => 'Home & Living',
            'initials' => null,
            'icon' => 'home',
            'badge_bg' => 'bg-[#064E3B] text-white',
            'rating' => '4.7',
            'reviews' => '1.5k',
            'products_count' => '76 Products',
        ],
        [
            'name' => 'BeautyStore',
            'category' => 'Beauty & Personal Care',
            'initials' => null,
            'icon' => 'flower',
            'badge_bg' => 'bg-[#F43F5E] text-white',
            'rating' => '4.5',
            'reviews' => '1.2k',
            'products_count' => '65 Products',
        ],
        [
            'name' => 'SportsZone',
            'category' => 'Sports & Outdoor',
            'initials' => null,
            'icon' => 'mountain',
            'badge_bg' => 'bg-[#0F172A] text-white',
            'rating' => '4.6',
            'reviews' => '980',
            'products_count' => '54 Products',
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vendora - Multi-Vendor Marketplace')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-gray-800 antialiased pb-12 lg:pb-0">

    <!-- DESKTOP TOP HEADER -->
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
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
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

                <!-- Notifications (Badge: 3) -->
                <a href="#notifications" class="relative p-1 text-gray-600 hover:text-[#00875A] transition"
                    aria-label="Notifications">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span
                        class="absolute -top-1 -right-1.5 bg-[#EF4444] text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-xs">3</span>
                </a>

                <!-- Wishlist (Badge: 3) -->
                <a href="#wishlist" class="relative p-1 text-gray-600 hover:text-[#00875A] transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <span
                        class="absolute -top-1 -right-1.5 bg-[#EF4444] text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-xs">3</span>
                </a>

                <!-- Cart (Badge: 2) -->
                <a href="#cart" class="relative p-1 text-gray-600 hover:text-[#00875A] transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span
                        class="absolute -top-1 -right-1.5 bg-[#00875A] text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-xs">2</span>
                </a>

                <!-- Profile Hover Dropdown Container -->
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

    <!-- DESKTOP NAVIGATION BAR -->
    <nav class="w-full bg-white border-b border-gray-100 hidden lg:block">
        <div class="max-w-[1360px] mx-auto px-4 sm:px-6 flex items-center gap-8 text-sm font-semibold">
            <!-- Category Toggle Button -->
            <button
                class="flex items-center gap-3 px-4 py-3 border-r border-gray-100 text-gray-800 hover:text-[#00875A]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <span>All Categories</span>
                <svg class="w-3.5 h-3.5 text-gray-400 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Navigation Links -->
            <div class="flex items-center gap-8 py-3 text-gray-600 font-medium">
                <a href="{{ url('/') }}"
                    class="relative text-[#00875A] font-bold py-1 after:absolute after:bottom-[-13px] after:left-0 after:right-0 after:h-[2.5px] after:bg-[#00875A] after:rounded-full">
                    Home
                </a>
                <a href="#shop" class="hover:text-[#00875A] transition">Shop</a>
                <a href="#vendors" class="hover:text-[#00875A] transition">Vendors</a>
                <a href="#deals" class="hover:text-[#00875A] transition">Deals</a>
                <a href="#about" class="hover:text-[#00875A] transition">About Us</a>
                <a href="#contact" class="hover:text-[#00875A] transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- MOBILE HEADER -->
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

    <!-- ==================== MOBILE USER GREETING BAR (LOGGED IN) ==================== -->
    <div class="lg:hidden bg-white border-b border-gray-100/80 px-4 py-2">
        <a href="#account" class="flex items-center justify-between group active:scale-[0.99] transition-transform">
            <!-- Left: Avatar + Greeting -->
            <div class="flex items-center gap-3">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80"
                        alt="Alex" class="w-10 h-10 rounded-full object-cover ring-2 ring-[#00875A]/20">
                    <span
                        class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-[#00875A] ring-2 ring-white"></span>
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

            <!-- Right: Arrow Chevron -->
            <div class="text-gray-400 group-hover:text-[#00875A] transition-colors pr-1">
                <svg class="w-4 h-4 stroke-[2.2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </div>
        </a>
    </div>

    <!-- MAIN CONTENT CONTAINER -->
    <main class="max-w-[1360px] mx-auto px-4 sm:px-6 py-4 lg:py-6 space-y-12">

        <!-- HERO SECTION -->
        <section id="heroSlider"
            class="relative rounded-sm overflow-hidden select-none border border-gray-200/80 shadow-xs group">

            <!-- Track Container -->
            <div id="sliderTrack" class="flex w-full will-change-transform">

                <!-- ================= SLIDE 1: Multi-Vendor Marketplace ================= -->
                <div
                    class="hero-slide relative w-full flex-shrink-0 min-h-[380px] sm:min-h-[420px] lg:min-h-[460px] flex items-center bg-[#EDF6F1]">
                    <!-- 1. Full Background Image (Aligned Right) -->
                    <img src="{{ asset('assets/images/everything.png') }}" alt="Vendora Marketplace Tabletop"
                        class="absolute inset-0 w-full h-full object-cover object-right pointer-events-none" />

                    <!-- 2. Handwritten Callout & Arrow (Over Top Right Showcase) -->
                    <div class="absolute top-6 right-12 lg:right-28 z-20 pointer-events-none hidden md:block">
                        <div class="flex flex-col items-center transform -rotate-6">
                            <span
                                class="font-serif italic font-extrabold text-[#1E293B] text-sm lg:text-base tracking-wide leading-tight text-center drop-shadow-xs">
                                More Choices<br>Better Deals
                            </span>
                            <svg class="w-10 h-7 text-[#1E293B] mt-1 ml-6 transform rotate-12" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 40 30">
                                <path d="M5 5 C 18 2, 28 8, 30 22 M 22 17 L 30 22 L 32 14" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <!-- 3. Left Content Area -->
                    <div
                        class="relative z-20 w-full max-w-[1360px] mx-auto px-6 sm:px-10 lg:px-12 py-8 flex flex-col justify-center">
                        <div class="max-w-xl space-y-4 sm:space-y-5">

                            <!-- Mint Badge -->
                            <span
                                class="inline-block bg-[#D3F2E4] text-[#006C47] text-xs font-bold px-3 py-1.5 rounded-md">
                                Multi-Vendor Marketplace
                            </span>

                            <!-- Main Heading -->
                            <h1
                                class="text-3xl sm:text-4xl lg:text-[44px] font-extrabold text-[#0B1527] leading-[1.12] tracking-tight">
                                Everything You Need <br>
                                <span class="text-[#00875A]">in One Place</span>
                            </h1>

                            <!-- Paragraph -->
                            <p
                                class="text-gray-600 text-xs sm:text-sm lg:text-[15px] leading-relaxed max-w-md font-medium">
                                Shop from thousands of trusted vendors, discover unique products, and enjoy a seamless
                                shopping experience on Vendora.
                            </p>

                            <!-- CTAs -->
                            <div class="flex items-center gap-3 pt-1">
                                <a href="#shop"
                                    class="bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-xs sm:text-sm px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg shadow-sm flex items-center gap-2 transition duration-200">
                                    <span>Shop Now</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                                <a href="#vendors"
                                    class="bg-white hover:bg-gray-50 text-gray-800 border border-gray-200 font-bold text-xs sm:text-sm px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg shadow-xs transition duration-200">
                                    Explore Vendors
                                </a>
                            </div>

                            <!-- 4 Trust Features -->
                            <div class="flex flex-wrap items-center gap-6 sm:gap-7 pt-4">
                                <div class="flex items-center gap-2">
                                    <div class="text-[#00875A] shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                        </svg>
                                    </div>
                                    <span class="text-[11px] font-semibold text-gray-700 leading-tight">Wide
                                        Selection<br>of Products</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="text-[#00875A] shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-[11px] font-semibold text-gray-700 leading-tight">Trusted<br>Vendors</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="text-[#00875A] shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-[11px] font-semibold text-gray-700 leading-tight">Secure<br>Payments</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="text-[#00875A] shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                                        </svg>
                                    </div>
                                    <span class="text-[11px] font-semibold text-gray-700 leading-tight">Fast &amp;
                                        Reliable<br>Delivery</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ================= SLIDE 2: Tech & Electronics ================= -->
                <div
                    class="hero-slide relative w-full flex-shrink-0 min-h-[380px] sm:min-h-[420px] lg:min-h-[460px] flex items-center bg-[#F3F4F6]">
                    <!-- Background Image -->
                    <img src="{{ asset('assets/images/tech.png') }}" alt="Tech Gadgets"
                        class="absolute inset-0 w-full h-full object-cover object-right pointer-events-none" />

                    <!-- Callout -->
                    <div class="absolute top-6 right-12 lg:right-28 z-20 pointer-events-none hidden md:block">
                        <div class="flex flex-col items-center transform -rotate-6">
                            <span
                                class="font-serif italic font-extrabold text-[#1E293B] text-sm lg:text-base tracking-wide leading-tight text-center drop-shadow-xs">
                                Top Rated<br>Best Warranties
                            </span>
                            <svg class="w-10 h-7 text-[#1E293B] mt-1 ml-6 transform rotate-12" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 40 30">
                                <path d="M5 5 C 18 2, 28 8, 30 22 M 22 17 L 30 22 L 32 14" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <!-- Left Content Area -->
                    <div
                        class="relative z-20 w-full max-w-[1360px] mx-auto px-6 sm:px-10 lg:px-12 py-8 flex flex-col justify-center">
                        <div class="max-w-xl space-y-4 sm:space-y-5">
                            <span
                                class="inline-block bg-[#FEE2E2] text-[#DC2626] text-xs font-bold px-3 py-1.5 rounded-md">
                                Flash Deals &bull; Up to 40% Off
                            </span>

                            <h1
                                class="text-3xl sm:text-4xl lg:text-[44px] font-extrabold text-[#0B1527] leading-[1.12] tracking-tight">
                                Smart Devices &amp; <br>
                                <span class="text-[#00875A]">Audio Accessories</span>
                            </h1>

                            <p
                                class="text-gray-600 text-xs sm:text-sm lg:text-[15px] leading-relaxed max-w-md font-medium">
                                Upgrade your setup with official wireless gadgets, studio acoustics, and verified
                                authentic gear.
                            </p>

                            <div class="flex items-center gap-3 pt-1">
                                <a href="#shop"
                                    class="bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-xs sm:text-sm px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg shadow-sm flex items-center gap-2 transition duration-200">
                                    <span>Browse Gadgets</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                                <a href="#deals"
                                    class="bg-white hover:bg-gray-50 text-gray-800 border border-gray-200 font-bold text-xs sm:text-sm px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg shadow-xs transition duration-200">
                                    View Offers
                                </a>
                            </div>

                            <!-- Features -->
                            <div class="flex flex-wrap items-center gap-6 sm:gap-7 pt-4">
                                <div class="flex items-center gap-2">
                                    <div class="text-[#00875A] shrink-0"><svg class="w-5 h-5" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                        </svg></div>
                                    <span class="text-[11px] font-semibold text-gray-700 leading-tight">Wide
                                        Selection<br>of Products</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="text-[#00875A] shrink-0"><svg class="w-5 h-5" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg></div>
                                    <span
                                        class="text-[11px] font-semibold text-gray-700 leading-tight">Trusted<br>Vendors</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="text-[#00875A] shrink-0"><svg class="w-5 h-5" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                        </svg></div>
                                    <span
                                        class="text-[11px] font-semibold text-gray-700 leading-tight">Secure<br>Payments</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="text-[#00875A] shrink-0"><svg class="w-5 h-5" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                                        </svg></div>
                                    <span class="text-[11px] font-semibold text-gray-700 leading-tight">Fast &amp;
                                        Reliable<br>Delivery</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ================= SLIDE 3: Modern Fashion ================= -->
                <div
                    class="hero-slide relative w-full flex-shrink-0 min-h-[380px] sm:min-h-[420px] lg:min-h-[460px] flex items-center bg-[#FDF5F2]">
                    <!-- Background Image -->
                    <img src="{{ asset('assets/images/headphone.png') }}" alt="Fashion Essentials"
                        class="absolute inset-0 w-full h-full object-cover object-right pointer-events-none" />

                    <!-- Callout -->
                    <div class="absolute top-6 right-12 lg:right-28 z-20 pointer-events-none hidden md:block">
                        <div class="flex flex-col items-center transform -rotate-6">
                            <span
                                class="font-serif italic font-extrabold text-[#1E293B] text-sm lg:text-base tracking-wide leading-tight text-center drop-shadow-xs">
                                Fresh Fits<br>Direct To You
                            </span>
                            <svg class="w-10 h-7 text-[#1E293B] mt-1 ml-6 transform rotate-12" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 40 30">
                                <path d="M5 5 C 18 2, 28 8, 30 22 M 22 17 L 30 22 L 32 14" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <!-- Left Content Area -->
                    <div
                        class="relative z-20 w-full max-w-[1360px] mx-auto px-6 sm:px-10 lg:px-12 py-8 flex flex-col justify-center">
                        <div class="max-w-xl space-y-4 sm:space-y-5">
                            <span
                                class="inline-block bg-[#FDE2D8] text-[#C2410C] text-xs font-bold px-3 py-1.5 rounded-md">
                                Season New Arrivals
                            </span>

                            <h1
                                class="text-3xl sm:text-4xl lg:text-[44px] font-extrabold text-[#0B1527] leading-[1.12] tracking-tight">
                                Trendy Styles &amp; <br>
                                <span class="text-[#00875A]">Everyday Living</span>
                            </h1>

                            <p
                                class="text-gray-600 text-xs sm:text-sm lg:text-[15px] leading-relaxed max-w-md font-medium">
                                Shop modern collections from boutique apparel vendors with fast nationwide shipping.
                            </p>

                            <div class="flex items-center gap-3 pt-1">
                                <a href="#shop"
                                    class="bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-xs sm:text-sm px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg shadow-sm flex items-center gap-2 transition duration-200">
                                    <span>Shop Fashion</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                                <a href="#vendors"
                                    class="bg-white hover:bg-gray-50 text-gray-800 border border-gray-200 font-bold text-xs sm:text-sm px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg shadow-xs transition duration-200">
                                    View Boutiques
                                </a>
                            </div>

                            <!-- Features -->
                            <div class="flex flex-wrap items-center gap-6 sm:gap-7 pt-4">
                                <div class="flex items-center gap-2">
                                    <div class="text-[#00875A] shrink-0"><svg class="w-5 h-5" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                        </svg></div>
                                    <span class="text-[11px] font-semibold text-gray-700 leading-tight">Wide
                                        Selection<br>of Products</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="text-[#00875A] shrink-0"><svg class="w-5 h-5" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg></div>
                                    <span
                                        class="text-[11px] font-semibold text-gray-700 leading-tight">Trusted<br>Vendors</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="text-[#00875A] shrink-0"><svg class="w-5 h-5" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                        </svg></div>
                                    <span
                                        class="text-[11px] font-semibold text-gray-700 leading-tight">Secure<br>Payments</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="text-[#00875A] shrink-0"><svg class="w-5 h-5" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                                        </svg></div>
                                    <span class="text-[11px] font-semibold text-gray-700 leading-tight">Fast &amp;
                                        Reliable<br>Delivery</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Centered Bottom Pagination Dots with Hover Cursor & Scale -->
            <div class="absolute bottom-3 inset-x-0 flex items-center justify-center gap-2 z-30">
                <button type="button" aria-label="Slide 1"
                    class="hero-dot cursor-pointer p-1 group/dot focus:outline-none">
                    <span
                        class="dot-indicator block w-2.5 h-2.5 rounded-full bg-[#00875A] transition-all duration-300 group-hover/dot:scale-125"></span>
                </button>
                <button type="button" aria-label="Slide 2"
                    class="hero-dot cursor-pointer p-1 group/dot focus:outline-none">
                    <span
                        class="dot-indicator block w-2.5 h-2.5 rounded-full bg-gray-300 group-hover/dot:bg-gray-400 group-hover/dot:scale-125 transition-all duration-300"></span>
                </button>
                <button type="button" aria-label="Slide 3"
                    class="hero-dot cursor-pointer p-1 group/dot focus:outline-none">
                    <span
                        class="dot-indicator block w-2.5 h-2.5 rounded-full bg-gray-300 group-hover/dot:bg-gray-400 group-hover/dot:scale-125 transition-all duration-300"></span>
                </button>
            </div>
        </section>

        <!-- SHOP BY CATEGORY SECTION -->
        <section>
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl sm:text-2xl font-bold text-[#0B1527]">Shop by Category</h2>
                <a href="#all-categories"
                    class="text-sm font-semibold text-[#00875A] hover:underline flex items-center gap-1">
                    <span>View All</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Categories Grid / Responsive Slider -->
            <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-8 gap-3.5">
                <?php foreach ($categories as $cat): ?>
                <a href="#cat"
                    class="group bg-gray-100 border border-gray-100 rounded-2xl p-4 flex flex-col items-center justify-center text-center transition-all">
                    <div
                        class="w-full h-20 rounded-xl bg-gray-50 flex items-center justify-center overflow-hidden mb-3 group-hover:scale-105 transition-transform">
                        <img src="<?= $cat['img'] ?>" alt="<?= $cat['name'] ?>" class="w-full h-full object-cover">
                    </div>
                    <span
                        class="text-xs sm:text-sm font-semibold text-gray-800 group-hover:text-[#008c52] transition-colors leading-tight line-clamp-1">
                        <?= $cat['name'] ?>
                    </span>
                </a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- FEATURED PRODUCTS SECTION -->
        <section>
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl sm:text-2xl font-bold text-[#0B1527]">Featured Products</h2>
                <a href="#all-products"
                    class="text-sm font-semibold text-[#00875A] hover:underline flex items-center gap-1">
                    <span>View All</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <?php foreach ($products as $prod): ?>
                <div
                    class="bg-white rounded-2xl border border-gray-100 hover:border-gray-200 shadow-sm hover:shadow-lg transition-all p-3 flex flex-col justify-between group">

                    <!-- Top Image & Badges -->
                    <div
                        class="relative bg-gray-50 rounded-xl overflow-hidden aspect-square flex items-center justify-center mb-3">
                        <?php if ($prod['badge']): ?>
                        <span
                            class="absolute top-2 left-2 z-10 px-2 py-0.5 rounded text-[11px] font-bold <?= $prod['badge_color'] ?>">
                            <?= $prod['badge'] ?>
                        </span>
                        <?php endif; ?>

                        <!-- Wishlist Icon -->
                        <button
                            class="absolute top-2 right-2 z-10 p-1.5 rounded-full bg-white/90 text-gray-500 hover:text-red-500 transition shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>

                        <img src="<?= $prod['image'] ?>" alt="<?= htmlspecialchars($prod['title']) ?>"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>

                    <!-- Product Info -->
                    <div class="space-y-1">
                        <h3 class="text-sm font-bold text-gray-900 group-hover:text-[#00875A] transition truncate">
                            <?= htmlspecialchars($prod['title']) ?>
                        </h3>
                        <p class="text-[11px] text-gray-500 truncate">
                            <?= htmlspecialchars($prod['subtitle']) ?>
                        </p>

                        <!-- Rating -->
                        <div class="flex items-center gap-1 pt-0.5">
                            <svg class="w-3.5 h-3.5 text-amber-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="text-xs font-bold text-gray-800"><?= $prod['rating'] ?></span>
                            <span class="text-[11px] text-gray-400">(<?= $prod['reviews'] ?>)</span>
                        </div>

                        <!-- Pricing -->
                        <div class="flex items-baseline gap-2 pt-1">
                            <span class="text-base font-extrabold text-gray-900">$<?= $prod['price'] ?></span>
                            <span class="text-xs text-gray-400 line-through">$<?= $prod['old_price'] ?></span>
                        </div>
                    </div>

                    <!-- Add to Cart Button -->
                    <button
                        class="cursor-pointer mt-3 w-full bg-[#008c52] hover:bg-[#007444] text-white py-2 px-3 rounded-lg text-xs font-semibold flex items-center justify-center gap-1.5 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17" />
                        </svg>
                        Add to Cart
                    </button>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ==================== DUAL PROMOTIONAL BANNERS ==================== -->
        <section>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Left Banner: Smartphones -->
                <div
                    class="relative bg-black rounded-3xl p-6 sm:p-8 flex items-center justify-between overflow-hidden shadow-sm text-white">
                    <div class="z-10 max-w-[60%] space-y-2">
                        <span class="text-xs font-semibold text-gray-400">New Arrivals</span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold leading-tight">Latest Smartphones</h3>
                        <p class="text-sm font-semibold text-gray-300 pb-2">Up to 30% Off</p>
                        <a href="#"
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-white text-gray-900 font-semibold text-xs hover:bg-gray-100 transition">
                            Shop Now
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                    <div class="w-1/2 absolute -right-2 top-0 bottom-0 flex items-center">
                        <img src="https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=500&auto=format&fit=crop&q=80"
                            alt="Smartphone Banner" class="h-full w-full object-cover object-left opacity-90">
                    </div>
                </div>

                <!-- Right Banner: Trendy Styles -->
                <div
                    class="relative bg-gradient-to-r from-[#ffeae5] to-[#fde2db] rounded-3xl p-6 sm:p-8 flex items-center justify-between overflow-hidden shadow-sm">
                    <div class="z-10 max-w-[60%] space-y-2 text-[#0d1b2a]">
                        <span class="text-xs font-semibold text-rose-600">Fashion Sale</span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold leading-tight">Trendy Styles</h3>
                        <p class="text-sm font-semibold text-gray-700 pb-2">Up to 50% Off</p>
                        <a href="#"
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-[#008c52] text-white font-semibold text-xs hover:bg-[#007444] transition">
                            Shop Now
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                    <div class="w-1/2 absolute -right-2 top-0 bottom-0 flex items-center">
                        <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?w=500&auto=format&fit=crop&q=80"
                            alt="Fashion Sale" class="h-full w-full object-cover object-left">
                    </div>
                </div>

            </div>
        </section>

        <!-- FEATURED VENDORS SECTION -->
        <section>
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl sm:text-2xl font-bold text-[#0B1527]">Featured Vendors</h2>
                <a href="#all-vendors"
                    class="text-sm font-semibold text-[#00875A] hover:underline flex items-center gap-1">
                    <span>View All</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Vendors Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                <?php foreach ($vendors as $vendor): ?>
                <div
                    class="bg-white rounded-2xl border border-gray-100 p-5 flex flex-col items-center text-center shadow-sm hover:shadow-md transition">

                    <!-- Vendor Avatar / Icon -->
                    <div
                        class="w-12 h-12 rounded-xl <?= $vendor['badge_bg'] ?> flex items-center justify-center font-bold text-base mb-3 shadow-inner">
                        <?php if (!empty($vendor['initials'])): ?>
                        <span><?= $vendor['initials'] ?></span>
                        <?php elseif ($vendor['icon'] === 'home'): ?>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <?php elseif ($vendor['icon'] === 'flower'): ?>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 2a4 4 0 00-4 4v2a4 4 0 008 0V6a4 4 0 00-4-4zM6 10a4 4 0 00-4 4v2a4 4 0 008 0v-2a4 4 0 00-4-4zm12 0a4 4 0 00-4 4v2a4 4 0 008 0v-2a4 4 0 00-4-4z" />
                        </svg>
                        <?php else: ?>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <?php endif; ?>
                    </div>

                    <!-- Names -->
                    <h4 class="text-sm font-bold text-gray-900"><?= htmlspecialchars($vendor['name']) ?></h4>
                    <p class="text-[11px] text-gray-500 mb-2"><?= htmlspecialchars($vendor['category']) ?></p>

                    <!-- Rating & Products -->
                    <div class="flex items-center gap-1 text-xs mb-1">
                        <svg class="w-3.5 h-3.5 text-amber-400 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="font-bold text-gray-800"><?= $vendor['rating'] ?></span>
                        <span class="text-gray-400 text-[11px]">(<?= $vendor['reviews'] ?>)</span>
                    </div>
                    <span class="text-[11px] text-gray-500 font-medium mb-4"><?= $vendor['products_count'] ?></span>

                    <!-- Follow Button -->
                    <button
                        class="w-full border border-gray-200 hover:border-[#00875A] hover:text-[#00875A] text-gray-700 py-1.5 rounded-lg text-xs font-semibold transition">
                        Follow
                    </button>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="bg-[#0B1320] text-gray-400 text-xs mt-10 pt-14 pb-6 border-t border-gray-800">
        <div class="max-w-[1360px] mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-gray-800">

                <!-- Brand Info -->
                <div class="lg:col-span-4 space-y-4">
                    <a href="#" class="flex items-center gap-2">
                        <svg class="h-8 w-auto" viewBox="0 0 460 380" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M140 120 C140 60, 220 60, 220 120" stroke="#00875A" stroke-width="26"
                                stroke-linecap="round" fill="none" />
                            <rect x="70" y="110" width="220" height="230" rx="42" fill="#00875A" />
                            <path d="M125 150 L180 270 L235 150" stroke="#FFFFFF" stroke-width="32"
                                stroke-linecap="round" stroke-linejoin="round" fill="none" />
                        </svg>
                        <span class="text-2xl font-extrabold text-white tracking-tight">Vendora</span>
                    </a>
                    <p class="text-gray-400 text-xs leading-relaxed max-w-sm">
                        Vendora is a multi-vendor marketplace where buyers and sellers come together to create a better
                        shopping experience.
                    </p>
                    <div class="flex items-center gap-3 pt-2 text-gray-400">
                        <!-- Social Icons -->
                        <a href="#"
                            class="w-8 h-8 rounded-full bg-gray-800/80 flex items-center justify-center hover:text-white transition">
                            <span class="font-bold text-xs">f</span>
                        </a>
                        <a href="#"
                            class="w-8 h-8 rounded-full bg-gray-800/80 flex items-center justify-center hover:text-white transition">
                            <span class="font-bold text-xs">ig</span>
                        </a>
                        <a href="#"
                            class="w-8 h-8 rounded-full bg-gray-800/80 flex items-center justify-center hover:text-white transition">
                            <span class="font-bold text-xs">𝕏</span>
                        </a>
                        <a href="#"
                            class="w-8 h-8 rounded-full bg-gray-800/80 flex items-center justify-center hover:text-white transition">
                            <span class="font-bold text-xs">▶</span>
                        </a>
                        <a href="#"
                            class="w-8 h-8 rounded-full bg-gray-800/80 flex items-center justify-center hover:text-white transition">
                            <span class="font-bold text-xs">P</span>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="lg:col-span-2 space-y-3">
                    <h5 class="text-sm font-bold text-white tracking-wide">Quick Links</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition">Home</a></li>
                        <li><a href="#shop" class="hover:text-white transition">Shop</a></li>
                        <li><a href="#vendors" class="hover:text-white transition">Vendors</a></li>
                        <li><a href="#deals" class="hover:text-white transition">Deals</a></li>
                        <li><a href="#about" class="hover:text-white transition">About Us</a></li>
                        <li><a href="#contact" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <!-- Customer Service -->
                <div class="lg:col-span-2 space-y-3">
                    <h5 class="text-sm font-bold text-white tracking-wide">Customer Service</h5>
                    <ul class="space-y-2">
                        <li><a href="#help" class="hover:text-white transition">Help Center</a></li>
                        <li><a href="#shipping" class="hover:text-white transition">Shipping Info</a></li>
                        <li><a href="#returns" class="hover:text-white transition">Return Policy</a></li>
                        <li><a href="#track" class="hover:text-white transition">Track Order</a></li>
                        <li><a href="#faq" class="hover:text-white transition">FAQ</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div class="lg:col-span-2 space-y-3">
                    <h5 class="text-sm font-bold text-white tracking-wide">Legal</h5>
                    <ul class="space-y-2">
                        <li><a href="#terms" class="hover:text-white transition">Terms & Conditions</a></li>
                        <li><a href="#privacy" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#cookie" class="hover:text-white transition">Cookie Policy</a></li>
                    </ul>
                </div>

                <!-- Subscribe to Our Newsletter -->
                <div class="lg:col-span-2 space-y-3">
                    <h5 class="text-sm font-bold text-white tracking-wide">Subscribe to Our Newsletter</h5>
                    <p class="text-gray-400 text-xs">Get the latest updates and offers.</p>
                    <form action="#" method="POST" class="space-y-2">
                        <input type="email" placeholder="Your email address"
                            class="w-full bg-[#182232] border border-gray-700/60 rounded-lg px-3.5 py-2 text-xs text-white placeholder-gray-500 focus:outline-none focus:border-[#00875A]">
                        <button type="submit"
                            class="w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold py-2 rounded-lg text-xs transition">
                            Subscribe
                        </button>
                    </form>
                </div>

            </div>

            <!-- Bottom Copyright -->
            <div class="pt-6 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-500 gap-2">
                <p>&copy; <?= date('Y') ?> Vendora. All rights reserved.</p>
            </div>
        </div>
    </footer>


    <!-- MOBILE BOTTOM NAVIGATION BAR -->
    <div
        class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 z-50 px-4 py-2 flex items-center justify-around shadow-lg">
        <a href="#" class="flex flex-col items-center gap-0.5 text-[#00875A]">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
            <span class="text-[10px] font-bold">Home</span>
        </a>

        <a href="#shop" class="flex flex-col items-center gap-0.5 text-gray-500 hover:text-[#00875A]">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
            <span class="text-[10px] font-semibold">Shop</span>
        </a>

        <a href="#vendors" class="flex flex-col items-center gap-0.5 text-gray-500 hover:text-[#00875A]">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
            <span class="text-[10px] font-semibold">Vendors</span>
        </a>

        <a href="#orders" class="flex flex-col items-center gap-1 text-gray-500 hover:text-[#00875A] transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            <span class="text-[10px] font-semibold">Orders</span>
        </a>

        <a href="#account" class="flex flex-col items-center gap-1 text-gray-500 hover:text-[#00875A] transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <span class="text-[10px] font-semibold">Account</span>
        </a>

        {{-- <a href="#deals" class="flex flex-col items-center gap-0.5 text-gray-500 hover:text-[#00875A]">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
            </svg>
            <span class="text-[10px] font-semibold">Deals</span>
        </a>

        <a href="#more" class="flex flex-col items-center gap-0.5 text-gray-500 hover:text-[#00875A]">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
            </svg>
            <span class="text-[10px] font-semibold">More</span>
        </a> --}}
    </div>

    <!-- ==================== TRUE INFINITE LOOP CAROUSEL & SWIPER ==================== -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const track = document.getElementById("sliderTrack");
            const slider = document.getElementById("heroSlider");
            const dots = slider.querySelectorAll(".hero-dot");
            const dotIndicators = slider.querySelectorAll(".dot-indicator");
            const originalSlides = Array.from(track.querySelectorAll(".hero-slide"));
            const totalOriginalSlides = originalSlides.length;

            if (totalOriginalSlides === 0) return;

            // 1. Create Infinite Clones (First to end, Last to beginning)
            const firstClone = originalSlides[0].cloneNode(true);
            const lastClone = originalSlides[totalOriginalSlides - 1].cloneNode(true);
            firstClone.classList.add("clone");
            lastClone.classList.add("clone");

            track.appendChild(firstClone);
            track.insertBefore(lastClone, originalSlides[0]);

            // We start on real slide 1 (Index 1)
            let currentIndex = 1;
            let isTransitioning = false;
            let autoPlayTimer = null;
            const slideDuration = 700; // ms

            // Position track initially without animation
            function setTrackPosition(animate = true) {
                if (animate) {
                    track.style.transition = `transform ${slideDuration}ms cubic-bezier(0.25, 1, 0.5, 1)`;
                } else {
                    track.style.transition = "none";
                }
                track.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            setTrackPosition(false);

            // Update Dots UI
            function updateDots() {
                // Map clone indices to real dot index (0, 1, or 2)
                let realIndex = currentIndex - 1;
                if (realIndex < 0) realIndex = totalOriginalSlides - 1;
                if (realIndex >= totalOriginalSlides) realIndex = 0;

                dotIndicators.forEach((dot, idx) => {
                    if (idx === realIndex) {
                        dot.className =
                            "dot-indicator block w-2.5 h-2.5 rounded-full bg-[#00875A] scale-110 transition-all duration-300";
                    } else {
                        dot.className =
                            "dot-indicator block w-2.5 h-2.5 rounded-full bg-gray-300 group-hover/dot:bg-gray-400 group-hover/dot:scale-125 transition-all duration-300";
                    }
                });
            }

            // Go to next slide (Smooth continuous loop)
            function nextSlide() {
                if (isTransitioning) return;
                isTransitioning = true;
                currentIndex++;
                setTrackPosition(true);
                updateDots();
            }

            // Go to prev slide
            function prevSlide() {
                if (isTransitioning) return;
                isTransitioning = true;
                currentIndex--;
                setTrackPosition(true);
                updateDots();
            }

            // Seamless Snap Reset on Transition End
            track.addEventListener("transitionend", () => {
                isTransitioning = false;
                // Reached cloned first slide -> instantly snap to real first slide
                if (currentIndex === totalOriginalSlides + 1) {
                    currentIndex = 1;
                    setTrackPosition(false);
                }
                // Reached cloned last slide -> instantly snap to real last slide
                else if (currentIndex === 0) {
                    currentIndex = totalOriginalSlides;
                    setTrackPosition(false);
                }
            });

            // Auto Play Interval
            function startAutoPlay() {
                stopAutoPlay();
                autoPlayTimer = setInterval(nextSlide, 5000);
            }

            function stopAutoPlay() {
                if (autoPlayTimer) {
                    clearInterval(autoPlayTimer);
                    autoPlayTimer = null;
                }
            }

            // Click on Dots
            dots.forEach((dot, index) => {
                dot.addEventListener("click", () => {
                    if (isTransitioning) return;
                    currentIndex = index + 1;
                    setTrackPosition(true);
                    updateDots();
                    startAutoPlay();
                });
            });

            // Pause Auto Play on Hover
            slider.addEventListener("mouseenter", stopAutoPlay);
            slider.addEventListener("mouseleave", startAutoPlay);

            // ================= Touch & Mouse Drag Swiping =================
            let startX = 0;
            let moveX = 0;
            let isDragging = false;

            function handleDragStart(x) {
                if (isTransitioning) return;
                stopAutoPlay();
                startX = x;
                moveX = 0;
                isDragging = true;
            }

            function handleDragMove(x) {
                if (!isDragging) return;
                moveX = x;
            }

            function handleDragEnd() {
                if (!isDragging) return;
                isDragging = false;
                const diff = startX - moveX;
                if (moveX !== 0 && Math.abs(diff) > 40) {
                    if (diff > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                }
                startX = 0;
                moveX = 0;
                startAutoPlay();
            }

            // Touch events (Mobile)
            slider.addEventListener("touchstart", (e) => handleDragStart(e.touches[0].clientX), {
                passive: true
            });
            slider.addEventListener("touchmove", (e) => handleDragMove(e.touches[0].clientX), {
                passive: true
            });
            slider.addEventListener("touchend", handleDragEnd);

            // Mouse drag events (Desktop)
            slider.addEventListener("mousedown", (e) => {
                if (e.target.closest("button") || e.target.closest("a")) return;
                handleDragStart(e.clientX);
            });
            window.addEventListener("mousemove", (e) => handleDragMove(e.clientX));
            window.addEventListener("mouseup", handleDragEnd);

            // Start
            updateDots();
            startAutoPlay();
        });
    </script>

</body>

</html>
