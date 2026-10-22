@props(['slides' => []])

@if (count($slides))
    <section id="heroSlider"
        class="relative w-full aspect-[16/9] lg:aspect-[16/5] overflow-hidden select-none border border-gray-200/80 shadow-xs group">

        <!-- Track Container -->
        <div id="sliderTrack" class="flex w-full h-full will-change-transform">

            @foreach ($slides as $slide)
                <a href="{{ $slide['route'] ?? '#' }}" class="hero-slide relative w-full h-full flex-shrink-0">
                    <img src="{{ asset($slide['image']) }}" alt="{{ asset($slide['image_alt'] ?? '') }}"
                        class="absolute inset-0 block w-full h-full object-center pointer-events-none"
                        @if (!$loop->first) loading="lazy" @endif />
                </a>
            @endforeach

        </div>
        @if (count($slides) > 1)
            <div class="absolute bottom-3 inset-x-0 flex items-center justify-center gap-2 z-30">
                @foreach ($slides as $index => $slide)
                    <button type="button" aria-label="Slide {{ $index + 1 }}"
                        class="hero-dot cursor-pointer p-1 group/dot focus:outline-none">
                        <span
                            class="dot-indicator block w-2.5 h-2.5 rounded-full bg-[#00875A] transition-all duration-300 group-hover/dot:scale-125"></span>
                    </button>
                @endforeach
            </div>
        @endif
    </section>
@endif
