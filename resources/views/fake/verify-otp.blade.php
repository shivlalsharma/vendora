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
            <div class="w-full lg:w-[45%] flex flex-col justify-center px-4 sm:px-6 lg:px-8 py-2 sm:py-4">

                <!-- Heading -->
                <div class="mb-6">
                    <h2 class="text-2xl sm:text-[26px] font-bold text-[#0B1527] tracking-tight">Verify OTP</h2>
                    <p class="text-xs sm:text-sm text-gray-500 mt-1 font-medium">
                        Enter the 6-digit code sent to <br class="hidden sm:block">
                        <span class="font-semibold text-gray-700">{{ session('email', 'you@example.com') }}</span>
                    </p>
                </div>

                <!-- OTP Form -->
                <form id="otpForm" action="#" method="POST" class="space-y-5">
                    @csrf
                    <input type="hidden" name="email" value="{{ session('email', request('email')) }}">
                    <input type="hidden" id="fullOtp" name="otp" value="">

                    <!-- 6 Digit Input Boxes -->
                    <div>
                        <div id="otpContainer" class="flex items-center justify-between gap-2">
                            <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                data-index="0"
                                class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                            <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                data-index="1"
                                class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                            <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                data-index="2"
                                class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                            <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                data-index="3"
                                class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                            <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                data-index="4"
                                class="otp-digit w-10 h-12 sm:w-12 sm:h-14 text-center text-lg sm:text-xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl caret-[#00875A] outline-none transition-colors shadow-xs">
                            <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                data-index="5"
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
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Code expires in <strong id="timer"
                                class="text-[#00875A] font-bold">04:52</strong></span>
                    </div>

                    <!-- Verify Code Submit Button -->
                    <button type="submit"
                        class="w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3 rounded-xl shadow-sm hover:shadow transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer">
                        <span>Verify Code</span>
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

                <!-- Resend OTP Button -->
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

                <!-- Back to Login Link -->
                <p class="text-center text-xs mt-6 mb-2">
                    <a href="{{ route('signin') }}" class="font-bold text-[#00875A] hover:underline">
                        Back to Login
                    </a>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.otp-digit');
            const fullOtpInput = document.getElementById('fullOtp');
            const otpForm = document.getElementById('otpForm');

            // Dynamically style border on focus/blur
            inputs.forEach((input, index) => {
                input.addEventListener('focus', function() {
                    inputs.forEach(i => i.classList.remove('border-2', 'border-[#00875A]'));
                    input.classList.remove('border', 'border-gray-200');
                    input.classList.add('border-2', 'border-[#00875A]');
                });

                input.addEventListener('blur', function() {
                    if (!input.value) {
                        input.classList.remove('border-2', 'border-[#00875A]');
                        input.classList.add('border', 'border-gray-200');
                    }
                });

                // Auto-move forward on type
                input.addEventListener('input', function(e) {
                    const val = e.target.value.replace(/[^0-9]/g, '');
                    e.target.value = val;

                    if (val && index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                    syncFullOtp();
                });

                // Backspace moves backward
                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Backspace' && !e.target.value && index > 0) {
                        inputs[index - 1].focus();
                    }
                });
            });

            // Ensure 1st box is focused immediately on page load
            if (inputs.length > 0) {
                inputs[0].focus();
                inputs[0].classList.remove('border', 'border-gray-200');
                inputs[0].classList.add('border-2', 'border-[#00875A]');
            }

            // Handle Paste entire 6-digit code
            inputs[0].addEventListener('paste', function(e) {
                e.preventDefault();
                const pasteData = (e.clipboardData || window.clipboardData).getData('text').trim();
                const digits = pasteData.replace(/\D/g, '').split('').slice(0, 6);

                digits.forEach((digit, i) => {
                    if (inputs[i]) {
                        inputs[i].value = digit;
                        inputs[i].classList.remove('border', 'border-gray-200');
                        inputs[i].classList.add('border-2', 'border-[#00875A]');
                    }
                });

                if (digits.length === 6) {
                    inputs[5].focus();
                } else if (digits.length > 0 && digits.length < 6) {
                    inputs[digits.length].focus();
                }
                syncFullOtp();
            });

            function syncFullOtp() {
                let code = '';
                inputs.forEach(i => code += i.value);
                fullOtpInput.value = code;
            }

            otpForm.addEventListener('submit', function() {
                syncFullOtp();
            });

            // Countdown Timer (04:52)
            let duration = (4 * 60) + 52;
            const timerDisplay = document.getElementById('timer');

            const countdownInterval = setInterval(() => {
                const minutes = Math.floor(duration / 60);
                const seconds = duration % 60;

                timerDisplay.textContent =
                    `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

                if (--duration < 0) {
                    clearInterval(countdownInterval);
                    timerDisplay.textContent = '00:00';
                }
            }, 1000);
        });
    </script>

</body>

</html>
