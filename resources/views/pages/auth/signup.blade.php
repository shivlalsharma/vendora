@extends('layouts.auth')

@section('title', 'Sign Up - Vendora')

@push('styles')
    <!-- Preconnect to flag CDN for zero-latency flag rendering -->
    <link rel="preconnect" href="https://flagcdn.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">
    @vite('resources/css/pages/auth.css')
@endpush

@section('content')
    <x-auth.auth-card image="{{ asset('assets/images/signup.webp') }}" leftWidth="48%" rightWidth="52%"
        title='Create your account' subtitle='Join Vendora and be part of a growing marketplace of amazing products.'>

        <form action="#" method="POST" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                <x-auth.input-field name="first_name" id="first_name" type="text" required placeholder='First Name'>
                    <x-slot:icon>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </x-slot:icon>
                </x-auth.input-field>

                <x-auth.input-field name="last_name" id="last_name" type="text" required placeholder='Last Name'>
                    <x-slot:icon>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </x-slot:icon>
                </x-auth.input-field>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                <x-auth.input-field name="email" id="email" type="email" required placeholder='Email Address'>
                    <x-slot:icon>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
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
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </x-slot:icon>
                    <x-slot:toggle-btn>
                        <button type="button"
                            class="toggle-password-btn cursor-pointer absolute right-3.5 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <svg class="eye-icon w-4.5 h-4.5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </x-slot:toggle-btn>
                </x-auth.input-field>

                <x-auth.input-field name="password_confirmation" id="password_confirmation" type="password" required
                    placeholder='Confirm Password'>
                    <x-slot:icon>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </x-slot:icon>
                    <x-slot:toggle-btn>
                        <button type="button"
                            class="toggle-password-btn cursor-pointer absolute right-3.5 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <svg class="eye-icon w-4.5 h-4.5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
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
@endsection

@push('scripts')
    @vite(['resources/js/pages/auth/phone-input.js', 'resources/js/pages/auth/toggle-password.js'])
@endpush
