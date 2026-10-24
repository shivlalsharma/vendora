<div class="w-full lg:w-[52%] flex flex-col justify-center px-6 lg:px-8 py-2 sm:py-4">

    <form id="vendorForm" action="#" method="POST" enctype="multipart/form-data" novalidate>
        @csrf

        <!-- ================= STEP 1: BUSINESS DETAILS ================= -->
        <div id="step1Container" class="step-pane space-y-4">
            <div>
                <h2 class="text-2xl sm:text-[28px] font-bold text-[#0B1527] tracking-tight">Become a Vendor</h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-1 font-medium">Create your seller account and
                    start growing with Vendora.</p>
            </div>

            <!-- Stepper -->
            <div class="flex items-center gap-2 pt-2 pb-2">
                <div class="flex items-center gap-2">
                    <span
                        class="w-7 h-7 rounded-full bg-[#00875A] text-white text-xs font-bold flex items-center justify-center">1</span>
                    <span class="text-xs font-bold text-[#00875A] border-b-2 border-[#00875A] pb-0.5">Business
                        details</span>
                </div>
                <div class="w-8 sm:w-16 h-[1.5px] bg-gray-200"></div>
                <div class="flex items-center gap-2 text-gray-400">
                    <span
                        class="w-7 h-7 rounded-full border border-gray-300 text-xs font-semibold flex items-center justify-center">2</span>
                    <span class="text-xs font-medium hidden sm:inline">Store setup</span>
                </div>
                <div class="w-8 sm:w-16 h-[1.5px] bg-gray-200"></div>
                <div class="flex items-center gap-2 text-gray-400">
                    <span
                        class="w-7 h-7 rounded-full border border-gray-300 text-xs font-semibold flex items-center justify-center">3</span>
                    <span class="text-xs font-medium hidden sm:inline">Verification</span>
                </div>
            </div>

            <!-- Business / Legal Name -->
            <div>
                <label for="legal_name" class="block text-xs font-bold text-gray-700 mb-1.5">Business / Legal
                    Name <span class="text-red-500">*</span></label>
                <div class="relative flex items-center">
                    <span class="absolute left-3.5 text-gray-400 pointer-events-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <input type="text" name="legal_name" id="legal_name"
                        placeholder="Enter your business or legal name"
                        class="w-full pl-11 pr-4 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">
                </div>
                <p class="error-text text-[11px] text-red-500 font-medium mt-1 hidden"></p>
            </div>

            <!-- Business Type & Country / Region -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">

                <!-- ================= CUSTOM BUSINESS TYPE SEARCHABLE DROPDOWN ================= -->
                <div>
                    <label for="businessTypeTrigger" class="block text-xs font-bold text-gray-700 mb-1.5">Business Type
                        <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <button type="button" id="businessTypeTrigger" aria-haspopup="listbox" aria-expanded="false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 text-xs sm:text-sm text-gray-800 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition cursor-pointer select-none">
                            <div class="flex items-center gap-2 overflow-hidden">
                                <span id="selectedBusinessTypeIcon" class="w-4 h-4 text-[#00875A] shrink-0 hidden">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </span>
                                <span id="selectedBusinessTypeText" class="text-gray-400 font-normal truncate">Select
                                    business type</span>
                            </div>
                            <svg id="businessTypeChevron"
                                class="w-4 h-4 text-gray-400 transition-transform duration-200 shrink-0 ml-2"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <input type="hidden" name="business_type" id="business_type" value="">

                        <!-- Business Type Dropdown Menu -->
                        <div id="businessTypeMenu"
                            class="hidden absolute left-0 right-0 top-[calc(100%+6px)] bg-white border border-gray-100 rounded-2xl shadow-[0_12px_40px_rgba(0,0,0,0.12)] p-2.5 z-50 transition-all duration-150">
                            <div class="relative mb-2 px-0.5">
                                <span
                                    class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </span>
                                <input type="text" id="businessTypeSearchInput" placeholder="Search business type..."
                                    autocomplete="off"
                                    class="w-full pl-9 pr-3 py-1.5 text-xs text-gray-800 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:bg-white transition">
                            </div>
                            <ul id="businessTypeList"
                                class="max-h-56 overflow-y-auto space-y-0.5 pr-1.5 text-xs custom-scrollbar">
                            </ul>
                        </div>
                    </div>
                    <p id="businessTypeError" class="error-text text-[11px] text-red-500 font-medium mt-1 hidden">Please
                        select your
                        business type.</p>
                </div>

                <!-- ================= COUNTRY / REGION DROPDOWN ================= -->
                <div>
                    <label for="countryRegionTrigger" class="block text-xs font-bold text-gray-700 mb-1.5">Country /
                        Region <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <button type="button" id="countryRegionTrigger" aria-haspopup="listbox" aria-expanded="false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 text-xs sm:text-sm text-gray-800 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition cursor-pointer select-none">
                            <div class="flex items-center gap-2.5 overflow-hidden">
                                <span id="selectedRegionFlag"
                                    class="w-5 h-3.5 rounded-[2px] shadow-2xs overflow-hidden flex items-center justify-center shrink-0 hidden">
                                    <img src="" alt="" class="w-full h-full object-cover">
                                </span>
                                <span id="selectedRegionText" class="text-gray-400 font-normal truncate">Select
                                    country</span>
                            </div>
                            <svg id="regionChevronIcon"
                                class="w-4 h-4 text-gray-400 transition-transform duration-200 shrink-0 ml-2"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <input type="hidden" name="country" id="country" value="">

                        <div id="countryRegionMenu"
                            class="hidden absolute left-0 right-0 top-[calc(100%+6px)] bg-white border border-gray-100 rounded-2xl shadow-[0_12px_40px_rgba(0,0,0,0.12)] p-2.5 z-50 transition-all duration-150">
                            <div class="relative mb-2 px-0.5">
                                <span
                                    class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </span>
                                <input type="text" id="regionSearchInput" placeholder="Search country..."
                                    autocomplete="off"
                                    class="w-full pl-9 pr-3 py-1.5 text-xs text-gray-800 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:bg-white transition">
                            </div>
                            <ul id="regionCountryList"
                                class="max-h-56 overflow-y-auto space-y-0.5 pr-1.5 text-xs custom-scrollbar">
                            </ul>
                        </div>
                    </div>
                    <p id="countryError" class="error-text text-[11px] text-red-500 font-medium mt-1 hidden">
                        Please select your country.</p>
                </div>
            </div>

            <!-- Business Address -->
            <div>
                <label for="business_address" class="block text-xs font-bold text-gray-700 mb-1.5">Business
                    Address <span class="text-red-500">*</span></label>
                <div>
                    <textarea name="business_address" id="business_address" rows="2" placeholder="Enter your business address"
                        class="w-full px-3.5 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition resize-none"></textarea>
                </div>
                <p class="error-text text-[11px] text-red-500 font-medium mt-1 hidden"></p>
            </div>

            <!-- Business Email & Phone -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                <div>
                    <label for="business_email" class="block text-xs font-bold text-gray-700 mb-1.5">Business
                        Email <span class="text-red-500">*</span></label>
                    <div class="relative flex items-center">
                        <span class="absolute left-3.5 text-gray-400 pointer-events-none">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>
                        <input type="email" name="business_email" id="business_email"
                            placeholder="you@company.com"
                            class="w-full pl-11 pr-4 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">
                    </div>
                    <p class="error-text text-[11px] text-red-500 font-medium mt-1 hidden"></p>
                </div>

                <!-- Phone Field -->
                <div>
                    <label for="phone" class="block text-xs font-bold text-gray-700 mb-1.5">Phone Number
                        <span class="text-red-500">*</span></label>
                    <div id="phoneWrapper"
                        class="relative flex items-center border border-gray-200 rounded-xl bg-white focus-within:border-[#00875A] focus-within:ring-1 focus-within:ring-[#00875A] transition">
                        <button type="button" id="countryDropdownTrigger" aria-haspopup="listbox"
                            aria-expanded="false"
                            class="flex items-center pl-3 pr-2.5 py-2.5 gap-1.5 border-r border-gray-200 text-xs sm:text-sm font-semibold text-gray-800 hover:bg-gray-50/80 rounded-l-xl transition cursor-pointer select-none shrink-0">
                            <span id="selectedFlagSlot"
                                class="w-5 h-3.5 rounded-[2px] shadow-2xs overflow-hidden flex items-center justify-center shrink-0">
                                <img src="https://flagcdn.com/w40/in.png" alt="IN"
                                    class="w-full h-full object-cover">
                            </span>
                            <span id="selectedDialCode" class="text-gray-900 font-bold">+91</span>
                            <svg id="chevronIcon" class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200"
                                fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <input type="hidden" name="dial_code" id="dial_code" value="+91">
                        <input type="tel" name="phone" id="phone" placeholder="98765 43210"
                            class="w-full px-3.5 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-transparent focus:outline-none">

                        <div id="countryDropdownMenu"
                            class="hidden absolute left-0 top-[calc(100%+6px)] w-72 sm:w-80 bg-white border border-gray-100 rounded-2xl shadow-[0_12px_40px_rgba(0,0,0,0.12)] p-2.5 z-50 transition-all duration-150">
                            <div class="relative mb-2 px-0.5">
                                <span
                                    class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </span>
                                <input type="text" id="countrySearch"
                                    placeholder="Search country or code (+91)..." autocomplete="off"
                                    class="w-full pl-9 pr-3 py-1.5 text-xs text-gray-800 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:bg-white transition">
                            </div>
                            <ul id="countryList"
                                class="max-h-56 overflow-y-auto space-y-0.5 pr-1.5 text-xs custom-scrollbar">
                            </ul>
                        </div>
                    </div>
                    <p id="phoneError" class="error-text text-[11px] text-red-500 font-medium mt-1 hidden">
                    </p>
                </div>
            </div>

            <!-- Passwords -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                <div>
                    <label for="password" class="block text-xs font-bold text-gray-700 mb-1.5">Password <span
                            class="text-red-500">*</span></label>
                    <div class="relative flex items-center">
                        <span class="absolute left-3.5 text-gray-400 pointer-events-none">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <input type="password" name="password" id="password" placeholder="Create password"
                            class="w-full pl-11 pr-10 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">
                        <button type="button"
                            class="toggle-password-btn absolute right-3 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <svg class="eye-icon w-4.5 h-4.5" fill="none" stroke="currentColor"
                                stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                    <p class="error-text text-[11px] text-red-500 font-medium mt-1 hidden"></p>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-xs font-bold text-gray-700 mb-1.5">Confirm
                        Password <span class="text-red-500">*</span></label>
                    <div class="relative flex items-center">
                        <span class="absolute left-3.5 text-gray-400 pointer-events-none">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Confirm password"
                            class="w-full pl-11 pr-10 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">
                        <button type="button"
                            class="toggle-password-btn absolute right-3 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <svg class="eye-icon w-4.5 h-4.5" fill="none" stroke="currentColor"
                                stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                    <p class="error-text text-[11px] text-red-500 font-medium mt-1 hidden"></p>
                </div>
            </div>

            <!-- Terms -->
            <div class="flex items-center gap-2 pt-1">
                <input type="checkbox" id="terms1" checked
                    class="w-4 h-4 rounded text-[#00875A] border-gray-300 focus:ring-[#00875A] accent-[#00875A] cursor-pointer">
                <label for="terms1" class="text-xs text-gray-600 font-medium cursor-pointer">
                    I agree to the <a href="#terms" class="text-[#00875A] font-bold hover:underline">Seller
                        Terms &amp; Conditions</a> and <a href="#privacy"
                        class="text-[#00875A] font-bold hover:underline">Privacy Policy</a>.
                </label>
            </div>

            <button type="button" data-next-step="2"
                class="w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3 rounded-xl shadow-sm transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer mt-4">
                <span>Continue to Store Setup</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </div>

        <!-- ================= STEP 2: STORE SETUP ================= -->
        <div id="step2Container" class="step-pane space-y-4 hidden">
            <div>
                <h2 class="text-2xl sm:text-[28px] font-bold text-[#0B1527] tracking-tight">Set Up Your Store
                </h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-1 font-medium">Tell us a little more about your
                    store. You can always update these details later.</p>
            </div>

            <div class="flex items-center gap-2 pt-2 pb-2">
                <div class="flex items-center gap-2">
                    <span
                        class="w-7 h-7 rounded-full bg-[#00875A] text-white text-xs font-bold flex items-center justify-center">✓</span>
                    <span class="text-xs font-semibold text-gray-600 hidden sm:inline">Business details</span>
                </div>
                <div class="w-8 sm:w-16 h-[1.5px] bg-[#00875A]"></div>
                <div class="flex items-center gap-2">
                    <span
                        class="w-7 h-7 rounded-full bg-[#00875A] text-white text-xs font-bold flex items-center justify-center">2</span>
                    <span class="text-xs font-bold text-[#00875A] border-b-2 border-[#00875A] pb-0.5">Store
                        setup</span>
                </div>
                <div class="w-8 sm:w-16 h-[1.5px] bg-gray-200"></div>
                <div class="flex items-center gap-2 text-gray-400">
                    <span
                        class="w-7 h-7 rounded-full border border-gray-300 text-xs font-semibold flex items-center justify-center">3</span>
                    <span class="text-xs font-medium hidden sm:inline">Verification</span>
                </div>
            </div>

            <div>
                <label for="store_name" class="block text-xs font-bold text-gray-700 mb-1.5">Store Name <span
                        class="text-red-500">*</span></label>
                <input type="text" name="store_name" id="store_name" placeholder="e.g. TrendNest"
                    class="w-full px-3.5 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition">
                <p class="error-text text-[11px] text-red-500 font-medium mt-1 hidden"></p>
            </div>

            <!-- Logos and Banners -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 items-start">
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1.5">Store Logo <span
                            class="text-red-500">*</span></label>
                    <div
                        class="upload-dropzone relative border border-dashed border-gray-200 hover:border-[#00875A] rounded-xl p-4 flex flex-col items-center justify-center text-center cursor-pointer transition bg-gray-50/50 overflow-hidden group min-h-[96px]">
                        <input type="file" name="store_logo" id="store_logo"
                            accept="image/png, image/jpeg, image/webp"
                            class="file-input absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                        <div class="upload-placeholder flex flex-col items-center justify-center">
                            <svg class="w-6 h-6 text-gray-400 mb-1" fill="none" stroke="currentColor"
                                stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <span class="text-xs font-bold text-gray-700"><span class="text-[#00875A]">Click
                                    to
                                    upload</span> or drag</span>
                            <span class="text-[10px] text-gray-400">PNG, JPG (Max 2MB)</span>
                        </div>
                        <div class="preview-container hidden absolute inset-0 w-full h-full bg-white">
                            <img src="#" alt="Logo Preview"
                                class="preview-img w-full h-full object-contain p-1">
                            <div
                                class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white text-[11px] font-semibold">
                                Click to Change</div>
                        </div>
                    </div>
                    <p id="logoError" class="error-text text-[11px] text-red-500 font-medium mt-1 hidden"></p>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1.5">Store Banner <span
                            class="text-gray-400 font-normal">(Optional)</span></label>
                    <div
                        class="upload-dropzone relative border border-dashed border-gray-200 hover:border-[#00875A] rounded-xl p-4 flex flex-col items-center justify-center text-center cursor-pointer transition bg-gray-50/50 overflow-hidden group min-h-[96px]">
                        <input type="file" name="store_banner" id="store_banner"
                            accept="image/png, image/jpeg, image/webp"
                            class="file-input absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                        <div class="upload-placeholder flex flex-col items-center justify-center">
                            <svg class="w-6 h-6 text-gray-400 mb-1" fill="none" stroke="currentColor"
                                stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs font-bold text-gray-700"><span class="text-[#00875A]">Click
                                    to
                                    upload</span> or drag</span>
                            <span class="text-[10px] text-gray-400 mt-0.5">JPG, PNG (Max 5MB)</span>
                        </div>
                        <div class="preview-container hidden absolute inset-0 w-full h-full bg-white">
                            <img src="#" alt="Banner Preview" class="preview-img w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white text-xs font-semibold">
                                Click to Change Banner</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Store Description -->
            <div>
                <div class="flex justify-between items-center mb-1.5">
                    <label for="store_description" class="text-xs font-bold text-gray-700">Store Description
                        <span class="text-red-500">*</span></label>
                    <span id="charCount" class="text-[11px] text-gray-400 font-medium">0/500</span>
                </div>
                <div>
                    <textarea name="store_description" id="store_description" rows="3" maxlength="500"
                        placeholder="Tell customers about your store, products and brand..."
                        class="w-full px-3.5 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition resize-none"></textarea>
                </div>
                <p class="error-text text-[11px] text-red-500 font-medium mt-1 hidden"></p>
            </div>

            <!-- Social Media Links -->
            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1.5">Social Media Links <span
                        class="text-gray-400 font-normal">(Optional)</span></label>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">
                    <div class="relative flex items-center">
                        <span class="absolute left-3 text-[#1877F2] pointer-events-none">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </span>
                        <input type="url" name="facebook" placeholder="Facebook profile"
                            class="w-full pl-9 pr-3 py-2 text-xs text-gray-800 border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A]">
                    </div>
                    <div class="relative flex items-center">
                        <span class="absolute left-3 text-[#E4405F] pointer-events-none">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </span>
                        <input type="url" name="instagram" placeholder="Instagram handle"
                            class="w-full pl-9 pr-3 py-2 text-xs text-gray-800 border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A]">
                    </div>
                    <div class="relative flex items-center">
                        <span class="absolute left-3 text-[#FF0000] pointer-events-none">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </span>
                        <input type="url" name="youtube" placeholder="YouTube channel"
                            class="w-full pl-9 pr-3 py-2 text-xs text-gray-800 border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A]">
                    </div>
                </div>
            </div>

            <!-- Terms -->
            <div class="flex items-center gap-2 pt-1">
                <input type="checkbox" id="terms2" checked
                    class="w-4 h-4 rounded text-[#00875A] accent-[#00875A] cursor-pointer">
                <label for="terms2" class="text-xs text-gray-600 font-medium cursor-pointer">
                    I agree to the <a href="#terms" class="text-[#00875A] font-bold hover:underline">Seller
                        Terms &amp; Conditions</a> and <a href="#privacy"
                        class="text-[#00875A] font-bold hover:underline">Privacy Policy</a>.
                </label>
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button type="button" data-prev-step="1"
                    class="w-1/3 border border-gray-200 hover:border-gray-300 bg-white text-gray-700 font-bold text-sm py-3 rounded-xl flex items-center justify-center gap-2 cursor-pointer transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span>Back</span>
                </button>
                <button type="button" data-next-step="3"
                    class="w-2/3 bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3 rounded-xl shadow-sm transition flex items-center justify-center gap-2 cursor-pointer">
                    <span>Continue to Verification</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- ================= STEP 3: VERIFICATION ================= -->
        <div id="step3Container" class="step-pane space-y-4 hidden">
            <div>
                <h2 class="text-2xl sm:text-[28px] font-bold text-[#0B1527] tracking-tight">Complete Your
                    Verification</h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-1 font-medium">Help us verify your identity and
                    business details. This keeps the marketplace safe and builds trust for everyone.</p>
            </div>

            <div class="flex items-center gap-2 pt-2 pb-2">
                <div class="flex items-center gap-2">
                    <span
                        class="w-7 h-7 rounded-full bg-[#00875A] text-white text-xs font-bold flex items-center justify-center">✓</span>
                    <span class="text-xs font-semibold text-gray-600 hidden sm:inline">Business Details</span>
                </div>
                <div class="w-8 sm:w-12 h-[1.5px] bg-[#00875A]"></div>
                <div class="flex items-center gap-2">
                    <span
                        class="w-7 h-7 rounded-full bg-[#00875A] text-white text-xs font-bold flex items-center justify-center">✓</span>
                    <span class="text-xs font-semibold text-gray-600 hidden sm:inline">Store Setup</span>
                </div>
                <div class="w-8 sm:w-12 h-[1.5px] bg-[#00875A]"></div>
                <div class="flex items-center gap-2">
                    <span
                        class="w-7 h-7 rounded-full bg-[#00875A] text-white text-xs font-bold flex items-center justify-center">3</span>
                    <span
                        class="text-xs font-bold text-[#00875A] border-b-2 border-[#00875A] pb-0.5">Verification</span>
                </div>
            </div>

            <div class="bg-[#EBF7F2] border border-[#BEE7D4] rounded-xl p-3 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-[#00875A] text-white flex items-center justify-center shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-bold text-[#00875A] block">Your information is secure</span>
                    <span class="text-[11px] text-gray-600">We use industry-standard security measures to
                        protect your data.</span>
                </div>
            </div>

            <!-- ID Uploads -->
            <div>
                <label class="block text-xs font-bold text-gray-800 mb-0.5">Identity Verification <span
                        class="text-red-500">*</span></label>
                <p class="text-[11px] text-gray-500 mb-2">Upload a clear photo of your government-issued ID.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <!-- Front -->
                    <div
                        class="upload-dropzone relative border border-dashed border-gray-200 hover:border-[#00875A] rounded-xl p-3 flex flex-col items-center justify-center text-center cursor-pointer transition bg-gray-50/50 overflow-hidden group min-h-[96px]">
                        <input type="file" name="id_front" id="id_front" accept="image/*"
                            class="file-input absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                        <div class="upload-placeholder flex flex-col items-center justify-center">
                            <svg class="w-6 h-6 text-gray-400 mb-1" fill="none" stroke="currentColor"
                                stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                            </svg>
                            <span class="text-xs font-bold text-gray-700">Front of ID</span>
                            <span class="text-[10px] text-gray-400 mt-0.5">JPG, PNG (Max 5MB)</span>
                        </div>
                        <div class="preview-container hidden absolute inset-0 w-full h-full bg-white">
                            <img src="#" alt="Front ID" class="preview-img w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white text-[11px] font-semibold">
                                Change</div>
                        </div>
                    </div>

                    <!-- Back -->
                    <div
                        class="upload-dropzone relative border border-dashed border-gray-200 hover:border-[#00875A] rounded-xl p-3 flex flex-col items-center justify-center text-center cursor-pointer transition bg-gray-50/50 overflow-hidden group min-h-[96px]">
                        <input type="file" name="id_back" id="id_back" accept="image/*"
                            class="file-input absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                        <div class="upload-placeholder flex flex-col items-center justify-center">
                            <svg class="w-6 h-6 text-gray-400 mb-1" fill="none" stroke="currentColor"
                                stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <span class="text-xs font-bold text-gray-700">Back of ID</span>
                            <span class="text-[10px] text-gray-400 mt-0.5">JPG, PNG (Max 5MB)</span>
                        </div>
                        <div class="preview-container hidden absolute inset-0 w-full h-full bg-white">
                            <img src="#" alt="Back ID" class="preview-img w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white text-[11px] font-semibold">
                                Change</div>
                        </div>
                    </div>

                    <!-- Selfie -->
                    <div
                        class="upload-dropzone relative border border-dashed border-gray-200 hover:border-[#00875A] rounded-xl p-3 flex flex-col items-center justify-center text-center cursor-pointer transition bg-gray-50/50 overflow-hidden group min-h-[96px]">
                        <input type="file" name="id_selfie" id="id_selfie" accept="image/*"
                            class="file-input absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                        <div class="upload-placeholder flex flex-col items-center justify-center">
                            <svg class="w-6 h-6 text-gray-400 mb-1" fill="none" stroke="currentColor"
                                stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs font-bold text-gray-700">Selfie with ID</span>
                            <span class="text-[10px] text-gray-400 mt-0.5">JPG, PNG (Max 5MB)</span>
                        </div>
                        <div class="preview-container hidden absolute inset-0 w-full h-full bg-white">
                            <img src="#" alt="Selfie" class="preview-img w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white text-[11px] font-semibold">
                                Change</div>
                        </div>
                    </div>
                </div>
                <p id="idError" class="error-text text-[11px] text-red-500 font-medium mt-1 hidden"></p>
            </div>

            <!-- Additional Docs -->
            <div>
                <label class="block text-xs font-bold text-gray-800 mb-0.5">Additional Documents <span
                        class="text-gray-400 font-normal">(Optional)</span></label>
                <p class="text-[11px] text-gray-500 mb-2">Upload business registration, tax certificates, or
                    utility proof.</p>
                <div
                    class="upload-dropzone relative border border-dashed border-gray-200 hover:border-[#00875A] rounded-xl p-4 flex flex-col items-center justify-center text-center cursor-pointer transition bg-gray-50/50 overflow-hidden">
                    <input type="file" name="additional_docs" id="additional_docs" accept=".pdf,image/*"
                        class="file-input absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                    <div class="upload-placeholder flex flex-col items-center justify-center">
                        <svg class="w-6 h-6 text-gray-400 mb-1" fill="none" stroke="currentColor"
                            stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="text-xs font-bold text-gray-700" id="docsFileName">Upload
                            Documents</span>
                        <span class="text-[10px] text-gray-400 mt-0.5">PDF, JPG, PNG (Max 10MB)</span>
                    </div>
                </div>
            </div>

            <!-- Terms -->
            <div class="flex items-center gap-2 pt-1">
                <input type="checkbox" id="terms3" checked
                    class="w-4 h-4 rounded text-[#00875A] accent-[#00875A] cursor-pointer">
                <label for="terms3" class="text-xs text-gray-600 font-medium cursor-pointer">
                    I agree to the <a href="#terms" class="text-[#00875A] font-bold hover:underline">Terms
                        &amp;
                        Conditions</a> and <a href="#privacy" class="text-[#00875A] font-bold hover:underline">Privacy
                        Policy</a>.
                </label>
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button type="button" data-prev-step="2"
                    class="w-1/3 border border-gray-200 hover:border-gray-300 bg-white text-gray-700 font-bold text-sm py-3 rounded-xl flex items-center justify-center gap-2 cursor-pointer transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span>Back</span>
                </button>
                <button type="button" id="submitVendorBtn"
                    class="w-2/3 bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3 rounded-xl shadow-sm transition flex items-center justify-center gap-2 cursor-pointer">
                    <span>Submit for Verification</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </div>
    </form>

    <div class="text-center text-xs text-gray-500 mt-6 mb-4 font-medium">
        Already have a Vendora account? <a href="{{ route('signin') }}"
            class="font-bold text-[#00875A] hover:underline">Sign in</a>
    </div>
</div>
