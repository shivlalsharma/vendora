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
            'id' => 1,
            'title' => 'Wireless Headphones',
            'subtitle' => 'Premium Sound Quality',
            'vendor' => 'TechWorld',
            'price' => '59.99',
            'old_price' => '89.99',
            'rating' => '4.5',
            'reviews' => '120',
            'badge' => 'Best Seller',
            'badge_color' => 'bg-[#00875A] text-white',
            'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&auto=format&fit=crop&q=80',
        ],
        [
            'id' => 2,
            'title' => 'Smart Watch',
            'subtitle' => 'Fitness & Health Tracker',
            'vendor' => 'TechWorld',
            'price' => '79.99',
            'old_price' => '99.99',
            'rating' => '4.3',
            'reviews' => '89',
            'badge' => '-20%',
            'badge_color' => 'bg-[#FF4D4D] text-white',
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&auto=format&fit=crop&q=80',
        ],
        [
            'id' => 3,
            'title' => 'Running Shoes',
            'subtitle' => 'Comfortable & Stylish',
            'vendor' => 'FashionHub',
            'price' => '49.99',
            'old_price' => '69.99',
            'rating' => '4.6',
            'reviews' => '200',
            'badge' => null,
            'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&auto=format&fit=crop&q=80',
        ],
        [
            'id' => 4,
            'title' => 'Travel Backpack',
            'subtitle' => 'Water Resistant',
            'vendor' => 'HomeEssentials',
            'price' => '34.99',
            'old_price' => '49.99',
            'rating' => '4.7',
            'reviews' => '156',
            'badge' => null,
            'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&auto=format&fit=crop&q=80',
        ],
        [
            'id' => 5,
            'title' => 'Air Fryer',
            'subtitle' => 'Healthy Cooking Made Easy',
            'vendor' => 'HomeEssentials',
            'price' => '84.99',
            'old_price' => '99.99',
            'rating' => '4.4',
            'reviews' => '98',
            'badge' => '-15%',
            'badge_color' => 'bg-[#FF4D4D] text-white',
            'image' => 'https://images.unsplash.com/photo-1585515320310-259814833e62?w=400&auto=format&fit=crop&q=80',
        ],
        [
            'id' => 6,
            'title' => 'Skincare Set',
            'subtitle' => 'Natural & Organic',
            'vendor' => 'BeautyStore',
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
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/custom-scrollbar.css'])
</head>

<body class="text-gray-800 antialiased pb-12 lg:pb-0 relative">

    <!-- DESKTOP TOP HEADER -->
    <header class="w-full bg-white border-b border-gray-100 hidden lg:block sticky top-0 z-40">
        <div class="max-w-[1360px] mx-auto px-4 sm:px-6 py-3.5 flex items-center justify-between gap-6">

            <!-- Logo -->
            <a href="#" class="flex items-center gap-2 flex-shrink-0">
                <img src="{{ asset('assets/images/logo.webp') }}" class="h-14 w-full" alt="Vendora">
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

                <!-- Notifications -->
                <a href="#notifications" class="relative p-1 text-gray-600 hover:text-[#00875A] transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span
                        class="absolute -top-1 -right-1.5 bg-[#EF4444] text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-xs">3</span>
                </a>

                <!-- Wishlist -->
                <a href="#wishlist" id="wishlistHeaderTrigger"
                    class="relative p-1 text-gray-600 hover:text-[#00875A] transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <span
                        class="absolute -top-1 -right-1.5 bg-[#EF4444] text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-xs">3</span>
                </a>

                <!-- Cart Button (Trigger Drawer) -->
                <button type="button" id="cartHeaderTrigger"
                    class="relative p-1 text-gray-600 hover:text-[#00875A] transition cursor-pointer focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span id="cartCountBadge"
                        class="absolute -top-1 -right-1.5 bg-[#00875A] text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-xs">3</span>
                </button>
            </div>
        </div>
    </header>

    <!-- DESKTOP NAVIGATION BAR -->
    <nav class="w-full bg-white border-b border-gray-100 hidden lg:block">
        <div class="max-w-[1360px] mx-auto px-4 sm:px-6 flex items-center gap-8 text-sm font-semibold">
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
                    <img src="{{ asset('assets/images/logo.webp') }}" class="h-10 w-full" alt="Vendora">
                </a>
            </div>
            <div class="flex items-center gap-4 text-gray-700">
                <button aria-label="Search" class="cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg>
                </button>

                <!-- Notifications -->
                <a href="#notifications" aria-label="Notifications" class="relative">
                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span
                        class="absolute -top-1.5 -right-2 bg-[#EF4444] text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">3</span>
                </a>

                <!-- Wishlist -->
                <a href="#wishlist" id="wishlistMobileTrigger" aria-label="Wishlist" class="relative">
                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <span
                        class="absolute -top-1.5 -right-2 bg-[#EF4444] text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">3</span>
                </a>

                <!-- Cart Button (Mobile Trigger) -->
                <button type="button" id="cartMobileTrigger" class="relative cursor-pointer focus:outline-none">
                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span
                        class="absolute -top-1.5 -right-2 bg-[#00875A] text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">3</span>
                </button>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT CONTAINER -->
    <main class="max-w-[1360px] mx-auto px-4 sm:px-6 py-4 lg:py-6 space-y-12">

        <!-- HERO SECTION -->
        <section id="heroSlider"
            class="relative rounded-sm overflow-hidden select-none border border-gray-200/80 shadow-xs group">
            <div id="sliderTrack" class="flex w-full will-change-transform">
                <!-- Slide 1 -->
                <div
                    class="hero-slide relative w-full flex-shrink-0 min-h-[380px] sm:min-h-[420px] lg:min-h-[460px] flex items-center bg-[#EDF6F1]">
                    <img src="{{ asset('assets/images/hero-1.webp') }}" alt="Vendora Marketplace Tabletop"
                        class="absolute inset-0 w-full h-full object-cover object-right pointer-events-none" />
                </div>
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

                    <div
                        class="relative bg-gray-50 rounded-xl overflow-hidden aspect-square flex items-center justify-center mb-3">
                        <?php if ($prod['badge']): ?>
                        <span
                            class="absolute top-2 left-2 z-10 px-2 py-0.5 rounded text-[11px] font-bold <?= $prod['badge_color'] ?>">
                            <?= $prod['badge'] ?>
                        </span>
                        <?php endif; ?>

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

                    <div class="space-y-1">
                        <h3 class="text-sm font-bold text-gray-900 group-hover:text-[#00875A] transition truncate">
                            <?= htmlspecialchars($prod['title']) ?>
                        </h3>
                        <p class="text-[11px] text-gray-500 truncate">
                            <?= htmlspecialchars($prod['subtitle']) ?>
                        </p>

                        <div class="flex items-center gap-1 pt-0.5">
                            <svg class="w-3.5 h-3.5 text-amber-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="text-xs font-bold text-gray-800"><?= $prod['rating'] ?></span>
                            <span class="text-[11px] text-gray-400">(<?= $prod['reviews'] ?>)</span>
                        </div>

                        <div class="flex items-baseline gap-2 pt-1">
                            <span class="text-base font-extrabold text-gray-900">$<?= $prod['price'] ?></span>
                            <span class="text-xs text-gray-400 line-through">$<?= $prod['old_price'] ?></span>
                        </div>
                    </div>

                    <!-- Trigger Smooth Cart Drawer -->
                    <button type="button"
                        class="add-to-cart-btn cursor-pointer mt-3 w-full bg-[#008c52] hover:bg-[#007444] text-white py-2 px-3 rounded-lg text-xs font-semibold flex items-center justify-center gap-1.5 transition duration-150 active:scale-95">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17" />
                        </svg>
                        <span>Add to Cart</span>
                    </button>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

    </main>
    <!-- ========================================================================= -->
    <!-- WISHLIST SIDEBAR DRAWER (EXACT REPLICA OF ATTACHED SCREENSHOT) -->
    <!-- ========================================================================= -->

    <!-- Backdrop Overlay for Wishlist -->
    <div id="wishlistBackdrop"
        class="fixed inset-0 bg-black/50 backdrop-blur-xs z-[99] opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out">
    </div>

    <!-- Wishlist Drawer (Slides from Right) -->
    <aside id="wishlistDrawer"
        class="fixed top-0 bottom-0 right-0 w-full sm:w-[420px] bg-white z-[100] shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col justify-between overflow-hidden">

        <!-- Top Header -->
        <div class="px-5 py-4 border-b border-gray-100 flex items-start justify-between">
            <div>
                <div class="flex items-center gap-2">
                    <!-- Red Heart Icon -->
                    <svg class="w-5 h-5 text-red-500 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                    </svg>
                    <h2 class="text-base sm:text-lg font-bold text-gray-900 tracking-tight">My Wishlist (5)</h2>
                </div>
                <p class="text-xs text-gray-500 mt-1">Your saved items for later. Don't miss out!</p>
            </div>

            <!-- Right Side: Close & More Options -->
            <div class="flex flex-col items-end gap-2">
                <button id="closeWishlistBtn" type="button" aria-label="Close wishlist"
                    class="p-1 text-gray-400 hover:text-gray-700 rounded-lg hover:bg-gray-100 transition cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <button type="button" title="More options"
                    class="text-gray-400 hover:text-gray-600 transition px-1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <circle cx="5" cy="12" r="2" />
                        <circle cx="12" cy="12" r="2" />
                        <circle cx="19" cy="12" r="2" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Scrollable Middle Body with Thin Colored Scrollbar -->
        <div class="flex-1 overflow-y-auto px-5 py-2 divide-y divide-gray-100 custom-scrollbar">

            <!-- Wishlist Item 1: Wireless Headphones -->
            <div class="group py-4 flex gap-3.5 items-start justify-between">
                <!-- Thumbnail with hover scale & overflow hidden -->
                <div
                    class="w-[82px] h-[82px] rounded-xl bg-amber-400 overflow-hidden flex-shrink-0 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&auto=format&fit=crop&q=80"
                        alt="Wireless Headphones"
                        class="w-full h-full object-cover mix-blend-multiply transition-transform duration-300 ease-out group-hover:scale-110">
                </div>

                <!-- Details -->
                <div class="flex-1 min-w-0 pr-2">
                    <h4
                        class="text-[13px] font-bold text-gray-900 leading-snug truncate group-hover:text-[#00875A] transition-colors">
                        Wireless Headphones
                    </h4>
                    <p class="text-[11px] text-gray-500 truncate">Premium Sound Quality</p>
                    <p class="text-[11px] text-gray-400">Vendor: TechWorld</p>

                    <!-- Rating -->
                    <div class="flex items-center gap-1 mt-0.5">
                        <svg class="w-3.5 h-3.5 text-amber-400 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="text-xs font-bold text-gray-800">4.5</span>
                        <span class="text-[11px] text-gray-400">(120)</span>
                    </div>

                    <!-- Price & In Stock Row -->
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm font-extrabold text-gray-900">$59.99</span>
                        <span class="text-xs text-gray-400 line-through font-normal">$89.99</span>
                        <div class="flex items-center gap-1 text-[11px] font-semibold text-[#00875A] ml-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#00875A]"></span>
                            <span>In Stock</span>
                        </div>
                    </div>

                    <!-- Buttons Row -->
                    <div class="flex items-center gap-2 mt-2.5">
                        <button type="button"
                            class="add-to-cart-from-wishlist bg-[#00875A] hover:bg-[#00744D] text-white text-xs font-bold py-1.5 px-3 rounded-lg flex items-center gap-1.5 transition duration-150 cursor-pointer">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17" />
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                        <a href="#view"
                            class="border border-gray-200 hover:border-gray-300 text-gray-700 text-xs font-semibold py-1.5 px-3 rounded-lg hover:bg-gray-50 transition">
                            View Product
                        </a>
                    </div>
                </div>

                <!-- Remove Button -->
                <button type="button" class="text-gray-400 hover:text-red-500 transition p-1 cursor-pointer"
                    title="Remove from wishlist">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </div>

            <!-- Wishlist Item 2: Running Shoes -->
            <div class="group py-4 flex gap-3.5 items-start justify-between">
                <div
                    class="w-[82px] h-[82px] rounded-xl bg-red-600 overflow-hidden flex-shrink-0 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=200&auto=format&fit=crop&q=80"
                        alt="Running Shoes"
                        class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-110">
                </div>

                <div class="flex-1 min-w-0 pr-2">
                    <h4
                        class="text-[13px] font-bold text-gray-900 leading-snug truncate group-hover:text-[#00875A] transition-colors">
                        Running Shoes
                    </h4>
                    <p class="text-[11px] text-gray-500 truncate">Comfortable & Stylish</p>
                    <p class="text-[11px] text-gray-400">Vendor: FashionHub</p>

                    <div class="flex items-center gap-1 mt-0.5">
                        <svg class="w-3.5 h-3.5 text-amber-400 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="text-xs font-bold text-gray-800">4.6</span>
                        <span class="text-[11px] text-gray-400">(200)</span>
                    </div>

                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm font-extrabold text-gray-900">$49.99</span>
                        <span class="text-xs text-gray-400 line-through font-normal">$69.99</span>
                        <div class="flex items-center gap-1 text-[11px] font-semibold text-[#00875A] ml-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#00875A]"></span>
                            <span>In Stock</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 mt-2.5">
                        <button type="button"
                            class="add-to-cart-from-wishlist bg-[#00875A] hover:bg-[#00744D] text-white text-xs font-bold py-1.5 px-3 rounded-lg flex items-center gap-1.5 transition duration-150 cursor-pointer">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17" />
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                        <a href="#view"
                            class="border border-gray-200 hover:border-gray-300 text-gray-700 text-xs font-semibold py-1.5 px-3 rounded-lg hover:bg-gray-50 transition">
                            View Product
                        </a>
                    </div>
                </div>

                <button type="button" class="text-gray-400 hover:text-red-500 transition p-1 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </div>

            <!-- Wishlist Item 3: Travel Backpack -->
            <div class="group py-4 flex gap-3.5 items-start justify-between">
                <div
                    class="w-[82px] h-[82px] rounded-xl bg-slate-800 overflow-hidden flex-shrink-0 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=200&auto=format&fit=crop&q=80"
                        alt="Travel Backpack"
                        class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-110">
                </div>

                <div class="flex-1 min-w-0 pr-2">
                    <h4
                        class="text-[13px] font-bold text-gray-900 leading-snug truncate group-hover:text-[#00875A] transition-colors">
                        Travel Backpack
                    </h4>
                    <p class="text-[11px] text-gray-500 truncate">Water Resistant</p>
                    <p class="text-[11px] text-gray-400">Vendor: HomeEssentials</p>

                    <div class="flex items-center gap-1 mt-0.5">
                        <svg class="w-3.5 h-3.5 text-amber-400 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="text-xs font-bold text-gray-800">4.7</span>
                        <span class="text-[11px] text-gray-400">(156)</span>
                    </div>

                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm font-extrabold text-gray-900">$34.99</span>
                        <span class="text-xs text-gray-400 line-through font-normal">$49.99</span>
                        <div class="flex items-center gap-1 text-[11px] font-semibold text-[#00875A] ml-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#00875A]"></span>
                            <span>In Stock</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 mt-2.5">
                        <button type="button"
                            class="add-to-cart-from-wishlist bg-[#00875A] hover:bg-[#00744D] text-white text-xs font-bold py-1.5 px-3 rounded-lg flex items-center gap-1.5 transition duration-150 cursor-pointer">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17" />
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                        <a href="#view"
                            class="border border-gray-200 hover:border-gray-300 text-gray-700 text-xs font-semibold py-1.5 px-3 rounded-lg hover:bg-gray-50 transition">
                            View Product
                        </a>
                    </div>
                </div>

                <button type="button" class="text-gray-400 hover:text-red-500 transition p-1 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </div>

            <!-- Wishlist Item 4: Air Fryer -->
            <div class="group py-4 flex gap-3.5 items-start justify-between">
                <div
                    class="w-[82px] h-[82px] rounded-xl bg-sky-200 overflow-hidden flex-shrink-0 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1585515320310-259814833e62?w=200&auto=format&fit=crop&q=80"
                        alt="Air Fryer"
                        class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-110">
                </div>

                <div class="flex-1 min-w-0 pr-2">
                    <h4
                        class="text-[13px] font-bold text-gray-900 leading-snug truncate group-hover:text-[#00875A] transition-colors">
                        Air Fryer
                    </h4>
                    <p class="text-[11px] text-gray-500 truncate">Healthy Cooking Made Easy</p>
                    <p class="text-[11px] text-gray-400">Vendor: HomeEssentials</p>

                    <div class="flex items-center gap-1 mt-0.5">
                        <svg class="w-3.5 h-3.5 text-amber-400 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="text-xs font-bold text-gray-800">4.4</span>
                        <span class="text-[11px] text-gray-400">(98)</span>
                    </div>

                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm font-extrabold text-gray-900">$84.99</span>
                        <span class="text-xs text-gray-400 line-through font-normal">$99.99</span>
                        <div class="flex items-center gap-1 text-[11px] font-semibold text-[#00875A] ml-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#00875A]"></span>
                            <span>In Stock</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 mt-2.5">
                        <button type="button"
                            class="add-to-cart-from-wishlist bg-[#00875A] hover:bg-[#00744D] text-white text-xs font-bold py-1.5 px-3 rounded-lg flex items-center gap-1.5 transition duration-150 cursor-pointer">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17" />
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                        <a href="#view"
                            class="border border-gray-200 hover:border-gray-300 text-gray-700 text-xs font-semibold py-1.5 px-3 rounded-lg hover:bg-gray-50 transition">
                            View Product
                        </a>
                    </div>
                </div>

                <button type="button" class="text-gray-400 hover:text-red-500 transition p-1 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </div>

            <!-- Wishlist Item 5: Skincare Set -->
            <div class="group py-4 flex gap-3.5 items-start justify-between">
                <div
                    class="w-[82px] h-[82px] rounded-xl bg-purple-100 overflow-hidden flex-shrink-0 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=200&auto=format&fit=crop&q=80"
                        alt="Skincare Set"
                        class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-110">
                </div>

                <div class="flex-1 min-w-0 pr-2">
                    <h4
                        class="text-[13px] font-bold text-gray-900 leading-snug truncate group-hover:text-[#00875A] transition-colors">
                        Skincare Set
                    </h4>
                    <p class="text-[11px] text-gray-500 truncate">Natural & Organic</p>
                    <p class="text-[11px] text-gray-400">Vendor: BeautyStore</p>

                    <div class="flex items-center gap-1 mt-0.5">
                        <svg class="w-3.5 h-3.5 text-amber-400 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="text-xs font-bold text-gray-800">4.8</span>
                        <span class="text-[11px] text-gray-400">(143)</span>
                    </div>

                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm font-extrabold text-gray-900">$29.99</span>
                        <span class="text-xs text-gray-400 line-through font-normal">$39.99</span>
                        <div class="flex items-center gap-1 text-[11px] font-semibold text-[#00875A] ml-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#00875A]"></span>
                            <span>In Stock</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 mt-2.5">
                        <button type="button"
                            class="add-to-cart-from-wishlist bg-[#00875A] hover:bg-[#00744D] text-white text-xs font-bold py-1.5 px-3 rounded-lg flex items-center gap-1.5 transition duration-150 cursor-pointer">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17" />
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                        <a href="#view"
                            class="border border-gray-200 hover:border-gray-300 text-gray-700 text-xs font-semibold py-1.5 px-3 rounded-lg hover:bg-gray-50 transition">
                            View Product
                        </a>
                    </div>
                </div>

                <button type="button" class="text-gray-400 hover:text-red-500 transition p-1 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </div>

        </div>

    </aside>

    <!-- ========================================================================= -->
    <!-- BOTTOM-LEFT "ADDED TO WISHLIST" TOAST NOTIFICATION (FROM SCREENSHOT) -->
    <!-- ========================================================================= -->
    <div id="wishlistToast"
        class="fixed bottom-6 left-6 z-[110] bg-white border border-gray-100 shadow-2xl rounded-2xl p-3 sm:p-3.5 flex items-center gap-3.5 max-w-sm transition-all duration-300 transform translate-y-24 opacity-0 pointer-events-none">

        <!-- Green Checkmark Icon -->
        <div class="w-7 h-7 rounded-full bg-[#00875A] text-white flex items-center justify-center shrink-0">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
        </div>

        <!-- Product Image Thumbnail -->
        <div class="w-10 h-10 rounded-lg bg-red-600 overflow-hidden flex-shrink-0">
            <img id="toastProductImg"
                src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=100&auto=format&fit=crop&q=80"
                alt="Product" class="w-full h-full object-cover">
        </div>

        <!-- Copy -->
        <div class="flex-1 min-w-0 pr-1">
            <h5 class="text-xs font-bold text-gray-900 leading-tight">Added to Wishlist</h5>
            <p id="toastProductText" class="text-[11px] text-gray-500 truncate mt-0.5">
                Running Shoes has been added to your wishlist.
            </p>
        </div>

        <!-- Close Toast -->
        <button id="closeToastBtn" type="button" class="text-gray-400 hover:text-gray-700 p-1 cursor-pointer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- ========================================================================= -->
    <!-- SLIDE-OVER CART SIDEBAR DRAWER (EXACT REPLICA OF ATTACHED SCREENSHOT) -->
    <!-- ========================================================================= -->

    <!-- Backdrop Overlay with Fade Animation -->
    <div id="cartBackdrop"
        class="fixed inset-0 bg-black/50 backdrop-blur-xs z-[99] opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out">
    </div>

    <!-- Right Drawer with Smooth Slide Transition -->
    <aside id="cartDrawer"
        class="fixed top-0 bottom-0 right-0 w-full sm:w-[350px] bg-white z-[100] shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col justify-between overflow-hidden">

        <!-- Top Header -->
        <div class="px-5 py-4 flex items-center justify-between border-b border-gray-100">
            <div class="flex items-center gap-2.5">
                <svg class="w-5 h-5 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                </svg>
                <h2 class="text-base sm:text-lg font-bold text-gray-900 tracking-tight">Your Cart (3)</h2>
            </div>

            <!-- Close Button -->
            <button id="closeCartBtn" type="button" aria-label="Close cart"
                class="p-1.5 text-gray-400 hover:text-gray-700 rounded-lg hover:bg-gray-100 transition cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Scrollable Middle Body with Thin Colored Scrollbar -->
        <div class="flex-1 overflow-y-auto px-5 py-4 space-y-4 divide-y divide-gray-100 custom-scrollbar">

            <!-- Success Notification Alert -->
            <div
                class="bg-[#EAF7EE] border border-[#D5EFE0] rounded-xl px-3.5 py-2.5 flex items-center gap-2.5 text-[#00875A]">
                <div class="w-5 h-5 rounded-full bg-[#00875A] text-white flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <span class="text-xs font-semibold leading-tight text-[#00875A]">Product added to cart
                    successfully!</span>
            </div>

            <!-- Cart Item 1: Wireless Headphones -->
            <div class="group pt-4 flex gap-3.5 items-start justify-between transition-colors">
                <!-- Image Box with overflow-hidden -->
                <div
                    class="w-[78px] h-[78px] rounded-xl bg-amber-400 overflow-hidden flex-shrink-0 flex items-center justify-center">
                    <!-- Image with smooth zoom on card hover -->
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&auto=format&fit=crop&q=80"
                        alt="Wireless Headphones"
                        class="w-full h-full object-cover mix-blend-multiply transition-transform duration-300 ease-out group-hover:scale-110">
                </div>

                <!-- Product Details -->
                <div class="flex-1 min-w-0 pr-2">
                    <h4
                        class="text-[13px] font-bold text-gray-900 leading-snug truncate group-hover:text-[#00875A] transition-colors">
                        Wireless Headphones</h4>
                    <p class="text-[11px] text-gray-500 truncate">Premium Sound Quality</p>
                    <p class="text-[11px] text-gray-400">Vendor: TechWorld</p>

                    <!-- Price & Qty Row -->
                    <div class="flex items-center gap-2 mt-1.5">
                        <span class="text-sm font-extrabold text-gray-900">$59.99</span>
                        <span class="text-xs text-gray-400 line-through font-normal">$89.99</span>
                    </div>

                    <!-- Quantity Counter -->
                    <div class="inline-flex items-center border border-gray-200 rounded-md mt-2 h-7 bg-white">
                        <button type="button"
                            class="px-2.5 text-xs text-gray-500 hover:text-black font-semibold h-full cursor-pointer">−</button>
                        <span class="px-2 text-xs font-bold text-gray-800">1</span>
                        <button type="button"
                            class="px-2.5 text-xs text-gray-500 hover:text-black font-semibold h-full cursor-pointer">+</button>
                    </div>
                </div>

                <!-- Right Actions -->
                <div class="flex flex-col justify-between items-end h-[78px] text-gray-400">
                    <button type="button" class="hover:text-red-500 transition cursor-pointer p-0.5"
                        title="Add to Wishlist">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                    <button type="button" class="hover:text-gray-700 transition cursor-pointer p-0.5"
                        title="Remove item">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Cart Item 2: Running Shoes -->
            <div class="group pt-4 flex gap-3.5 items-start justify-between transition-colors">
                <!-- Image Box with overflow-hidden -->
                <div
                    class="w-[78px] h-[78px] rounded-xl bg-red-600 overflow-hidden flex-shrink-0 flex items-center justify-center">
                    <!-- Image with smooth zoom on card hover -->
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=200&auto=format&fit=crop&q=80"
                        alt="Running Shoes"
                        class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-110">
                </div>

                <!-- Product Details -->
                <div class="flex-1 min-w-0 pr-2">
                    <h4
                        class="text-[13px] font-bold text-gray-900 leading-snug truncate group-hover:text-[#00875A] transition-colors">
                        Running Shoes</h4>
                    <p class="text-[11px] text-gray-500 truncate">Comfortable & Stylish</p>
                    <p class="text-[11px] text-gray-400">Vendor: FashionHub</p>

                    <div class="flex items-center gap-2 mt-1.5">
                        <span class="text-sm font-extrabold text-gray-900">$49.99</span>
                        <span class="text-xs text-gray-400 line-through font-normal">$69.99</span>
                    </div>

                    <div class="inline-flex items-center border border-gray-200 rounded-md mt-2 h-7 bg-white">
                        <button type="button"
                            class="px-2.5 text-xs text-gray-500 hover:text-black font-semibold h-full cursor-pointer">−</button>
                        <span class="px-2 text-xs font-bold text-gray-800">1</span>
                        <button type="button"
                            class="px-2.5 text-xs text-gray-500 hover:text-black font-semibold h-full cursor-pointer">+</button>
                    </div>
                </div>

                <!-- Right Actions -->
                <div class="flex flex-col justify-between items-end h-[78px] text-gray-400">
                    <button type="button" class="hover:text-red-500 transition cursor-pointer p-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                    <button type="button" class="hover:text-gray-700 transition cursor-pointer p-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Cart Item 3: Travel Backpack -->
            <div class="group pt-4 flex gap-3.5 items-start justify-between transition-colors">
                <!-- Image Box with overflow-hidden -->
                <div
                    class="w-[78px] h-[78px] rounded-xl bg-slate-800 overflow-hidden flex-shrink-0 flex items-center justify-center">
                    <!-- Image with smooth zoom on card hover -->
                    <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=200&auto=format&fit=crop&q=80"
                        alt="Travel Backpack"
                        class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-110">
                </div>

                <!-- Product Details -->
                <div class="flex-1 min-w-0 pr-2">
                    <h4
                        class="text-[13px] font-bold text-gray-900 leading-snug truncate group-hover:text-[#00875A] transition-colors">
                        Travel Backpack</h4>
                    <p class="text-[11px] text-gray-500 truncate">Water Resistant</p>
                    <p class="text-[11px] text-gray-400">Vendor: HomeEssentials</p>

                    <div class="flex items-center gap-2 mt-1.5">
                        <span class="text-sm font-extrabold text-gray-900">$34.99</span>
                        <span class="text-xs text-gray-400 line-through font-normal">$49.99</span>
                    </div>

                    <div class="inline-flex items-center border border-gray-200 rounded-md mt-2 h-7 bg-white">
                        <button type="button"
                            class="px-2.5 text-xs text-gray-500 hover:text-black font-semibold h-full cursor-pointer">−</button>
                        <span class="px-2 text-xs font-bold text-gray-800">1</span>
                        <button type="button"
                            class="px-2.5 text-xs text-gray-500 hover:text-black font-semibold h-full cursor-pointer">+</button>
                    </div>
                </div>

                <!-- Right Actions -->
                <div class="flex flex-col justify-between items-end h-[78px] text-gray-400">
                    <button type="button" class="hover:text-red-500 transition cursor-pointer p-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                    <button type="button" class="hover:text-gray-700 transition cursor-pointer p-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>

        <!-- Bottom Fixed Summary & Checkout Buttons -->
        <div class="border-t border-gray-100 p-5 bg-white space-y-3.5">

            <!-- Promo Code Accordion -->
            <div class="border-b border-gray-100 pb-3">
                <!-- Promo Trigger Header -->
                <button type="button" id="promoToggleBtn"
                    class="w-full flex items-center justify-between text-xs text-gray-700 cursor-pointer group py-1 select-none focus:outline-none">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#00875A]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        <span class="font-semibold text-gray-800 group-hover:text-[#00875A] transition">Have a promo
                            code?</span>
                    </div>
                    <svg id="promoChevron"
                        class="w-4 h-4 text-gray-400 group-hover:text-gray-600 transition-transform duration-200"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Collapsible Promo Input Form -->
                <div id="promoCollapse" class="hidden mt-2.5 pt-1">
                    <div class="flex gap-2">
                        <input type="text" id="promoInput" placeholder="Enter code (e.g. VENDORA10)"
                            class="flex-1 px-3 py-2 text-xs font-semibold uppercase text-gray-800 placeholder-gray-400 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">
                        <button type="button" id="applyPromoBtn"
                            class="bg-[#00875A] hover:bg-[#00744D] text-white text-xs font-bold px-4 py-2 rounded-lg transition duration-150 cursor-pointer shrink-0">
                            Apply
                        </button>
                    </div>

                    <!-- Error Message Container -->
                    <p id="promoError"
                        class="hidden text-xs text-red-500 font-medium mt-1.5 flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <span id="promoErrorText">Invalid promo code. Please try again.</span>
                    </p>

                    <!-- Success Message Container -->
                    <p id="promoSuccess"
                        class="hidden text-xs text-[#00875A] font-semibold mt-1.5 flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Promo code applied successfully! (-$14.50)</span>
                    </p>
                </div>
            </div>

            <!-- Price Breakdown -->
            <div class="space-y-1.5 text-xs text-gray-500 pt-0.5">
                <div class="flex items-center justify-between">
                    <span>Subtotal (3 items)</span>
                    <span class="font-bold text-gray-900">$144.97</span>
                </div>
                <div class="flex items-center justify-between">
                    <span>Discount</span>
                    <span id="cartDiscountText" class="font-semibold text-gray-800">-$0.00</span>
                </div>
                <div class="flex items-center justify-between">
                    <span>Shipping</span>
                    <span class="text-gray-400 text-[11px]">Calculated at checkout</span>
                </div>
            </div>

            <!-- Total Price Row -->
            <div class="pt-2 border-t border-gray-100 flex items-center justify-between">
                <span class="text-sm font-bold text-gray-900">Total</span>
                <span id="cartTotalText" class="text-xl font-extrabold text-[#00875A]">$144.97</span>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-2 pt-1">
                <a href="#checkout"
                    class="w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3.5 rounded-xl shadow-xs hover:shadow transition-all flex items-center justify-center gap-2">
                    <span>Proceed to Checkout</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>

                <a href="#view-cart"
                    class="w-full bg-white hover:bg-gray-50 text-gray-800 border border-gray-200 font-bold text-sm py-3 rounded-xl transition text-center block">
                    View Cart
                </a>
            </div>

        </div>

    </aside>

    <!-- ================= JAVASCRIPT: DRAWER ANIMATION ================= -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const backdrop = document.getElementById('cartBackdrop');
            const drawer = document.getElementById('cartDrawer');
            const closeBtn = document.getElementById('closeCartBtn');

            const desktopCartTrigger = document.getElementById('cartHeaderTrigger');
            const mobileCartTrigger = document.getElementById('cartMobileTrigger');
            const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

            function openCart() {
                // Show backdrop
                backdrop.classList.remove('opacity-0', 'pointer-events-none');
                backdrop.classList.add('opacity-100', 'pointer-events-auto');

                // Slide Drawer In
                drawer.classList.remove('translate-x-full');
                drawer.classList.add('translate-x-0');

                // Prevent body scroll when drawer is open
                document.body.classList.add('overflow-hidden');
            }

            function closeCart() {
                // Hide backdrop
                backdrop.classList.remove('opacity-100', 'pointer-events-auto');
                backdrop.classList.add('opacity-0', 'pointer-events-none');

                // Slide Drawer Out
                drawer.classList.remove('translate-x-0');
                drawer.classList.add('translate-x-full');

                // Restore body scroll
                document.body.classList.remove('overflow-hidden');
            }

            // Click Handlers
            if (desktopCartTrigger) desktopCartTrigger.addEventListener('click', openCart);
            if (mobileCartTrigger) mobileCartTrigger.addEventListener('click', openCart);

            addToCartButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    openCart();
                });
            });

            if (closeBtn) closeBtn.addEventListener('click', closeCart);
            if (backdrop) backdrop.addEventListener('click', closeCart);

            // Escape key to close
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeCart();
            });

            // Promo Code Accordion Toggle & Validation
            const promoToggleBtn = document.getElementById('promoToggleBtn');
            const promoCollapse = document.getElementById('promoCollapse');
            const promoChevron = document.getElementById('promoChevron');
            const promoInput = document.getElementById('promoInput');
            const applyPromoBtn = document.getElementById('applyPromoBtn');
            const promoError = document.getElementById('promoError');
            const promoErrorText = document.getElementById('promoErrorText');
            const promoSuccess = document.getElementById('promoSuccess');
            const cartDiscountText = document.getElementById('cartDiscountText');
            const cartTotalText = document.getElementById('cartTotalText');

            // Toggle Dropdown
            if (promoToggleBtn) {
                promoToggleBtn.addEventListener('click', () => {
                    promoCollapse.classList.toggle('hidden');
                    promoChevron.classList.toggle('rotate-180');
                    if (!promoCollapse.classList.contains('hidden')) {
                        promoInput.focus();
                    }
                });
            }

            // Apply Promo Validation
            if (applyPromoBtn) {
                applyPromoBtn.addEventListener('click', () => {
                    const code = promoInput.value.trim().toUpperCase();

                    // Reset states
                    promoError.classList.add('hidden');
                    promoSuccess.classList.add('hidden');
                    promoInput.classList.remove('border-red-500', 'focus:border-red-500',
                        'focus:ring-red-500');

                    if (!code) {
                        promoErrorText.textContent = 'Please enter a promo code.';
                        promoError.classList.remove('hidden');
                        promoInput.classList.add('border-red-500', 'focus:border-red-500',
                            'focus:ring-red-500');
                        return;
                    }

                    // Demo valid promo codes: 'VENDORA10' or 'SAVE20'
                    if (code === 'VENDORA10' || code === 'SAVE20') {
                        promoSuccess.classList.remove('hidden');
                        cartDiscountText.textContent = '-$14.50';
                        cartTotalText.textContent = '$130.47';
                        promoInput.disabled = true;
                        applyPromoBtn.disabled = true;
                        applyPromoBtn.textContent = 'Applied';
                        applyPromoBtn.classList.replace('bg-[#00875A]', 'bg-gray-400');
                    } else {
                        // Invalid promo code error
                        promoErrorText.textContent = 'Invalid promo code. Please try again.';
                        promoError.classList.remove('hidden');
                        promoInput.classList.add('border-red-500', 'focus:border-red-500',
                            'focus:ring-red-500');
                    }
                });
            }
        });
    </script>

    <script>
        // ================= WISHLIST DRAWER & TOAST LOGIC =================
        const wishlistBackdrop = document.getElementById('wishlistBackdrop');
        const wishlistDrawer = document.getElementById('wishlistDrawer');
        const closeWishlistBtn = document.getElementById('closeWishlistBtn');
        const wishlistHeaderTrigger = document.getElementById('wishlistHeaderTrigger');
        const wishlistMobileTrigger = document.getElementById('wishlistMobileTrigger');

        const wishlistToast = document.getElementById('wishlistToast');
        const closeToastBtn = document.getElementById('closeToastBtn');
        let toastTimeout = null;

        function openWishlist() {
            // If cart is open, close it first
            if (typeof closeCart === 'function') closeCart();

            wishlistBackdrop.classList.remove('opacity-0', 'pointer-events-none');
            wishlistBackdrop.classList.add('opacity-100', 'pointer-events-auto');

            wishlistDrawer.classList.remove('translate-x-full');
            wishlistDrawer.classList.add('translate-x-0');

            document.body.classList.add('overflow-hidden');
        }

        function closeWishlist() {
            wishlistBackdrop.classList.remove('opacity-100', 'pointer-events-auto');
            wishlistBackdrop.classList.add('opacity-0', 'pointer-events-none');

            wishlistDrawer.classList.remove('translate-x-0');
            wishlistDrawer.classList.add('translate-x-full');

            document.body.classList.remove('overflow-hidden');
        }

        // Show Toast Popup
        function showWishlistToast(productName, productImg) {
            if (productName) {
                document.getElementById('toastProductText').textContent = `${productName} has been added to your wishlist.`;
            }
            if (productImg) {
                document.getElementById('toastProductImg').src = productImg;
            }

            wishlistToast.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none');
            wishlistToast.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto');

            clearTimeout(toastTimeout);
            toastTimeout = setTimeout(() => {
                hideWishlistToast();
            }, 4000);
        }

        function hideWishlistToast() {
            wishlistToast.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto');
            wishlistToast.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
        }

        // Event Listeners
        if (wishlistHeaderTrigger) wishlistHeaderTrigger.addEventListener('click', openWishlist);
        if (wishlistMobileTrigger) wishlistMobileTrigger.addEventListener('click', openWishlist);
        if (closeWishlistBtn) closeWishlistBtn.addEventListener('click', closeWishlist);
        if (wishlistBackdrop) wishlistBackdrop.addEventListener('click', closeWishlist);
        if (closeToastBtn) closeToastBtn.addEventListener('click', hideWishlistToast);

        // Wishlist heart buttons on product cards:
        document.querySelectorAll('button[class*="hover:text-red-500"]').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const card = btn.closest('.group');
                const title = card ? card.querySelector('h3')?.textContent.trim() : 'Product';
                const img = card ? card.querySelector('img')?.src : '';

                // Toggle red fill
                const svg = btn.querySelector('svg');
                if (svg) {
                    svg.classList.toggle('fill-current');
                    svg.classList.toggle('text-red-500');
                }

                showWishlistToast(title, img);
            });
        });

        // "Add to Cart" inside Wishlist: triggers Cart Drawer!
        document.querySelectorAll('.add-to-cart-from-wishlist').forEach(btn => {
            btn.addEventListener('click', () => {
                closeWishlist();
                setTimeout(() => {
                    if (typeof openCart === 'function') openCart();
                }, 200);
            });
        });
    </script>

</body>

</html>
