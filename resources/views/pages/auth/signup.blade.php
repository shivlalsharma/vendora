@extends('layouts.auth')

@section('title', 'Sign Up - Vendora')

@section('content')
    <x-auth.auth-card image="{{ asset('assets/images/signup.png') }}" title='Create your account'
        subtitle='Join Vendora and be part of a growing marketplace of amazing products.'>

        <form action="#" method="POST" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                <!-- First Name -->
                <div class="relative flex items-center">
                    <span class="absolute left-3.5 text-gray-400 pointer-events-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required
                        autofocus placeholder="First Name"
                        class="w-full pl-11 pr-4 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">
                </div>

                <!-- Last Name -->
                <div class="relative flex items-center">
                    <span class="absolute left-3.5 text-gray-400 pointer-events-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required
                        placeholder="Last Name"
                        class="w-full pl-11 pr-4 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">
                </div>
            </div>
            @error('first_name')
                <p class="text-xs text-red-500 font-medium">{{ $message }}</p>
            @enderror
            @error('last_name')
                <p class="text-xs text-red-500 font-medium">{{ $message }}</p>
            @enderror

            <!-- Email Address -->
            <div class="relative flex items-center">
                <span class="absolute left-3.5 text-gray-400 pointer-events-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </span>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    placeholder="Email Address"
                    class="w-full pl-11 pr-4 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">
            </div>
            @error('email')
                <p class="text-xs text-red-500 font-medium">{{ $message }}</p>
            @enderror

            <!-- Phone Number with Country Flag Picker -->
            <div
                class="relative flex items-center border border-gray-200 rounded-xl focus-within:border-[#00875A] focus-within:ring-1 focus-within:ring-[#00875A] transition bg-white">
                <!-- Left Phone Icon -->
                <span class="pl-3.5 text-gray-400 pointer-events-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </span>

                <!-- Flag & Dial Code Dropdown Selector -->
                <div
                    class="flex items-center pl-2.5 pr-2 py-2 gap-1.5 border-r border-gray-200 text-xs sm:text-sm font-semibold text-gray-700">
                    <!-- US SVG Flag -->
                    <svg class="w-4.5 h-3.5 rounded-xs shrink-0" viewBox="0 0 640 480">
                        <g fill-rule="evenodd" stroke-width="1pt">
                            <path fill="#bd3d44" d="M0 0h640v480H0z" />
                            <path fill="#fff"
                                d="M0 37h640v37H0zm0 74h640v37H0zm0 74h640v37H0zm0 74h640v37H0zm0 73h640v37H0zm0 74h640v37H0z" />
                            <path fill="#192f5d" d="M0 0h285v259H0z" />
                            <circle cx="28" cy="24" r="5" fill="#fff" />
                            <circle cx="70" cy="24" r="5" fill="#fff" />
                            <circle cx="112" cy="24" r="5" fill="#fff" />
                            <circle cx="154" cy="24" r="5" fill="#fff" />
                            <circle cx="196" cy="24" r="5" fill="#fff" />
                            <circle cx="238" cy="24" r="5" fill="#fff" />
                            <circle cx="49" cy="50" r="5" fill="#fff" />
                            <circle cx="91" cy="50" r="5" fill="#fff" />
                            <circle cx="133" cy="50" r="5" fill="#fff" />
                            <circle cx="175" cy="50" r="5" fill="#fff" />
                            <circle cx="217" cy="50" r="5" fill="#fff" />
                        </g>
                    </svg>
                    <span>+1</span>
                    <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <!-- Phone Number Input -->
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                    placeholder="Phone Number"
                    class="w-full px-3 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-transparent focus:outline-none">
            </div>

            <!-- Password -->
            <div class="relative flex items-center">
                <span class="absolute left-3.5 text-gray-400 pointer-events-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </span>
                <input type="password" id="password" name="password" required placeholder="Password"
                    class="w-full pl-11 pr-11 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">

                <!-- Toggle Password Visibility -->
                <button type="button" id="togglePassword"
                    class="cursor-pointer absolute right-3.5 text-gray-400 hover:text-gray-600 focus:outline-none">
                    <svg id="eyeIcon1" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>
            @error('password')
                <p class="text-xs text-red-500 font-medium">{{ $message }}</p>
            @enderror

            <!-- Confirm Password -->
            <div class="relative flex items-center">
                <span class="absolute left-3.5 text-gray-400 pointer-events-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </span>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    placeholder="Confirm Password"
                    class="w-full pl-11 pr-11 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">

                <!-- Toggle Confirm Password Visibility -->
                <button type="button" id="toggleConfirmPassword"
                    class="cursor-pointer absolute right-3.5 text-gray-400 hover:text-gray-600 focus:outline-none">
                    <svg id="eyeIcon2" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>

            <!-- Terms & Conditions Checkbox -->
            <div class="flex items-center gap-2 pt-0.5">
                <input type="checkbox" id="terms" name="terms" required checked
                    class="w-4 h-4 rounded text-[#00875A] border-gray-300 focus:ring-[#00875A] accent-[#00875A] cursor-pointer">
                <label for="terms" class="text-xs text-gray-600 font-medium cursor-pointer select-none">
                    I agree to the <a href="#terms" class="text-[#00875A] font-bold hover:underline">Terms
                        &amp;
                        Conditions</a> and <a href="#privacy" class="text-[#00875A] font-bold hover:underline">Privacy
                        Policy</a>.
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="cursor-pointer w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3 rounded-xl shadow-sm hover:shadow transition-all duration-200 mt-2">
                Create Account
            </button>
        </form>

        <x-slot:social-auth>
            <x-auth.auth-social-buttons />
        </x-slot:social-auth>

        <x-slot:footer>
            Already have an account?
            <a href="{{ route('signin') }}" class="font-bold text-[#00875A] hover:underline">Sign in</a>
        </x-slot:footer>
    </x-auth.auth-card>
@endsection

@push('scripts')
    @vite('resources/js/pages/auth/signup.js')
@endpush
