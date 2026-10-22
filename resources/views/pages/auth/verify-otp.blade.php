@extends('layouts.auth')

@section('title', 'Verify OTP - Vendora')

@php
    $subTitle = 'Enter the 6-digit code sent to' . session('email', 'your email address');
@endphp

@section('content')
    <x-auth.auth-card image="{{ asset('assets/images/verify.png') }}" title='Verify OTP' :subtitle="$subTitle">
        <form id="otpForm" action="#" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="email" value="{{ session('email') }}">
            <input type="hidden" id="fullOtp" name="otp" value="">

            <!-- 6 Digit Input Boxes -->
            <div>
                <div id="otpContainer" class="flex items-center justify-between gap-2">
                    <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-index="0" placeholder="0"
                        class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                    <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-index="1" placeholder="0"
                        class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                    <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-index="2" placeholder="0"
                        class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                    <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-index="3" placeholder="0"
                        class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                    <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-index="4" placeholder="0"
                        class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                    <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-index="5" placeholder="0"
                        class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                </div>
                @error('otp')
                    <p class="text-xs text-red-500 mt-2 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <!-- Countdown Timer -->
            <div class="flex items-center gap-1.5 text-xs text-gray-500 font-medium pt-1">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Code expires in <strong id="timer" class="text-[#00875A] font-bold">04:52</strong></span>
            </div>

            <!-- Verify Code Submit Button -->
            <button type="submit"
                class="w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3 rounded-xl shadow-sm hover:shadow transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer">
                <span>Verify Code</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </form>

        <x-slot:resend-otp>
            <form action="#" method="POST">
                @csrf
                <input type="hidden" name="email" value="{{ session('email', request('email')) }}">
                <button type="submit" id="resendBtn"
                    class="w-full border border-gray-200 hover:border-gray-300 bg-white hover:bg-gray-50/70 text-gray-700 font-semibold text-xs sm:text-sm py-2.5 px-4 rounded-xl flex items-center justify-center gap-2 shadow-xs transition duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>Resend OTP</span>
                </button>
            </form>
        </x-slot:resend-otp>

        <x-slot:footer>
            <a href="{{ route('signin') }}" class="font-bold text-[#00875A] hover:underline">Back to Login</a>
        </x-slot:footer>
    </x-auth.auth-card>
@endsection

@push('scripts')
    @vite('resources/js/pages/auth/verify-otp.js')
@endpush
