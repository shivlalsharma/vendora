@php
    $mobileNav = [
        [
            'label' => 'Home',
            'href' => '#home',
            'variant' => 'nav',
            'active' => request()->routeIs('home'),
            'svg' => '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>',
        ],
        [
            'label' => 'Shop',
            'href' => '#shop',
            'variant' => 'nav',
            'active' => request()->routeIs('shop'),
            'svg' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>',
        ],
        [
            'label' => 'Vendors',
            'href' => '#vendors',
            'variant' => 'nav',
            'active' => request()->routeIs('vendors'),
            'svg' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>',
        ],
        [
            'label' => 'Orders',
            'href' => '#orders',
            'variant' => 'nav',
            'active' => request()->routeIs('orders'),
            'svg' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>',
        ],
        [
            'label' => 'Account',
            'href' => '#account',
            'variant' => 'nav',
            'active' => request()->routeIs('account'),
            'svg' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>',
        ],
    ];
@endphp

<div
    class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 z-50 px-4 py-2 flex items-center justify-around shadow-lg">

    @foreach ($mobileNav as $nav)
        <x-header.icon-badge :href="$nav['href']" :label="$nav['label']" :variant="$nav['variant']" :active="$nav['active']">
            {!! $nav['svg'] !!}
        </x-header.icon-badge>
    @endforeach
</div>
