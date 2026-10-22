<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a Vendor - Vendora</title>

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

    <!-- MAIN MULTI-STEP CONTAINER -->
    <main class="w-full container mx-auto flex-1 flex items-center justify-center sm:px-6 md:px-10 md:pt-2 md:pb-8">
        <div
            class="bg-white sm:rounded-[28px] sm:border sm:border-gray-100 sm:shadow-[0_10px_35px_rgba(0,0,0,0.03)] overflow-hidden flex flex-col lg:flex-row sm:p-5 gap-6 lg:gap-8 w-full max-w-6xl">

            <!-- ================= LEFT PROMOTIONAL SHOWCASE (CHANGES PER STEP) ================= -->
            <div
                class="w-full lg:w-[48%] bg-gradient-to-b from-[#EBF7F1] via-[#EBF7F1] to-[#DEF2E8] sm:rounded-2xl p-6 sm:p-8 flex flex-col justify-between relative overflow-hidden">

                <!-- STEP 1 LEFT CONTENT -->
                <div id="step1Left" class="step-left-content space-y-3 z-10">
                    <span class="inline-block bg-[#D2EFE2] text-[#006C47] text-xs font-bold px-3 py-1 rounded-md">
                        SELL ON VENDORA
                    </span>

                    <h2
                        class="text-2xl sm:text-3xl lg:text-[34px] font-extrabold text-[#0B1527] leading-[1.15] tracking-tight">
                        Turn Your Products <br>
                        <span class="text-[#00875A]">Into Profit</span>
                    </h2>

                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed max-w-sm font-medium">
                        Join Vendora’s growing marketplace and reach more customers with a store of your own.
                    </p>
                </div>

                <!-- STEP 2 LEFT CONTENT (Initially Hidden) -->
                <div id="step2Left" class="step-left-content space-y-3 z-10 hidden">
                    <span class="inline-block bg-[#D2EFE2] text-[#006C47] text-xs font-bold px-3 py-1 rounded-md">
                        STORE SETUP
                    </span>

                    <h2
                        class="text-2xl sm:text-3xl lg:text-[34px] font-extrabold text-[#0B1527] leading-[1.15] tracking-tight">
                        Build Your <br>
                        <span class="text-[#00875A]">Store Identity</span>
                    </h2>

                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed max-w-sm font-medium">
                        Create a unique store name, add your logo, and tell customers what makes your brand special.
                    </p>
                </div>

                <!-- STEP 3 LEFT CONTENT (Initially Hidden) -->
                <div id="step3Left" class="step-left-content space-y-3 z-10 hidden">
                    <span class="inline-block bg-[#D2EFE2] text-[#006C47] text-xs font-bold px-3 py-1 rounded-md">
                        VERIFICATION
                    </span>

                    <h2
                        class="text-2xl sm:text-3xl lg:text-[34px] font-extrabold text-[#0B1527] leading-[1.15] tracking-tight">
                        Verify Your <br>
                        Account &amp; Get <br>
                        <span class="text-[#00875A]">Ready to Sell</span>
                    </h2>

                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed max-w-sm font-medium">
                        Complete the verification process to build trust, increase your visibility and start selling on
                        Vendora.
                    </p>
                </div>

                <!-- 3D LIFESTYLE PRODUCT SHOWCASE -->
                <div class="relative w-full py-6 sm:py-8 flex items-center justify-center z-10">
                    <div class="relative w-full max-w-[420px] h-[220px] sm:h-[250px] flex items-center justify-center">
                        <img src="https://images.unsplash.com/photo-1556742049-0a67c5574f73?w=800&auto=format&fit=crop&q=80"
                            alt="Vendora Selling Showcase" class="w-full h-full object-contain filter drop-shadow-lg" />
                    </div>
                </div>

                <!-- 4 TRUST METRICS: STEP 1 -->
                <div id="step1Features"
                    class="step-features grid grid-cols-4 gap-2 pt-4 border-t border-[#CCE8DC] z-10 text-center">
                    <div class="flex flex-col items-center">
                        <div class="text-[#00875A] mb-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <span class="text-[10px] sm:text-[11px] font-semibold text-gray-700 leading-tight">Your
                            Own<br>Store</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-[#00875A] mb-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <span class="text-[10px] sm:text-[11px] font-semibold text-gray-700 leading-tight">Reach
                            More<br>Buyers</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-[#00875A] mb-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <span
                            class="text-[10px] sm:text-[11px] font-semibold text-gray-700 leading-tight">Secure<br>Payments</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-[#00875A] mb-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824-2.12a3 3 0 114.243 4.243" />
                            </svg>
                        </div>
                        <span
                            class="text-[10px] sm:text-[11px] font-semibold text-gray-700 leading-tight">Seller<br>Support</span>
                    </div>
                </div>

                <!-- 4 TRUST METRICS: STEP 2 (Initially Hidden) -->
                <div id="step2Features"
                    class="step-features grid grid-cols-4 gap-2 pt-4 border-t border-[#CCE8DC] z-10 text-center hidden">
                    <div class="flex flex-col items-center">
                        <div class="text-[#00875A] mb-1"><svg class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg></div>
                        <span
                            class="text-[10px] sm:text-[11px] font-semibold text-gray-700 leading-tight">Create<br>Your
                            Store</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-[#00875A] mb-1"><svg class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg></div>
                        <span class="text-[10px] sm:text-[11px] font-semibold text-gray-700 leading-tight">Add
                            Your<br>Branding</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-[#00875A] mb-1"><svg class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                            </svg></div>
                        <span
                            class="text-[10px] sm:text-[11px] font-semibold text-gray-700 leading-tight">Showcase<br>Your
                            Products</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-[#00875A] mb-1"><svg class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg></div>
                        <span class="text-[10px] sm:text-[11px] font-semibold text-gray-700 leading-tight">Grow
                            Your<br>Business</span>
                    </div>
                </div>

                <!-- 4 TRUST METRICS: STEP 3 (Initially Hidden) -->
                <div id="step3Features"
                    class="step-features grid grid-cols-4 gap-2 pt-4 border-t border-[#CCE8DC] z-10 text-center hidden">
                    <div class="flex flex-col items-center">
                        <div class="text-[#00875A] mb-1"><svg class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg></div>
                        <span
                            class="text-[10px] sm:text-[11px] font-semibold text-gray-700 leading-tight">Build<br>Trust</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-[#00875A] mb-1"><svg class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg></div>
                        <span
                            class="text-[10px] sm:text-[11px] font-semibold text-gray-700 leading-tight">Higher<br>Visibility</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-[#00875A] mb-1"><svg class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg></div>
                        <span
                            class="text-[10px] sm:text-[11px] font-semibold text-gray-700 leading-tight">More<br>Customers</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-[#00875A] mb-1"><svg class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg></div>
                        <span
                            class="text-[10px] sm:text-[11px] font-semibold text-gray-700 leading-tight">Start<br>Selling</span>
                    </div>
                </div>

            </div>

            <!-- ================= RIGHT MULTI-STEP FORM ================= -->
            <div class="w-full lg:w-[52%] flex flex-col justify-between px-4 sm:px-6 lg:px-8 py-2">

                <form id="vendorForm" action="#" method="POST" enctype="multipart/form-data"
                    class="space-y-5">
                    @csrf

                    <!-- STEPPER NAVIGATION INDICATOR -->
                    <div class="pb-3">
                        <div class="flex items-center justify-between text-xs font-semibold relative">

                            <!-- Step 1 Dot -->
                            <div class="flex items-center gap-2">
                                <span id="badge1"
                                    class="w-6 h-6 rounded-full bg-[#00875A] text-white flex items-center justify-center font-bold text-xs">
                                    1
                                </span>
                                <span id="label1" class="text-gray-900 font-bold hidden sm:inline">Business
                                    Details</span>
                            </div>

                            <div class="flex-1 h-[2px] bg-gray-200 mx-2 sm:mx-3 relative overflow-hidden">
                                <div id="line1" class="h-full bg-[#00875A] w-0 transition-all duration-300"></div>
                            </div>

                            <!-- Step 2 Dot -->
                            <div class="flex items-center gap-2">
                                <span id="badge2"
                                    class="w-6 h-6 rounded-full border border-gray-300 text-gray-500 bg-white flex items-center justify-center font-bold text-xs transition-colors">
                                    2
                                </span>
                                <span id="label2" class="text-gray-400 font-medium hidden sm:inline">Store
                                    Setup</span>
                            </div>

                            <div class="flex-1 h-[2px] bg-gray-200 mx-2 sm:mx-3 relative overflow-hidden">
                                <div id="line2" class="h-full bg-[#00875A] w-0 transition-all duration-300"></div>
                            </div>

                            <!-- Step 3 Dot -->
                            <div class="flex items-center gap-2">
                                <span id="badge3"
                                    class="w-6 h-6 rounded-full border border-gray-300 text-gray-500 bg-white flex items-center justify-center font-bold text-xs transition-colors">
                                    3
                                </span>
                                <span id="label3"
                                    class="text-gray-400 font-medium hidden sm:inline">Verification</span>
                            </div>

                        </div>
                    </div>

                    <!-- ============================================== -->
                    <!-- ============ STEP 1: BUSINESS DETAILS ======== -->
                    <!-- ============================================== -->
                    <div id="step1Container" class="step-panel space-y-4">
                        <div>
                            <h2 class="text-2xl font-bold text-[#0B1527] tracking-tight">Become a Vendor</h2>
                            <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Create your seller account and start
                                growing with Vendora.</p>
                        </div>

                        <!-- Business / Legal Name -->
                        <div class="space-y-1">
                            <label class="block text-xs font-semibold text-gray-700">Business / Legal Name</label>
                            <input type="text" name="legal_name" placeholder="Enter your business or legal name"
                                class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#00875A]">
                        </div>

                        <!-- Store Name -->
                        <div class="space-y-1">
                            <label class="block text-xs font-semibold text-gray-700">Store Name</label>
                            <input type="text" name="initial_store_name" placeholder="Enter your store name"
                                class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#00875A]">
                        </div>

                        <!-- Business Email & Phone -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="space-y-1">
                                <label class="block text-xs font-semibold text-gray-700">Business Email</label>
                                <input type="email" name="business_email" placeholder="you@company.com"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#00875A]">
                            </div>

                            <div class="space-y-1">
                                <label class="block text-xs font-semibold text-gray-700">Phone Number</label>
                                <div
                                    class="flex items-center rounded-xl border border-gray-200 bg-white overflow-hidden">
                                    <div
                                        class="flex items-center gap-1 px-3 py-2.5 bg-gray-50 border-r border-gray-200 text-xs font-medium text-gray-600">
                                        <span>🇺🇸</span>
                                        <span>+1</span>
                                    </div>
                                    <input type="tel" name="phone" placeholder="(555) 123-4567"
                                        class="w-full px-3 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 focus:outline-none">
                                </div>
                            </div>
                        </div>

                        <!-- Business Type & Country -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="space-y-1">
                                <label class="block text-xs font-semibold text-gray-700">Business Type</label>
                                <select name="business_type"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm text-gray-600 bg-white focus:outline-none focus:border-[#00875A]">
                                    <option value="" disabled selected>Select business type</option>
                                    <option value="individual">Individual / Sole Proprietorship</option>
                                    <option value="llc">LLC / Corporation</option>
                                    <option value="partnership">Partnership</option>
                                </select>
                            </div>

                            <div class="space-y-1">
                                <label class="block text-xs font-semibold text-gray-700">Country / Region</label>
                                <select name="country"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm text-gray-600 bg-white focus:outline-none focus:border-[#00875A]">
                                    <option value="" disabled selected>Select country</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="AU">Australia</option>
                                </select>
                            </div>
                        </div>

                        <!-- Business Address -->
                        <div class="space-y-1">
                            <label class="block text-xs font-semibold text-gray-700">Business Address</label>
                            <textarea name="business_address" rows="2" placeholder="Enter your business address"
                                class="w-full px-3.5 py-2 rounded-xl border border-gray-200 text-xs sm:text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#00875A] resize-none"></textarea>
                        </div>

                        <!-- Terms & Conditions Checkbox -->
                        <div class="flex items-center gap-2 pt-1">
                            <input type="checkbox" id="terms1" required
                                class="w-4 h-4 rounded text-[#00875A] border-gray-300 focus:ring-[#00875A] accent-[#00875A] cursor-pointer">
                            <label for="terms1" class="text-xs text-gray-600 font-medium">
                                I agree to the <a href="#terms"
                                    class="font-bold text-gray-800 hover:text-[#00875A] underline">Seller Terms &amp;
                                    Conditions</a> and <a href="#privacy"
                                    class="font-bold text-gray-800 hover:text-[#00875A] underline">Privacy Policy</a>.
                            </label>
                        </div>

                        <!-- Step 1 Button -->
                        <button type="button" onclick="goToStep(2)"
                            class="w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3 rounded-xl shadow-sm flex items-center justify-center gap-2 transition cursor-pointer">
                            <span>Continue to Store Setup</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>

                        <p class="text-center text-xs text-gray-500 font-medium pt-1">
                            Already have a Vendora account?
                            <a href="{{ route('signin') }}" class="font-bold text-[#00875A] hover:underline ml-1">Sign
                                in</a>
                        </p>
                    </div>

                    <!-- ============================================== -->
                    <!-- ============ STEP 2: STORE SETUP ============= -->
                    <!-- ============================================== -->
                    <div id="step2Container" class="step-panel space-y-4 hidden">
                        <div>
                            <h2 class="text-2xl font-bold text-[#0B1527] tracking-tight">Set Up Your Store</h2>
                            <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Tell us a little more about your store.
                                You can always update these details later.</p>
                        </div>

                        <!-- Store Name & Logo Upload -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-start">
                            <div class="space-y-1">
                                <label class="block text-xs font-semibold text-gray-700">Store Name <span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="store_name" placeholder="e.g. TrendNest"
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#00875A]">
                            </div>

                            <div class="space-y-1">
                                <label class="block text-xs font-semibold text-gray-700">Store Logo <span
                                        class="text-red-500">*</span></label>
                                <label
                                    class="border-2 border-dashed border-gray-200 rounded-xl p-3 flex flex-col items-center justify-center cursor-pointer hover:border-[#00875A] hover:bg-gray-50 transition">
                                    <input type="file" name="store_logo" class="hidden"
                                        accept="image/png, image/jpeg">
                                    <svg class="w-6 h-6 text-gray-400 mb-1" fill="none" stroke="currentColor"
                                        stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                    <span class="text-xs font-semibold text-gray-700 text-center"><strong
                                            class="text-gray-900">Click to upload</strong> or drag and drop</span>
                                    <span class="text-[10px] text-gray-400">PNG, JPG (Max 2MB)</span>
                                </label>
                            </div>
                        </div>

                        <!-- Store Banner Upload + Preview Card -->
                        <div class="space-y-1">
                            <label class="block text-xs font-semibold text-gray-700">Store Banner <span
                                    class="text-gray-400">(Optional)</span></label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 items-center">
                                <label
                                    class="border-2 border-dashed border-gray-200 rounded-xl p-4 flex flex-col items-center justify-center cursor-pointer hover:border-[#00875A] hover:bg-gray-50 transition h-24">
                                    <input type="file" name="store_banner" class="hidden"
                                        accept="image/png, image/jpeg">
                                    <svg class="w-5 h-5 text-gray-400 mb-1" fill="none" stroke="currentColor"
                                        stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-[11px] font-semibold text-gray-700 text-center"><strong
                                            class="text-gray-900">Click to upload</strong> or drag and drop</span>
                                    <span class="text-[9px] text-gray-400">JPG, PNG (Max 5MB)</span>
                                </label>
                                <div
                                    class="rounded-xl overflow-hidden bg-gradient-to-r from-amber-50 to-orange-50 border border-gray-100 flex items-center justify-between p-3 h-24">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-white/80 border border-gray-200 flex items-center justify-center text-xs font-bold text-gray-600">
                                            🛍️</div>
                                        <span class="text-xs font-bold text-gray-800">Your Store<br>Banner Here</span>
                                    </div>
                                    <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=100&auto=format&fit=crop&q=80"
                                        class="w-14 h-14 rounded-lg object-cover" alt="Banner preview">
                                </div>
                            </div>
                        </div>

                        <!-- Store Description with Character Counter -->
                        <div class="space-y-1">
                            <label class="block text-xs font-semibold text-gray-700">Store Description <span
                                    class="text-red-500">*</span></label>
                            <div class="relative">
                                <textarea id="storeDesc" name="store_description" rows="3" maxlength="500"
                                    placeholder="Tell customers about your store, products and brand..."
                                    class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#00875A] resize-none"></textarea>
                                <span id="charCount"
                                    class="absolute bottom-2 right-3 text-[10px] text-gray-400">0/500</span>
                            </div>
                        </div>

                        <!-- Social Media Links (Optional) -->
                        <div class="space-y-1">
                            <label class="block text-xs font-semibold text-gray-700">Social Media Links <span
                                    class="text-gray-400">(Optional)</span></label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                                <div
                                    class="flex items-center gap-2 px-3 py-2 rounded-xl border border-gray-200 bg-white">
                                    <span class="text-xs font-bold text-blue-600">f</span>
                                    <input type="text" name="facebook" placeholder="Facebook"
                                        class="w-full text-xs text-gray-800 placeholder-gray-400 focus:outline-none">
                                </div>
                                <div
                                    class="flex items-center gap-2 px-3 py-2 rounded-xl border border-gray-200 bg-white">
                                    <span class="text-xs font-bold text-pink-600">ig</span>
                                    <input type="text" name="instagram" placeholder="Instagram"
                                        class="w-full text-xs text-gray-800 placeholder-gray-400 focus:outline-none">
                                </div>
                                <div
                                    class="flex items-center gap-2 px-3 py-2 rounded-xl border border-gray-200 bg-white">
                                    <span class="text-xs font-bold text-red-600">▶</span>
                                    <input type="text" name="youtube" placeholder="YouTube"
                                        class="w-full text-xs text-gray-800 placeholder-gray-400 focus:outline-none">
                                </div>
                            </div>
                        </div>

                        <!-- Terms & Conditions Checkbox -->
                        <div class="flex items-center gap-2 pt-1">
                            <input type="checkbox" id="terms2" required
                                class="w-4 h-4 rounded text-[#00875A] border-gray-300 focus:ring-[#00875A] accent-[#00875A] cursor-pointer">
                            <label for="terms2" class="text-xs text-gray-600 font-medium">
                                I agree to the <a href="#terms"
                                    class="font-bold text-gray-800 hover:text-[#00875A] underline">Seller Terms &amp;
                                    Conditions</a> and <a href="#privacy"
                                    class="font-bold text-gray-800 hover:text-[#00875A] underline">Privacy Policy</a>.
                            </label>
                        </div>

                        <!-- Back and Forward Buttons -->
                        <div class="flex items-center gap-3 pt-1">
                            <button type="button" onclick="goToStep(1)"
                                class="w-1/3 border border-gray-200 hover:bg-gray-50 text-gray-700 font-semibold text-xs sm:text-sm py-3 rounded-xl transition cursor-pointer flex items-center justify-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                <span>Back</span>
                            </button>
                            <button type="button" onclick="goToStep(3)"
                                class="w-2/3 bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-xs sm:text-sm py-3 rounded-xl shadow-sm flex items-center justify-center gap-2 transition cursor-pointer">
                                <span>Continue to Verification</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- ============================================== -->
                    <!-- ============ STEP 3: VERIFICATION ============ -->
                    <!-- ============================================== -->
                    <div id="step3Container" class="step-panel space-y-4 hidden">
                        <div>
                            <h2 class="text-2xl font-bold text-[#0B1527] tracking-tight">Complete Your Verification
                            </h2>
                            <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Help us verify your identity and
                                business details. This keeps the marketplace safe and builds trust for everyone.</p>
                        </div>

                        <!-- Security Notice Box -->
                        <div class="bg-[#F0FDF4] border border-[#BBF7D0] rounded-xl p-3 flex items-start gap-2.5">
                            <div class="text-[#00875A] mt-0.5 shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-[#065F46]">Your information is secure</h4>
                                <p class="text-[11px] text-[#047857]">We use industry-standard security measures to
                                    protect your data.</p>
                            </div>
                        </div>

                        <!-- Identity Verification Upload Cards -->
                        <div class="space-y-1.5">
                            <label class="block text-xs font-bold text-gray-900">Identity Verification</label>
                            <p class="text-[11px] text-gray-500">Upload a clear photo of your government-issued ID.</p>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5 pt-1">
                                <!-- Front ID -->
                                <label
                                    class="border-2 border-dashed border-gray-200 rounded-xl p-3 flex flex-col items-center justify-center cursor-pointer hover:border-[#00875A] hover:bg-gray-50 transition text-center">
                                    <input type="file" name="id_front" class="hidden" accept="image/*">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center text-gray-500 mb-1">
                                        🪪
                                    </div>
                                    <span class="text-xs font-bold text-gray-800">Front of ID</span>
                                    <span class="text-[10px] text-gray-400">JPG, PNG (Max 5MB)</span>
                                </label>

                                <!-- Back ID -->
                                <label
                                    class="border-2 border-dashed border-gray-200 rounded-xl p-3 flex flex-col items-center justify-center cursor-pointer hover:border-[#00875A] hover:bg-gray-50 transition text-center">
                                    <input type="file" name="id_back" class="hidden" accept="image/*">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center text-gray-500 mb-1">
                                        💳
                                    </div>
                                    <span class="text-xs font-bold text-gray-800">Back of ID</span>
                                    <span class="text-[10px] text-gray-400">JPG, PNG (Max 5MB)</span>
                                </label>

                                <!-- Selfie with ID -->
                                <label
                                    class="border-2 border-dashed border-gray-200 rounded-xl p-3 flex flex-col items-center justify-center cursor-pointer hover:border-[#00875A] hover:bg-gray-50 transition text-center">
                                    <input type="file" name="id_selfie" class="hidden" accept="image/*">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center text-gray-500 mb-1">
                                        🤳
                                    </div>
                                    <span class="text-xs font-bold text-gray-800">Selfie with ID</span>
                                    <span class="text-[10px] text-gray-400">JPG, PNG (Max 5MB)</span>
                                </label>
                            </div>
                        </div>

                        <!-- Additional Documents (Optional) -->
                        <div class="space-y-1.5 pt-1">
                            <label class="block text-xs font-bold text-gray-900">Additional Documents <span
                                    class="text-gray-400 font-normal">(Optional)</span></label>
                            <p class="text-[11px] text-gray-500">You can upload business registration documents, tax
                                certificate, or proof of address.</p>

                            <label
                                class="border-2 border-dashed border-gray-200 rounded-xl p-4 flex flex-col items-center justify-center cursor-pointer hover:border-[#00875A] hover:bg-gray-50 transition text-center">
                                <input type="file" name="additional_docs" class="hidden" accept=".pdf,image/*">
                                <svg class="w-6 h-6 text-gray-400 mb-1" fill="none" stroke="currentColor"
                                    stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span class="text-xs font-bold text-gray-800">Upload Documents</span>
                                <span class="text-[10px] text-gray-400">PDF, JPG, PNG (Max 10MB)</span>
                            </label>
                        </div>

                        <!-- Terms & Conditions Checkbox -->
                        <div class="flex items-center gap-2 pt-1">
                            <input type="checkbox" id="terms3" required
                                class="w-4 h-4 rounded text-[#00875A] border-gray-300 focus:ring-[#00875A] accent-[#00875A] cursor-pointer">
                            <label for="terms3" class="text-xs text-gray-600 font-medium">
                                I agree to the <a href="#terms"
                                    class="font-bold text-gray-800 hover:text-[#00875A] underline">Terms &amp;
                                    Conditions</a> and <a href="#privacy"
                                    class="font-bold text-gray-800 hover:text-[#00875A] underline">Privacy Policy</a>.
                            </label>
                        </div>

                        <!-- Final Step Buttons -->
                        <div class="flex items-center gap-3 pt-1">
                            <button type="button" onclick="goToStep(2)"
                                class="w-1/3 border border-gray-200 hover:bg-gray-50 text-gray-700 font-semibold text-xs sm:text-sm py-3 rounded-xl transition cursor-pointer flex items-center justify-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                <span>Back</span>
                            </button>
                            <button type="submit"
                                class="w-2/3 bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-xs sm:text-sm py-3 rounded-xl shadow-sm flex items-center justify-center gap-2 transition cursor-pointer">
                                <span>Submit for Verification</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </div>

                        <p class="text-center text-xs text-gray-500 font-medium pt-1">
                            Need help?
                            <a href="#support" class="font-bold text-[#00875A] hover:underline ml-1">Contact
                                Support</a>
                        </p>
                    </div>

                </form>

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

    <!-- WIZARD STEP CONTROLLER & CHARACTER COUNTER SCRIPT -->
    <script>
        // Character count for store description
        const storeDesc = document.getElementById('storeDesc');
        const charCount = document.getElementById('charCount');
        if (storeDesc) {
            storeDesc.addEventListener('input', function() {
                charCount.textContent = `${this.value.length}/500`;
            });
        }

        // Stepper Navigation Function
        function goToStep(step) {
            // Hide all right step panels
            document.querySelectorAll('.step-panel').forEach(p => p.classList.add('hidden'));
            // Hide all left promo panels
            document.querySelectorAll('.step-left-content').forEach(p => p.classList.add('hidden'));
            // Hide all left features
            document.querySelectorAll('.step-features').forEach(p => p.classList.add('hidden'));

            // Show selected step panel
            document.getElementById(`step${step}Container`).classList.remove('hidden');
            document.getElementById(`step${step}Left`).classList.remove('hidden');
            document.getElementById(`step${step}Features`).classList.remove('hidden');

            // Update Progress Stepper UI
            const b1 = document.getElementById('badge1');
            const b2 = document.getElementById('badge2');
            const b3 = document.getElementById('badge3');
            const l1 = document.getElementById('label1');
            const l2 = document.getElementById('label2');
            const l3 = document.getElementById('label3');
            const line1 = document.getElementById('line1');
            const line2 = document.getElementById('line2');

            if (step === 1) {
                b1.className =
                    "w-6 h-6 rounded-full bg-[#00875A] text-white flex items-center justify-center font-bold text-xs";
                b1.innerHTML = "1";
                l1.className = "text-gray-900 font-bold hidden sm:inline";

                b2.className =
                    "w-6 h-6 rounded-full border border-gray-300 text-gray-500 bg-white flex items-center justify-center font-bold text-xs";
                b2.innerHTML = "2";
                l2.className = "text-gray-400 font-medium hidden sm:inline";

                b3.className =
                    "w-6 h-6 rounded-full border border-gray-300 text-gray-500 bg-white flex items-center justify-center font-bold text-xs";
                b3.innerHTML = "3";
                l3.className = "text-gray-400 font-medium hidden sm:inline";

                line1.style.width = "0%";
                line2.style.width = "0%";
            } else if (step === 2) {
                b1.className =
                    "w-6 h-6 rounded-full bg-[#00875A] text-white flex items-center justify-center font-bold text-xs";
                b1.innerHTML =
                    `<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>`;
                l1.className = "text-gray-900 font-semibold hidden sm:inline";

                b2.className =
                    "w-6 h-6 rounded-full bg-[#00875A] text-white flex items-center justify-center font-bold text-xs";
                b2.innerHTML = "2";
                l2.className = "text-gray-900 font-bold hidden sm:inline";

                b3.className =
                    "w-6 h-6 rounded-full border border-gray-300 text-gray-500 bg-white flex items-center justify-center font-bold text-xs";
                b3.innerHTML = "3";
                l3.className = "text-gray-400 font-medium hidden sm:inline";

                line1.style.width = "100%";
                line2.style.width = "0%";
            } else if (step === 3) {
                b1.className =
                    "w-6 h-6 rounded-full bg-[#00875A] text-white flex items-center justify-center font-bold text-xs";
                b1.innerHTML =
                    `<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>`;

                b2.className =
                    "w-6 h-6 rounded-full bg-[#00875A] text-white flex items-center justify-center font-bold text-xs";
                b2.innerHTML =
                    `<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>`;

                b3.className =
                    "w-6 h-6 rounded-full bg-[#00875A] text-white flex items-center justify-center font-bold text-xs";
                b3.innerHTML = "3";
                l3.className = "text-gray-900 font-bold hidden sm:inline";

                line1.style.width = "100%";
                line2.style.width = "100%";
            }

            // Scroll to container top smoothly on mobile
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>
