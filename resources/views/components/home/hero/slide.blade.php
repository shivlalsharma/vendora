@php
    $isPriority = $slide['priority'] ?? false;
@endphp

<div
    class="hero-slide relative w-full flex-shrink-0 min-h-[380px] sm:min-h-[420px] lg:min-h-[460px] flex items-center bg-[#FDF5F2]">
    <!-- Background Image -->
    <img src="{{ asset($slide['image']) }}" alt="{{ $slide['image_alt'] }}"
        class="absolute inset-0 w-full h-full object-cover object-right pointer-events-none" />

    <!-- Callout -->
    <div class="absolute top-6 right-12 lg:right-28 z-20 pointer-events-none hidden md:block">
        <div class="flex flex-col items-center transform -rotate-6">
            <span
                class="font-serif italic font-extrabold text-[#1E293B] text-sm lg:text-base tracking-wide leading-tight text-center drop-shadow-xs">
                {{ $slide['callout_line_1'] }}<br> {{ $slide['callout_line_2'] }}
            </span>
            <svg class="w-10 h-7 text-[#1E293B] mt-1 ml-6 transform rotate-12" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 40 30">
                <path d="M5 5 C 18 2, 28 8, 30 22 M 22 17 L 30 22 L 32 14" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </div>
    </div>

    <!-- Left Content Area -->
    <div class="relative z-20 w-full max-w-[1360px] mx-auto px-6 sm:px-10 lg:px-12 py-8 flex flex-col justify-center">
        <div class="max-w-xl space-y-4 sm:space-y-5">
            <span class="inline-block bg-[#FDE2D8] text-[#C2410C] text-xs font-bold px-3 py-1.5 rounded-md">
                {{ $slide['tagline'] }}
            </span>

            @if ($isPriority)
                <h1
                    class="text-3xl sm:text-4xl lg:text-[44px] font-extrabold text-[#0B1527] leading-[1.12] tracking-tight">
                    {{ $slide['heading_line_1'] }} <br>
                    <span class="text-[#00875A]">{{ $slide['heading_line_2'] }}</span>
                </h1>
            @else
                <h2
                    class="text-3xl sm:text-4xl lg:text-[44px] font-extrabold text-[#0B1527] leading-[1.12] tracking-tight">
                    {{ $slide['heading_line_1'] }} <br>
                    <span class="text-[#00875A]">{{ $slide['heading_line_2'] }}</span>
                </h2>
            @endif

            <p class="text-gray-600 text-xs sm:text-sm lg:text-[15px] leading-relaxed max-w-md font-medium">
                {{ $slide['description'] }}
            </p>

            <div class="flex items-center gap-3 pt-1">
                <a href="{{ $slide['btn1_link'] }}"
                    class="bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-xs sm:text-sm px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg shadow-sm flex items-center gap-2 transition duration-200">
                    <span>{{ $slide['btn2_title'] }}</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
                <a href="{{ $slide['btn2_link'] }}"
                    class="bg-white hover:bg-gray-50 text-gray-800 border border-gray-200 font-bold text-xs sm:text-sm px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg shadow-xs transition duration-200">
                    {{ $slide['btn2_title'] }}
                </a>
            </div>

            <!-- Features -->
            <div class="flex flex-wrap items-center gap-6 sm:gap-7 pt-4">
                @foreach ($slide['features'] as $feature)
                    <div class="flex items-center gap-2">
                        <div class="text-[#00875A] shrink-0">
                            <x-home.hero.feature-icon :icon="$feature['icon']" />
                        </div>
                        <span
                            class="text-[11px] font-semibold text-gray-700 leading-tight">{{ $feature['line_1'] }}<br>{{ $feature['line_2'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
