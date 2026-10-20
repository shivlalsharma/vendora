<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Vendora</title>

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
        <div class="container mx-auto px-6 sm:px-10 py-5 flex items-center justify-between">
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
    <main class="w-full container mx-auto flex-1 flex items-center justify-center sm:px-10 md:pt-4 md:pb-8">
        <div
            class="w-full bg-white sm:rounded-[28px] sm:border sm:border-gray-100 sm:shadow-[0_10px_35px_rgba(0,0,0,0.03)] overflow-hidden flex flex-col lg:flex-row sm:p-5 gap-6 lg:gap-10">

            <!-- ================= LEFT PROMOTIONAL SHOWCASE ================= -->
            <div
                class="w-full lg:w-[60%] bg-gradient-to-b from-[#EBF7F1] via-[#EBF7F1] to-[#DEF2E8] sm:rounded-2xl p-6 sm:p-9 flex flex-col justify-between relative overflow-hidden">

                <!-- Top Content -->
                <div class="space-y-3 sm:space-y-4 z-10">
                    <span class="inline-block bg-[#D2EFE2] text-[#006C47] text-xs font-bold px-3 py-1 rounded-md">
                        Reset Your Password
                    </span>

                    <h2
                        class="text-2xl sm:text-3xl lg:text-[34px] font-extrabold text-[#0B1527] leading-[1.15] tracking-tight">
                        Don’t Worry! <br>
                        We’ll Help You <br>
                        <span class="text-[#00875A]">Get Back In.</span>
                    </h2>

                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed max-w-sm font-medium">
                        Enter the email address associated with your account and we'll send you a link to reset your
                        password.
                    </p>
                </div>

                <!-- 3D Security Envelope & Key Illustration -->
                <div class="relative w-full py-8 sm:py-10 flex items-center justify-center z-10">
                    <div class="relative w-64 sm:w-72 h-40 flex items-center justify-center">

                        <!-- Plant on Left -->
                        <div class="absolute -left-2 bottom-0 z-10">
                            <div class="w-14 h-18 relative flex flex-col items-center">
                                <div
                                    class="w-12 h-12 bg-gradient-to-tr from-[#1B5E20] via-[#2E7D32] to-[#4CAF50] rounded-t-full rounded-b-xl shadow-xs transform -rotate-6">
                                </div>
                                <div
                                    class="w-8 h-8 bg-gradient-to-tl from-[#2E7D32] to-[#66BB6A] rounded-full absolute -top-1 right-0 opacity-90">
                                </div>
                                <div
                                    class="w-9 h-8 bg-white rounded-b-lg border border-gray-200/80 shadow-md flex items-center justify-center mt-[-5px]">
                                    <div class="w-7 h-1 bg-gray-100 rounded-full mb-4"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Open Security Envelope (Centerpiece) -->
                        <div class="relative z-20 flex flex-col items-center">
                            <!-- Paper Letter with Lock -->
                            <div
                                class="w-36 h-24 bg-white rounded-xl shadow-lg border border-gray-100 flex flex-col items-center justify-center transform -translate-y-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-[#E8F5E9] flex items-center justify-center text-[#00875A] shadow-inner">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Emerald Envelope Body -->
                            <div
                                class="w-44 h-22 bg-gradient-to-br from-[#00A86B] via-[#00875A] to-[#006845] rounded-b-2xl shadow-xl mt-[-40px] relative overflow-hidden flex items-end justify-center">
                                <div
                                    class="w-0 h-0 border-l-[88px] border-l-transparent border-r-[88px] border-r-transparent border-t-[46px] border-t-white/15 absolute top-0">
                                </div>
                            </div>
                        </div>

                        <!-- Flying Paper Plane & Dotted Line -->
                        <div class="absolute -right-2 top-0 z-30">
                            <svg class="w-20 h-16" viewBox="0 0 100 80" fill="none">
                                <path d="M 0 65 Q 35 60, 50 40 T 75 25" stroke="#00875A" stroke-width="2"
                                    stroke-dasharray="3,3" fill="none" opacity="0.6" />
                                <path d="M 68 20 L 95 10 L 80 35 L 75 23 Z" fill="#2E7D32" />
                                <path d="M 68 20 L 95 10 L 75 23 Z" fill="#66BB6A" />
                            </svg>
                        </div>

                    </div>
                </div>

                <!-- 3 Bottom Trust Features -->
                <div class="grid grid-cols-3 gap-2 pt-4 border-t border-[#CCE8DC] z-10">
                    <div class="flex items-center gap-2">
                        <div class="text-[#00875A] shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <span class="text-[11px] font-semibold text-gray-700 leading-tight">Secure<br>Process</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-[#00875A] shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <span class="text-[11px] font-semibold text-gray-700 leading-tight">Quick<br>Recovery</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-[#00875A] shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                        <span class="text-[11px] font-semibold text-gray-700 leading-tight">Get Back
                            to<br>Shopping</span>
                    </div>
                </div>

            </div>

            <!-- ================= RIGHT FORGOT PASSWORD FORM ================= -->
            <div class="w-full lg:w-[40%] flex flex-col justify-center px-6 lg:px-8 py-2 sm:py-4">
                <!-- Heading -->
                <div class="mb-6">
                    <h2 class="text-2xl sm:text-[26px] font-bold text-[#0B1527] tracking-tight">Forgot Password?
                    </h2>
                    <p class="text-xs sm:text-sm text-gray-500 mt-1 font-medium">Enter your email address and we’ll
                        send you a password reset link.</p>
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
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                autofocus placeholder="you@example.com"
                                class="w-full pl-11 pr-4 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">
                        </div>
                        @error('email')
                            <p class="text-xs text-red-500 mt-1 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Sign In Submit Button -->
                    <button type="submit"
                        class="w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3 rounded-xl shadow-sm hover:shadow transition-all duration-200 flex items-center justify-center gap-2 mt-2">
                        <span>Send Reset Link</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>

                <!-- Divider -->
                <div class="relative my-6 flex items-center justify-center">
                    <div class="border-t border-gray-200 w-full"></div>
                    <span class="bg-white px-3 text-[11px] font-semibold text-gray-400 absolute">or</span>
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
                    Remember your password?
                    <a href="{{ route('signin') }}" class="font-bold text-[#00875A] hover:underline">Sign In</a>
                </p>
            </div>


        </div>
    </main>

    <!-- FOOTER LINKS -->
    <footer class="w-full py-5">
        <div
            class="container mx-auto px-6 sm:px-10 flex flex-col-reverse sm:flex-row items-center justify-between gap-4 text-xs text-gray-500">
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

</body>

</html>
