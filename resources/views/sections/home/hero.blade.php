<section id="heroSlider"
    class="relative rounded-[28px] overflow-hidden select-none border border-gray-200/80 shadow-xs group">

    <!-- Track Container -->
    <div id="sliderTrack" class="flex w-full will-change-transform">

        @foreach (config('data.slides') as $slide)
        <x-home.slide :slide="$slide" />
        @endforeach

    </div>

    <!-- Centered Bottom Pagination Dots with Hover Cursor & Scale -->
    <div class="absolute bottom-3 inset-x-0 flex items-center justify-center gap-2 z-30">
        @foreach (config('data.slides') as $index => $slide)
        <button type="button" aria-label="Slide {{ $index + 1 }}"
            class="hero-dot cursor-pointer p-1 group/dot focus:outline-none">
            <span
                class="dot-indicator block w-2.5 h-2.5 rounded-full {{ $index + 1 === 1 ? 'bg-[#00875A]' : 'bg-gray-300' }} transition-all duration-300 group-hover/dot:scale-125"></span>
        </button>
        @endforeach
    </div>
</section>