<?php

return [
    'slides'=> [
        [
        'image' => 'assets/images/hero-1.png',
        'image_alt' => 'Vendora Marketplace Tabletop'
        ],
        [
        'image' => 'assets/images/hero-2.png',
        'image_alt' => 'Tech Gadgets'
        ],
        [
        'image' => 'assets/images/hero-3.png',
        'image_alt' => 'Fashion Essentials'
        ],
    ],

    'categories'=> [
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
        ]
    ],

    'products'=> [
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
    ],


    'promotional-banners' => [
        [
            'label' => 'New Arrivals',
            'title' => 'Latest Smartphones',
            'offer' => 'Up to 30% Off',
            'button_text' => 'Shop Now',
            'button_link' => '#shop',
            'image' => 'https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=500&auto=format&fit=crop&q=80',
            'image_alt' => 'Smartphone Banner',
            'theme' => 'dark',
        ],
        [
            'label' => 'Fashion Sale',
            'title' => 'Trendy Styles',
            'offer' => 'Up to 50% Off',
            'button_text' => 'Shop Now',
            'button_link' => '#shop',
            'image' => 'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?w=500&auto=format&fit=crop&q=80',
            'image_alt' => 'Fashion Sale',
            'theme' => 'fashion',
        ],
    ],

    'vendors'=> [
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
    ]
];
