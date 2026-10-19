<section>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        @foreach (config('data.promotional-banners') as $banner)

        <x-home.promo-banner-card :banner="$banner" />

        @endforeach

    </div>
</section>