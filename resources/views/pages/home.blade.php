@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 sm:px-6 py-4 lg:py-6 space-y-14">

        <!-- HERO SECTION -->
        <x-home.hero-slider :slides="config('data.slides', [])" />

        <!-- SHOP BY CATEGORY SECTION -->
        <x-home.category-section :categories="config('data.categories', [])" />

        <!-- FEATURED PRODUCTS SECTION -->
        <x-home.featured-products :products="config('data.products', [])" />

        <!-- PROMOTIONAL BANNERS -->
        <x-home.promo-banner-section :banners="config('data.promotional-banners', [])" />

        <!-- FEATURED VENDORS SECTION -->
        <x-home.featured-vendors :vendors="config('data.vendors', [])" />

    </main>
@endsection

@push('scripts')
    @vite('resources/js/pages/home.js')
@endpush
