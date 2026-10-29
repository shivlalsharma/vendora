@extends('layouts.auth')

@section('title', 'Sign Up - Vendora')

@push('styles')
    <!-- Preconnect to flag CDN for zero-latency flag rendering -->
    <link rel="preconnect" href="https://flagcdn.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">
@endpush

@php
    $isSubmitted = false;
@endphp

@section('content')
    @if ($isSubmitted)
        <x-auth.auth-card image="{{ asset('assets/images/verify-email.png') }}" title='Verify your email'
            subtitle='We’ve sent a 6-digit verification code to' email='shiv@gmail.com'>

            <form id="otpForm" action="#" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="email" value="{{ session('email') }}">
                <input type="hidden" id="fullOtp" name="otp" value="">

                <!-- 6 Digit Input Boxes -->
                <div>
                    <div id="otpContainer" class="flex items-center justify-between gap-2">
                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-index="0"
                            placeholder="1"
                            class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-index="1"
                            placeholder="2"
                            class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-index="2"
                            placeholder="3"
                            class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-index="3"
                            placeholder="4"
                            class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-index="4"
                            placeholder="5"
                            class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-index="5"
                            placeholder="6"
                            class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                    </div>
                    @error('otp')
                        <p class="text-xs text-red-500 mt-2 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Verify Code Submit Button -->
                <x-auth.submit-btn class="flex items-center justify-center gap-2">
                    <span>Verify &amp; Continue</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </x-auth.submit-btn>
            </form>

            <x-slot:resend-otp>
                <div class="text-center space-y-1.5">
                    <p class="text-[13px] sm:text-sm text-[#334155] font-medium">
                        Didn’t receive the code?
                        <button type="button" id="resend-btn"
                            class="text-[#00875A] font-bold underline underline-offset-[3px] decoration-[#00875A] hover:text-[#00724C] transition duration-150 cursor-pointer">
                            Resend code
                        </button>
                    </p>

                    <p class="text-xs sm:text-[13px] text-gray-400 font-normal">
                        Resend available in <span id="timer" class="font-bold text-gray-600">00:59</span>
                    </p>
                </div>
            </x-slot:resend-otp>

            <x-slot:footer>
                <div
                    class="bg-[#F4FAF7] border border-[#E1F3EA] rounded-xl sm:rounded-2xl py-3.5 px-4 flex items-center justify-center gap-2">
                    <svg class="w-[18px] h-[18px] text-[#00875A] shrink-0" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        <path d="m9 12 2 2 4-4" />
                    </svg>
                    <span class="text-xs sm:text-[13px] text-[#4B5868] font-normal">
                        Never share your verification code with anyone.
                    </span>
                </div>
            </x-slot:footer>
        </x-auth.auth-card>
    @else
        <x-auth.auth-card image="{{ asset('assets/images/signup.webp') }}" leftWidth="48%" rightWidth="52%"
            title='Create your account' subtitle='Join Vendora and be part of a growing marketplace of amazing products.'>

            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                    <x-auth.input-field name="first_name" id="first_name" type="text" required
                        placeholder='First Name'>
                        <x-slot:icon>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </x-slot:icon>
                    </x-auth.input-field>

                    <x-auth.input-field name="last_name" id="last_name" type="text" required placeholder='Last Name'>
                        <x-slot:icon>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </x-slot:icon>
                    </x-auth.input-field>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                    <x-auth.input-field name="email" id="email" type="email" required
                        placeholder='Email Address'>
                        <x-slot:icon>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </x-slot:icon>
                    </x-auth.input-field>

                    <!-- Phone Number with Country Flag Picker -->
                    <x-auth.phone-input />
                    @error('phone')
                        <p class="text-xs text-red-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                    <x-auth.input-field name="password" id="password" type="password" required placeholder='Password'>
                        <x-slot:icon>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </x-slot:icon>
                        <x-slot:toggle-btn>
                            <button type="button"
                                class="toggle-password-btn cursor-pointer absolute right-3.5 text-gray-400 hover:text-gray-600 focus:outline-none">
                                <svg class="eye-icon w-4.5 h-4.5" fill="none" stroke="currentColor"
                                    stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </x-slot:toggle-btn>
                    </x-auth.input-field>

                    <x-auth.input-field name="password_confirmation" id="password_confirmation" type="password" required
                        placeholder='Confirm Password'>
                        <x-slot:icon>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </x-slot:icon>
                        <x-slot:toggle-btn>
                            <button type="button"
                                class="toggle-password-btn cursor-pointer absolute right-3.5 text-gray-400 hover:text-gray-600 focus:outline-none">
                                <svg class="eye-icon w-4.5 h-4.5" fill="none" stroke="currentColor"
                                    stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </x-slot:toggle-btn>
                    </x-auth.input-field>
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
                <x-auth.submit-btn>
                    Create Account
                </x-auth.submit-btn>
            </form>

            <x-slot:social-auth>
                <x-auth.auth-social-buttons />
            </x-slot:social-auth>

            <x-slot:footer>
                Already have an account?
                <a href="{{ route('signin') }}" class="font-bold text-[#00875A] hover:underline">Sign in</a>
            </x-slot:footer>
        </x-auth.auth-card>
    @endif
@endsection

@push('scripts')
    @vite(['resources/js/pages/auth/phone-input.js', 'resources/js/pages/auth/toggle-password.js', 'resources/js/pages/auth/verify-otp.js'])
@endpush
