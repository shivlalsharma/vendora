@extends('layouts.auth')

@section('title', 'Become a Vendor - Vendora')

@push('styles')
    <!-- Preconnect to flag CDN for zero-latency flag rendering -->
    <link rel="preconnect" href="https://flagcdn.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">
    @vite('resources/css/pages/auth.css')
@endpush

@section('content')
    <main class="w-full container mx-auto flex-1 flex items-center justify-center sm:px-10 md:pt-4 md:pb-8">
        <div
            class="bg-white sm:rounded-[28px] sm:border sm:border-gray-100 sm:shadow-[0_10px_35px_rgba(0,0,0,0.03)] overflow-hidden flex flex-col lg:flex-row sm:p-5 gap-6 lg:gap-10">

            <!-- ================= LEFT COLUMN: HERO IMAGE (LCP & CLS Optimized) ================= -->
            @include('pages.auth.vendor-signup.left-column')

            <!-- ================= RIGHT COLUMN: MULTI-STEP FORMS ================= -->
            @include('pages.auth.vendor-signup.right-column')
        </div>
    </main>
@endsection

@push('scripts')
    @vite('resources/js/pages/auth/vendor-signup.js')
@endpush
