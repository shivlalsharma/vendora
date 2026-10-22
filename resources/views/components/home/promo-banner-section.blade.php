@props(['banners' => []])

<section {{ $attributes }}>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        @foreach ($banners as $banner)
            <x-home.promo-banner-card :banner="$banner" />
        @endforeach

    </div>
</section>
