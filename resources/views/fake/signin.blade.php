<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in to your account - Vendora</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-[#F8FAFC] min-h-screen flex flex-col justify-between text-gray-800 antialiased font-['Plus_Jakarta_Sans',sans-serif]">

    <!-- TOP HEADER -->
    <header class="w-full">
        <div class="max-w-[1360px] mx-auto px-6 sm:px-10 py-5 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <img src="{{ asset('assets/images/logo.png') }}" class="h-9 sm:h-11 w-auto object-contain"
                    alt="Vendora">
            </a>

            <!-- Help Link -->
            <a href="#help" class="text-sm font-semibold text-gray-600 hover:text-[#00875A] transition-colors">
                Need Help?
            </a>
        </div>
    </header>

    <!-- MAIN CONTAINER -->
    <main class="flex-1 flex items-center justify-center sm:px-10 md:pt-4 md:pb-8">
        <div
            class="w-full max-w-[1360px] bg-white sm:rounded-[28px] sm:border sm:border-gray-100 sm:shadow-[0_10px_35px_rgba(0,0,0,0.03)] overflow-hidden flex flex-col lg:flex-row sm:p-5 gap-6 lg:gap-10">

            <!-- ================= LEFT PROMOTIONAL SHOWCASE ================= -->

            <div class="w-full lg:w-[48%] overflow-hidden sm:rounded-2xl">
                <img src="{{ asset('assets/images/login.png') }}" alt="Vendora marketplace promotional panel"
                    class="block w-full h-full object-cover">
            </div>

            <!-- ================= RIGHT LOGIN FORM ================= -->
            <div class="w-full lg:w-[52%] flex flex-col justify-center px-6 lg:px-8 py-2 sm:py-4">
                <!-- Heading -->
                <div class="mb-6">
                    <h2 class="text-2xl sm:text-[26px] font-bold text-[#0B1527] tracking-tight">Sign in to your account
                    </h2>
                    <p class="text-xs sm:text-sm text-gray-500 mt-1 font-medium">Enter your email and password to
                        continue</p>
                </div>

                <!-- Form -->
                <form action="#" method="POST" class="space-y-4">
                    @csrf

                    <!-- Email Address -->
                    <div class="space-y-1.5">
                        <label for="email" class="block text-xs sm:text-sm font-semibold text-gray-800">
                            Email Address
                        </label>
                        <div class="relative flex items-center">
                            <span class="absolute left-3.5 text-gray-400 pointer-events-none">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                                placeholder="you@example.com"
                                class="w-full pl-11 pr-4 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">
                        </div>
                        @error('email')
                        <p class="text-xs text-red-500 mt-1 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="space-y-1.5">
                        <label for="password" class="block text-xs sm:text-sm font-semibold text-gray-800">
                            Password
                        </label>
                        <div class="relative flex items-center">
                            <span class="absolute left-3.5 text-gray-400 pointer-events-none">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                            <input type="password" id="password" name="password" required
                                placeholder="Enter your password"
                                class="w-full pl-11 pr-11 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">

                            <!-- Toggle Password Visibility -->
                            <button type="button" id="togglePassword"
                                class="absolute right-3.5 text-gray-400 hover:text-gray-600 focus:outline-none">
                                <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                        <p class="text-xs text-red-500 mt-1 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between pt-1">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="remember"
                                class="w-4 h-4 rounded text-[#00875A] border-gray-300 focus:ring-[#00875A] accent-[#00875A] cursor-pointer">
                            <span class="text-xs font-semibold text-gray-700">Remember me</span>
                        </label>
                        <a href="{{ Route::has('password.request') ? route('password.request') : '#forgot' }}"
                            class="text-xs font-bold text-[#00875A] hover:underline">
                            Forgot password?
                        </a>
                    </div>

                    <!-- Sign In Submit Button -->
                    <button type="submit"
                        class="w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3 rounded-xl shadow-sm hover:shadow transition-all duration-200 mt-2">
                        Sign In
                    </button>
                </form>

                <!-- Divider -->
                <div class="relative my-6 flex items-center justify-center">
                    <div class="border-t border-gray-200 w-full"></div>
                    <span class="bg-white px-3 text-[11px] font-semibold text-gray-400 absolute">or continue with</span>
                </div>

                <!-- Google Authentication Button -->
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

                <!-- Create Account Link -->
                <p class="text-center text-xs text-gray-500 mt-6 mb-4 font-medium">
                    Don't have an account?
                    <a href="{{ Route::has('register') ? route('register') : '#register' }}"
                        class="font-bold text-[#00875A] hover:underline">Create account</a>
                </p>
            </div>

        </div>
    </main>

    <!-- FOOTER LINKS -->
    <footer class="w-full py-5">
        <div
            class="max-w-[1360px] mx-auto px-6 sm:px-10 flex flex-col-reverse sm:flex-row items-center justify-between gap-4 text-xs text-gray-500">
            <p>&copy; {{ date('Y') }} Vendora. All rights reserved.</p>
            <div class="flex items-center gap-2 sm:gap-4 text-xs font-medium">
                <a href="#terms" class="hover:text-gray-700 transition">Terms &amp; Conditions</a>
                <span class="text-gray-300">|</span>
                <a href="#privacy" class="hover:text-gray-700 transition">Privacy Policy</a>
                <span class="text-gray-300">|</span>
                <a href="#help" class="hover:text-gray-700 transition">Help Center</a>
            </div>
        </div>
    </footer>

    <!-- PASSWORD VISIBILITY TOGGLE SCRIPT -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('togglePassword').addEventListener('click', togglePasswordVisibility);

        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                `;
            }
        }
    });
    </script>
</body>

</html>