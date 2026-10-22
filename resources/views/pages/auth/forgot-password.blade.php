@extends('layouts.auth')

@section('title', 'Forgot Password - Vendora')

@section('content')
    <x-auth.auth-card image="{{ asset('assets/images/forgot.png') }}" title='Forgot Password?'
        subtitle='Enter your registered email address to receive a one-time verification code'>
        <form action="#" method="POST" class="space-y-4">
            @csrf

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

            <!-- Submit Button -->
            <button type="submit"
                class="cursor-pointer w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3 rounded-xl shadow-sm hover:shadow transition-all duration-200 flex items-center justify-center gap-2 mt-2">
                <span>Send OTP</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </form>

        <x-slot:social-auth>
            <x-auth.auth-social-buttons />
        </x-slot:social-auth>

        <x-slot:footer>
            Remember your password?
            <a href="{{ route('signin') }}" class="font-bold text-[#00875A] hover:underline">Sign In</a>
        </x-slot:footer>
    </x-auth.auth-card>
@endsection
