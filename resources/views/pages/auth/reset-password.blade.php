@extends('layouts.auth')

@section('title', 'Reset Password - Vendora')
@section('content')
    <x-auth.auth-card image="{{ asset('assets/images/reset-password.webp') }}" title='Reset Your Password'
        subtitle="Enter your new password below. Make sure it is at least 8 characters long and includes a number
                        or special character.">
        <form action="#" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="token" value="{{ request()->route('token') }}">
            <input type="hidden" name="email" value="{{ request('email') }}">

            <!-- Password -->
            <x-auth.input-field name="passwword" id="password" type="password" required placeholder='New Password'>
                <x-slot:icon>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </x-slot:icon>
                <x-slot:toggle-btn>
                    <button type="button" id="togglePassword"
                        class="cursor-pointer absolute right-3.5 text-gray-400 hover:text-gray-600 focus:outline-none">
                        <svg id="eyeIcon1" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </x-slot:toggle-btn>
            </x-auth.input-field>

            <!-- 4-Segment Strength Bars -->
            <div class="flex items-center gap-1.5 pt-1">
                <div id="bar1" class="h-1 flex-1 rounded-full bg-gray-200 transition-colors"></div>
                <div id="bar2" class="h-1 flex-1 rounded-full bg-gray-200 transition-colors"></div>
                <div id="bar3" class="h-1 flex-1 rounded-full bg-gray-200 transition-colors"></div>
                <div id="bar4" class="h-1 flex-1 rounded-full bg-gray-200 transition-colors"></div>
            </div>

            <!-- Strength Hint Indicator -->
            <div class="flex items-center justify-between text-[11px] text-gray-500 font-medium">
                <span id="strengthText">Password strength</span>
                <span>Minimum 8 characters</span>
            </div>

            <x-auth.input-field name="passwword_confirmation" id="password_confirmation" type="password" required
                placeholder='Confirm Password'>
                <x-slot:icon>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </x-slot:icon>
                <x-slot:toggle-btn>
                    <button type="button" id="toggleConfirmPassword"
                        class="cursor-pointer absolute right-3.5 text-gray-400 hover:text-gray-600 focus:outline-none">
                        <svg id="eyeIcon2" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </x-slot:toggle-btn>
            </x-auth.input-field>

            <!-- Submit Button -->
            <x-auth.submit-btn class="flex items-center justify-center gap-2">
                <span>Reset Password</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </x-auth.submit-btn>
        </form>

        <x-slot:social-auth>
            <x-auth.auth-social-buttons />
        </x-slot:social-auth>

        <x-slot:footer>
            <a href="{{ route('signin') }}"
                class="inline-flex items-center gap-1.5 text-xs font-bold text-[#00875A] hover:underline">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                <span>Back to Login</span>
        </x-slot:footer>
    </x-auth.auth-card>
@endsection

@push('scripts')
    @vite('resources/js/pages/auth/signup.js')
    @vite('resources/js/pages/auth/reset-password.js')
@endpush
