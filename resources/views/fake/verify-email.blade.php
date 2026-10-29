<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify your email - Vendora</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-[#F8FAFC] min-h-screen flex flex-col justify-between text-gray-800 antialiased font-['Plus_Jakarta_Sans',sans-serif]">

    <!-- ================= TOP HEADER ================= -->
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

    <!-- ================= MAIN CONTAINER ================= -->
    <main class="w-full container mx-auto flex-1 flex items-center justify-center sm:px-6 md:px-10 py-4 sm:py-6">
        <div
            class="w-full max-w-6xl bg-white sm:rounded-[32px] sm:border sm:border-gray-100 sm:shadow-[0_15px_40px_rgba(0,0,0,0.03)] overflow-hidden flex flex-col lg:flex-row p-4 sm:p-5 gap-6 lg:gap-10">

            <!-- ================= LEFT PROMOTIONAL SHOWCASE ================= -->
            <div
                class="w-full lg:w-[48%] bg-gradient-to-br from-[#E9F9F1] via-[#E2F7ED] to-[#D5F3E4] rounded-2xl sm:rounded-[26px] p-6 sm:p-8 flex flex-col justify-between relative overflow-hidden min-h-[460px] lg:min-h-[580px]">

                <!-- Background Geometric Soft Circles -->
                <div class="absolute -top-16 -left-16 w-64 h-64 rounded-full bg-white/40 blur-2xl pointer-events-none">
                </div>
                <div
                    class="absolute top-1/2 -right-20 w-72 h-72 rounded-full bg-[#C2EED7]/50 blur-3xl pointer-events-none">
                </div>

                <!-- Top Copy -->
                <div class="relative z-10">
                    <span
                        class="inline-block px-3 py-1 bg-[#D1F2E2] text-[#00875A] text-xs font-bold rounded-lg mb-3 tracking-wide">
                        Multi-Vendor Marketplace
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0B1527] tracking-tight leading-tight">
                        One last step
                    </h2>
                    <p class="text-xs sm:text-sm text-gray-600 mt-1.5 font-medium leading-relaxed max-w-xs">
                        Verify your email to secure your Vendora account.
                    </p>
                </div>

                <!-- Center 3D Showcase Image -->
                <div class="relative z-10 my-auto py-4 flex items-center justify-center">
                    <img src="{{ asset('assets/images/verify-showcase.png') }}" alt="Secure Shopping with Vendora"
                        class="w-full max-w-[340px] sm:max-w-[390px] h-auto object-contain drop-shadow-md select-none"
                        onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1549465220-1a8b9238cd48?auto=format&fit=crop&w=700&q=80';">
                </div>

                <!-- Bottom 3 Trust Pillars -->
                <div class="relative z-10 pt-4 border-t border-[#CCEEDD] grid grid-cols-3 gap-2 text-center">
                    <!-- Pillar 1 -->
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center text-[#00875A] mb-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <span class="text-[11px] font-bold text-[#0B1527] leading-tight">Account</span>
                        <span class="text-[11px] font-bold text-[#0B1527] leading-tight">Security</span>
                    </div>

                    <!-- Pillar 2 -->
                    <div class="flex flex-col items-center border-x border-[#CCEEDD]">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center text-[#00875A] mb-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="text-[11px] font-bold text-[#0B1527] leading-tight">Verified</span>
                        <span class="text-[11px] font-bold text-[#0B1527] leading-tight">Access</span>
                    </div>

                    <!-- Pillar 3 -->
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center text-[#00875A] mb-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <span class="text-[11px] font-bold text-[#0B1527] leading-tight">Safe</span>
                        <span class="text-[11px] font-bold text-[#0B1527] leading-tight">Shopping</span>
                    </div>
                </div>

            </div>

            <!-- ================= RIGHT VERIFICATION FORM ================= -->
            <div class="w-full lg:w-[52%] flex flex-col justify-center px-4 sm:px-8 lg:px-10 py-6 sm:py-8">

                <!-- Heading & Email Display -->
                <div class="mb-8">
                    <h1 class="text-3xl sm:text-[34px] font-bold text-[#0B1527] tracking-tight">
                        Verify your email
                    </h1>
                    <p class="text-sm text-gray-500 mt-2 font-medium">
                        We’ve sent a 6-digit verification code to
                    </p>

                    <!-- User Email with Change Email Link -->
                    <div class="flex flex-wrap items-center gap-3 mt-2.5">
                        <span class="text-xl sm:text-2xl font-bold text-[#0B1527] tracking-tight">
                            {{ $maskedEmail ?? 'j***@gmail.com' }}
                        </span>

                        <a href="{{ route('signup') }}"
                            class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-bold text-[#00875A] hover:text-[#00744D] hover:underline transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                            <span>Change email</span>
                        </a>
                    </div>
                </div>

                <!-- OTP Verification Form -->
                <form id="otp-form" action="#" method="POST">
                    @csrf
                    <!-- Hidden field consolidating full 6-digit OTP -->
                    <input type="hidden" name="otp" id="otp-consolidated">

                    <!-- 6 OTP Input Boxes -->
                    <div class="grid grid-cols-6 gap-2 sm:gap-3.5 mb-6">
                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" autofocus
                            class="otp-input w-full aspect-square text-center text-xl sm:text-2xl font-bold text-gray-900 bg-white border-2 border-[#00875A] rounded-xl sm:rounded-2xl focus:outline-none focus:border-[#00875A] focus:ring-2 focus:ring-[#00875A]/20 transition shadow-xs">
                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                            class="otp-input w-full aspect-square text-center text-xl sm:text-2xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl sm:rounded-2xl focus:outline-none focus:border-[#00875A] focus:ring-2 focus:ring-[#00875A]/20 transition shadow-xs">
                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                            class="otp-input w-full aspect-square text-center text-xl sm:text-2xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl sm:rounded-2xl focus:outline-none focus:border-[#00875A] focus:ring-2 focus:ring-[#00875A]/20 transition shadow-xs">
                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                            class="otp-input w-full aspect-square text-center text-xl sm:text-2xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl sm:rounded-2xl focus:outline-none focus:border-[#00875A] focus:ring-2 focus:ring-[#00875A]/20 transition shadow-xs">
                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                            class="otp-input w-full aspect-square text-center text-xl sm:text-2xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl sm:rounded-2xl focus:outline-none focus:border-[#00875A] focus:ring-2 focus:ring-[#00875A]/20 transition shadow-xs">
                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                            class="otp-input w-full aspect-square text-center text-xl sm:text-2xl font-bold text-gray-900 bg-white border border-gray-200 rounded-xl sm:rounded-2xl focus:outline-none focus:border-[#00875A] focus:ring-2 focus:ring-[#00875A]/20 transition shadow-xs">
                    </div>

                    @error('otp')
                        <p class="text-xs text-red-500 font-semibold mb-4 text-center">{{ $message }}</p>
                    @enderror

                    <!-- Submit Button -->
                    <button type="submit" id="verify-button"
                        class="w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm sm:text-base py-3.5 sm:py-4 rounded-xl sm:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 flex items-center justify-center gap-2">
                        <span>Verify &amp; Continue</span>
                    </button>
                </form>

                <!-- Horizontal Divider Line -->
                <div class="w-full border-t border-[#EEF2F6] my-6"></div>

                <!-- Resend Section -->
                <div class="text-center space-y-1.5">
                    <p class="text-[13px] sm:text-sm text-[#334155] font-medium">
                        Didn’t receive the code?
                        <button type="button" id="resend-btn"
                            class="text-[#00875A] font-bold underline underline-offset-[3px] decoration-[#00875A] hover:text-[#00724C] transition duration-150 cursor-pointer">
                            Resend code
                        </button>
                    </p>

                    <p class="text-xs sm:text-[13px] text-[#8E9CAE] font-normal">
                        Resend available in <span id="timer">00:30</span>
                    </p>
                </div>

                <!-- Bottom Security Notice Banner -->
                <div
                    class="mt-6 bg-[#F4F7F6] rounded-xl sm:rounded-2xl py-3.5 px-4 flex items-center justify-center gap-2">
                    <!-- Green Shield Check Icon -->
                    <svg class="w-[18px] h-[18px] text-[#00875A] shrink-0" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        <path d="m9 12 2 2 4-4" />
                    </svg>
                    <span class="text-xs sm:text-[13px] text-[#4B5868] font-normal">
                        Never share your verification code with anyone.
                    </span>
                </div>

            </div>

        </div>
    </main>

    <!-- ================= FOOTER LINKS ================= -->
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

    <!-- ================= OTP & TIMER JAVASCRIPT ================= -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const inputs = document.querySelectorAll('.otp-input');
            const hiddenOtp = document.getElementById('otp-consolidated');
            const form = document.getElementById('otp-form');
            const resendBtn = document.getElementById('resend-btn');
            const timerDisplay = document.getElementById('timer');
            const countdownWrapper = document.getElementById('countdown-wrapper');

            // 1. Auto-focus, Advance, Backspace and Paste Handling
            inputs.forEach((input, index) => {
                input.addEventListener('input', (e) => {
                    // Filter non-digits
                    input.value = input.value.replace(/[^0-9]/g, '');

                    // Style active vs non-active border
                    inputs.forEach(el => el.classList.replace('border-[#00875A]',
                        'border-gray-200'));
                    inputs.forEach(el => el.classList.remove('border-2'));

                    if (input.value.length === 1) {
                        if (index < inputs.length - 1) {
                            inputs[index + 1].focus();
                            inputs[index + 1].classList.replace('border-gray-200',
                                'border-[#00875A]');
                            inputs[index + 1].classList.add('border-2');
                        }
                    }
                    syncOtp();
                });

                input.addEventListener('keydown', (e) => {
                    if (e.key === 'Backspace' && !input.value && index > 0) {
                        inputs[index - 1].focus();
                        inputs[index - 1].value = '';
                        inputs.forEach(el => el.classList.replace('border-[#00875A]',
                            'border-gray-200'));
                        inputs[index - 1].classList.replace('border-gray-200', 'border-[#00875A]');
                        inputs[index - 1].classList.add('border-2');
                        syncOtp();
                    }
                });

                // Paste entire 6-digit code support
                input.addEventListener('paste', (e) => {
                    e.preventDefault();
                    const pasteData = (e.clipboardData || window.clipboardData).getData('text')
                        .trim().replace(/[^0-9]/g, '');
                    if (pasteData) {
                        pasteData.split('').slice(0, inputs.length).forEach((char, i) => {
                            inputs[i].value = char;
                        });
                        const focusTarget = Math.min(pasteData.length, inputs.length - 1);
                        inputs[focusTarget].focus();
                        syncOtp();
                    }
                });

                input.addEventListener('focus', () => {
                    inputs.forEach(el => {
                        el.classList.replace('border-[#00875A]', 'border-gray-200');
                        el.classList.remove('border-2');
                    });
                    input.classList.replace('border-gray-200', 'border-[#00875A]');
                    input.classList.add('border-2');
                });
            });

            function syncOtp() {
                let code = '';
                inputs.forEach(i => code += i.value);
                hiddenOtp.value = code;
            }

            form.addEventListener('submit', (e) => {
                syncOtp();
                if (hiddenOtp.value.length < 6) {
                    e.preventDefault();
                    alert('Please enter the full 6-digit verification code.');
                }
            });

            // 2. Resend Countdown Timer (30 seconds)
            let countdown = 30;
            const interval = setInterval(() => {
                countdown--;
                const seconds = countdown < 10 ? `0${countdown}` : countdown;
                timerDisplay.textContent = `00:${seconds}`;

                if (countdown <= 0) {
                    clearInterval(interval);
                    countdownWrapper.classList.add('hidden');
                    resendBtn.disabled = false;
                    resendBtn.classList.remove('text-gray-400', 'cursor-not-allowed');
                    resendBtn.classList.add('text-[#00875A]', 'hover:underline', 'cursor-pointer');
                }
            }, 1000);

            // Optional: Resend Click handler
            resendBtn.addEventListener('click', () => {
                if (!resendBtn.disabled) {
                    // Trigger your resend route via fetch/axios or form submit
                    window.location.href = "#";
                }
            });
        });
    </script>
</body>

</html>
