@props(['vendor' => []])

<div
    class="bg-white rounded-2xl border border-gray-100 p-5 flex flex-col items-center text-center shadow-sm hover:shadow-md transition">

    <div
        class="w-12 h-12 rounded-xl {{ $vendor['badge_bg'] ?? '' }} flex items-center justify-center font-bold text-base mb-3 shadow-inner">
        @if (!empty($vendor['initials']))
            <span>{{ $vendor['initials'] }}</span>
        @elseif (($vendor['icon'] ?? '') === 'home')
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
        @elseif (($vendor['icon'] ?? '') === 'flower')
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 2a4 4 0 00-4 4v2a4 4 0 008 0V6a4 4 0 00-4-4zM6 10a4 4 0 00-4 4v2a4 4 0 008 0v-2a4 4 0 00-4-4zm12 0a4 4 0 00-4 4v2a4 4 0 008 0v-2a4 4 0 00-4-4z" />
            </svg>
        @else
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
        @endif
    </div>

    <!-- Names -->
    <h4 class="text-sm font-bold text-gray-900">{{ $vendor['name'] ?? 'Unnamed Vendor' }}</h4>
    <p class="text-[11px] text-gray-500 mb-2">{{ $vendor['category'] ?? 'General' }}</p>

    <!-- Rating & Products -->
    <div class="flex items-center gap-1 text-xs mb-1">
        <svg class="w-3.5 h-3.5 text-amber-400 fill-current" viewBox="0 0 20 20">
            <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
        </svg>
        <span class="font-bold text-gray-800">{{ $vendor['rating'] ?? '0.0' }}</span>
        <span class="text-gray-400 text-[11px]">{{ $vendor['reviews'] ?? 0 }}</span>
    </div>
    <span class="text-[11px] text-gray-500 font-medium mb-4">{{ $vendor['products_count'] ?? 0 }} Products</span>

    <!-- Follow Button -->
    <button
        class="cursor-pointer w-full border border-gray-200 hover:border-[#00875A] hover:text-[#00875A] text-gray-700 py-1.5 rounded-lg text-xs font-semibold transition">
        Follow
    </button>
</div>
