@extends('layouts.auth')

@section('title', 'Sign In - Vendora')

@section('content')
    <main class="w-full container mx-auto flex-1 flex items-center justify-center sm:px-10 md:pt-4 md:pb-8">
        <div
            class="w-full bg-white sm:rounded-[28px] sm:border sm:border-gray-100 sm:shadow-[0_10px_35px_rgba(0,0,0,0.03)] overflow-hidden flex flex-col lg:flex-row sm:p-5 gap-6 lg:gap-10">
            <div class="w-full lg:w-[60%] overflow-hidden sm:rounded-2xl">
                <img src="{{ asset('assets/images/signup.png') }}" alt="Join Vendora Today - Multi-Vendor Marketplace"
                    class="block w-full h-full object-cover">
            </div>

            <div class="w-full lg:w-[40%] flex flex-col justify-center px-6 lg:px-8 py-2 sm:py-4">
                <div class="mb-6">
                    <h2 class="text-2xl sm:text-[26px] font-bold text-[#0B1527] tracking-tight">Create your account</h2>
                    <p class="text-xs sm:text-sm text-gray-500 mt-1 font-medium">
                        Join Vendora and be part of a growing marketplace of amazing products.
                    </p>
                </div>

                <!-- Form -->
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                        <!-- First Name -->
                        <div class="relative flex items-center">
                            <span class="absolute left-3.5 text-gray-400 pointer-events-none">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                    viewBox="0 0 24 24">
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
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                    viewBox="0 0 24 24">
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
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
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
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
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
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <input type="password" id="password" name="password" required placeholder="Password"
                            class="w-full pl-11 pr-11 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">

                        <!-- Toggle Password Visibility -->
                        <button type="button" id="togglePassword"
                            class="absolute right-3.5 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <svg id="eyeIcon1" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
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
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            placeholder="Confirm Password"
                            class="w-full pl-11 pr-11 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">

                        <!-- Toggle Confirm Password Visibility -->
                        <button type="button" id="toggleConfirmPassword"
                            class="absolute right-3.5 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <svg id="eyeIcon2" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
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
                                Conditions</a> and <a href="#privacy"
                                class="text-[#00875A] font-bold hover:underline">Privacy Policy</a>.
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3 rounded-xl shadow-sm hover:shadow transition-all duration-200 mt-2">
                        Create Account
                    </button>
                </form>

                <!-- Divider -->
                <div class="relative my-6 flex items-center justify-center">
                    <div class="border-t border-gray-200 w-full"></div>
                    <span class="bg-white px-3 text-[11px] font-semibold text-gray-400 absolute">or</span>
                </div>

                <!-- Social Authentication Buttons -->
                <div class="space-y-2.5">
                    <!-- Google Button -->
                    <a href="#google-auth"
                        class="w-full border border-gray-200 hover:border-gray-300 bg-white hover:bg-gray-50/70 text-gray-700 font-semibold text-xs sm:text-sm py-2.5 px-4 rounded-xl flex items-center justify-center gap-2.5 shadow-xs transition duration-200">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                            <path fill="#4285F4"
                                d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.66v3.05h3.87c2.26-2.09 3.57-5.17 3.57-9.15z" />
                            <path fill="#34A853"
                                d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.87-3.05c-1.08.72-2.45 1.16-4.06 1.16-3.13 0-5.78-2.11-6.73-4.96H1.25v3.15C3.25 21.36 7.35 24 12 24z" />
                            <path fill="#FBBC05"
                                d="M5.27 14.24c-.25-.72-.38-1.49-.38-2.24s.13-1.52.38-2.24V6.61H1.25C.45 8.22 0 10.05 0 12s.45 3.78 1.25 5.39l4.02-3.15z" />
                            <path fill="#EA4335"
                                d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.35 0 3.25 2.64 1.25 6.61l4.02 3.15c.95-2.85 3.6-4.96 6.73-4.96z" />
                        </svg>
                        <span>Continue with Google</span>
                    </a>

                    <!-- Apple Button -->
                    <a href="#apple-auth"
                        class="w-full border border-gray-200 hover:border-gray-300 bg-white hover:bg-gray-50/70 text-gray-800 font-semibold text-xs sm:text-sm py-2.5 px-4 rounded-xl flex items-center justify-center gap-2.5 shadow-xs transition duration-200">
                        <svg class="w-4 h-4 fill-current text-black" viewBox="0 0 170 170">
                            <path
                                d="M150.37 130.25c-2.45 5.66-5.35 10.87-8.71 15.66-4.58 6.53-8.33 11.05-11.22 13.56-4.48 4.12-9.28 6.23-14.42 6.35-3.69 0-8.14-1.05-13.32-3.18-5.19-2.12-9.97-3.17-14.34-3.17-4.58 0-9.49 1.05-14.75 3.17-5.26 2.13-9.5 3.24-12.74 3.35-4.35.13-9.16-1.9-14.42-6.08-3.69-3.04-7.67-7.81-11.96-14.34-5.99-9.13-10.74-19.65-14.26-31.56-3.52-11.9-5.28-23.08-5.28-33.53 0-14.56 3.75-26.68 11.25-36.37 7.5-9.68 16.74-14.6 27.71-14.74 4.58 0 9.87 1.25 15.86 3.76 5.99 2.5 9.77 3.76 11.33 3.76 1.34 0 5.34-1.32 12-3.95 6.67-2.64 12.3-3.83 16.9-3.58 13.06.67 23.37 5.76 30.93 15.28-11.5 6.97-17.14 16.5-16.92 28.61.22 9.57 3.86 17.58 10.92 24.03 7.07 6.45 15.42 10.15 25.07 11.11-2.23 6.96-5.06 14.07-8.49 21.32zM119.22 33.15c0-7.25 2.65-14.09 7.95-20.52 5.3-6.42 11.83-10.53 19.59-12.33.22 1.35.34 2.58.34 3.7 0 7.37-2.79 14.44-8.38 21.2-5.59 6.77-12.38 10.87-20.37 12.32-.23-1.46-.35-2.92-.35-4.37z" />
                        </svg>
                        <span>Continue with Apple</span>
                    </a>
                </div>

                <!-- Footer Sign In Link -->
                <p class="text-center text-xs text-gray-500 mt-5 mb-4 font-medium">
                    Already have an account?
                    <a href="{{ route('signin') }}" class="font-bold text-[#00875A] hover:underline">Sign in</a>
                </p>
            </div>

        </div>
    </main>
@endsection

@push('scripts')
    @vite('resources/js/pages/auth/signup.js')
@endpush
