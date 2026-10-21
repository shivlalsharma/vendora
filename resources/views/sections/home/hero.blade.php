<section id="heroSlider"
    class="relative w-full aspect-[16/9] lg:aspect-[16/5] overflow-hidden select-none border border-gray-200/80 shadow-xs group">

    <!-- Track Container -->
    <div id="sliderTrack" class="flex w-full h-full will-change-transform">

        @foreach (config('data.slides') as $slide)
            <x-home.slide :slide="$slide" />
        @endforeach

    </div>
</section>
