@props(['image', 'title', 'subtitle' => null, 'leftWidth' => '60%', 'rightWidth' => '40%'])

<main class="w-full container mx-auto flex-1 flex items-center justify-center sm:px-10 md:pt-4 md:pb-8">
    <div
        class="bg-white sm:rounded-[28px] sm:border sm:border-gray-100 sm:shadow-[0_10px_35px_rgba(0,0,0,0.03)] overflow-hidden flex flex-col lg:flex-row sm:p-5 gap-6 lg:gap-10">

        <div class="w-full lg:w-[{{ $leftWidth }}] overflow-hidden sm:rounded-2xl">
            <img src="{{ $image }}" alt="{{ $subtitle ?? 'Authetication' }}"
                class="block w-full h-full object-cover">
        </div>

        <div class="w-full lg:w-[{{ $rightWidth }}] flex flex-col justify-center px-6 lg:px-8 py-2 sm:py-4">
            <!-- Heading -->
            <div class="mb-6">
                <h2 class="text-2xl sm:text-[26px] font-bold text-[#0B1527] tracking-tight">{{ $title }}
                </h2>
                @if ($subtitle)
                    <p class="text-xs sm:text-sm text-gray-500 mt-1 font-medium">{{ $subtitle }}</p>
                @endif
            </div>

            <!-- Form -->
            {{ $slot }}

            <!-- Divider -->
            <div class="relative my-6 flex items-center justify-center">
                <div class="border-t border-gray-200 w-full"></div>
                <span class="bg-white px-3 text-[11px] font-semibold text-gray-400 absolute">or</span>
            </div>

            <!-- Google Authentication Button -->
            @if (isset($socialAuth))
                <div class="space-y-2.5">
                    {{ $socialAuth }}
                </div>
            @endif

            @if (isset($resendOtp))
                {{ $resendOtp }}
            @endif

            <!-- Navigation Link -->
            @if (isset($footer))
                <div class="text-center text-xs text-gray-500 mt-6 mb-4 font-medium">
                    {{ $footer }}
                </div>
            @endif

        </div>

    </div>
</main>
