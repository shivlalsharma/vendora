@extends('layouts.app')

@section('content')
<main class="max-w-[1360px] mx-auto px-4 sm:px-6 py-6 space-y-14">

    <!-- HERO SECTION -->
    @include('sections.home.hero')

    <!-- SHOP BY CATEGORY SECTION -->
    @include('sections.home.categories')

    <!-- FEATURED PRODUCTS SECTION -->
    @include('sections.home.featured-products')

    <!-- PROMOTIONAL BANNERS -->
    @include('sections.home.promotional-banner')

    <!-- FEATURED VENDORS SECTION -->
    @include('sections.home.featured-vendors')

</main>
@endsection

@push('scripts')
@vite('resources/js/pages/home.js')
@endpush