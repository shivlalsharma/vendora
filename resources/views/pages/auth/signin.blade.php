@extends('layouts.auth')

@section('title', 'Sign In - Vendora')

@section('content')
    <x-auth.auth-card image="{{ asset('assets/images/signin.webp') }}" title='Sign in to your account'
        subtitle='Enter your registered email and password to
                     securely access your account'>
        <form action="#" method="POST" class="space-y-4">
            @csrf

            <x-auth.input-field name="email" id="email" type="email" required placeholder='Email Address'>
                <x-slot:icon>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </x-slot:icon>
            </x-auth.input-field>

            <x-auth.input-field name="passwword" id="password" type="password" required placeholder='Password'>
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

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between pt-1">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="remember"
                        class="w-4 h-4 rounded text-[#00875A] border-gray-300 focus:ring-[#00875A] accent-[#00875A] cursor-pointer">
                    <span class="text-xs font-semibold text-gray-700">Remember me</span>
                </label>
                <a href="{{ route('forgot-password') }}" class="text-xs font-bold text-[#00875A] hover:underline">
                    Forgot password?
                </a>
            </div>

            <!-- Submit Button -->
            <x-auth.submit-btn>
                Sign In
            </x-auth.submit-btn>
        </form>

        <x-slot:social-auth>
            <x-auth.auth-social-buttons />
        </x-slot:social-auth>

        <x-slot:footer>
            Don't have an account?
            <a href="{{ route('signup') }}" class="font-bold text-[#00875A] hover:underline">Create account</a>
        </x-slot:footer>
    </x-auth.auth-card>
@endsection

@push('scripts')
    @vite('resources/js/pages/auth/signup.js')
@endpush
