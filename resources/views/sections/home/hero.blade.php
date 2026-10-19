@php
    $features = [
        [
            'icon' => 'box',
            'line_1' => 'Wide Selection',
            'line_2' => 'of Products',
        ],
        [
            'icon' => 'shield',
            'line_1' => 'Trusted',
            'line_2' => 'Vendors',
        ],
        [
            'icon' => 'payment',
            'line_1' => 'Secure',
            'line_2' => 'Payments',
        ],
        [
            'icon' => 'delivery',
            'line_1' => 'Fast & Reliable',
            'line_2' => 'Delivery',
        ],
    ];

    $slides = [
        [
            'image' => 'assets/images/everything.png',
            'image_alt' => 'Vendora Marketplace Tabletop',
            'callout_line_1' => 'More Choices',
            'callout_line_2' => 'Better Deals',
            'tagline' => 'Multi-Vendor Marketplace',
            'priority' => true,
            'heading_line_1' => 'Everything You Need',
            'heading_line_2' => 'in One Place',
            'description' => 'Shop from thousands of trusted vendors, discover unique products, and enjoy a seamless
                        shopping experience on Vendora.',
            'btn1_title' => 'Shop Now',
            'btn1_link' => '#shop',
            'btn2_title' => 'Explore Vendors',
            'btn2_link' => '#vendors',
            'features' => $features,
        ],
        [
            'image' => 'assets/images/tech.png',
            'image_alt' => 'Tech Gadgets',
            'callout_line_1' => 'Top Rated',
            'callout_line_2' => 'Best Warranties',
            'tagline' => 'Flash Deals &bull; Up to 40% Off',
            'priority' => false,
            'heading_line_1' => 'Smart Devices',
            'heading_line_2' => 'Audio Accessories',
            'description' => 'Upgrade your setup with official wireless gadgets, studio acoustics, and verified
                        authentic gear.',
            'btn1_title' => 'Browse Gadgets',
            'btn1_link' => '#shop',
            'btn2_title' => 'View Offers',
            'btn2_link' => '#deals',
            'features' => $features,
        ],
        [
            'image' => 'assets/images/headphone.png',
            'image_alt' => 'Headphones and accessories available on Vendora',
            'callout_line_1' => 'Fresh Fits',
            'callout_line_2' => 'Direct To You',
            'tagline' => 'Season New Arrivals',
            'priority' => false,
            'heading_line_1' => 'Trendy Styles & ',
            'heading_line_2' => 'Everyday Living',
            'description' => 'Shop modern collections from boutique apparel vendors with fast nationwide shipping.',
            'btn1_title' => 'Shop Fashion',
            'btn1_link' => '#shop',
            'btn2_title' => 'View Boutiques',
            'btn2_link' => '#vendors',
            'features' => $features,
        ],
    ];
@endphp

<section id="heroSlider"
    class="relative rounded-[28px] overflow-hidden select-none border border-gray-200/80 shadow-xs group">

    <!-- Track Container -->
    <div id="sliderTrack" class="flex w-full will-change-transform">

        @foreach ($slides as $slide)
            <x-home.hero.slide :slide="$slide" />
        @endforeach

    </div>

    <!-- Centered Bottom Pagination Dots with Hover Cursor & Scale -->
    <div class="absolute bottom-3 inset-x-0 flex items-center justify-center gap-2 z-30">
        @foreach ($slides as $index => $slide)
            <button type="button" aria-label="Slide {{ $index + 1 }}"
                class="hero-dot cursor-pointer p-1 group/dot focus:outline-none">
                <span
                    class="dot-indicator block w-2.5 h-2.5 rounded-full {{ $index + 1 === 1 ? 'bg-[#00875A]' : 'bg-gray-300' }} transition-all duration-300 group-hover/dot:scale-125"></span>
            </button>
        @endforeach
    </div>
</section>
