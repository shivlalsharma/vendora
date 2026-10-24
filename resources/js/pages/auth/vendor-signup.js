// resources/js/pages/auth/vendor-signup.js
document.addEventListener("DOMContentLoaded", () => {
    // ==========================================
    // 1. DATASETS (FROZEN & PERFORMANCE OPTIMIZED)
    // ==========================================
    const countries = Object.freeze([
        { name: "India", code: "in", dial: "+91" },
        { name: "United States", code: "us", dial: "+1" },
        { name: "United Kingdom", code: "gb", dial: "+44" },
        { name: "Canada", code: "ca", dial: "+1" },
        { name: "Australia", code: "au", dial: "+61" },
        { name: "United Arab Emirates", code: "ae", dial: "+971" },
        { name: "Saudi Arabia", code: "sa", dial: "+966" },
        { name: "Germany", code: "de", dial: "+49" },
        { name: "France", code: "fr", dial: "+33" },
        { name: "Singapore", code: "sg", dial: "+65" },
        { name: "Malaysia", code: "my", dial: "+60" },
        { name: "Japan", code: "jp", dial: "+81" },
        { name: "China", code: "cn", dial: "+86" },
        { name: "Brazil", code: "br", dial: "+55" },
        { name: "South Africa", code: "za", dial: "+27" },
        { name: "Nigeria", code: "ng", dial: "+234" },
        { name: "Pakistan", code: "pk", dial: "+92" },
        { name: "Bangladesh", code: "bd", dial: "+880" },
        { name: "Philippines", code: "ph", dial: "+63" },
        { name: "Italy", code: "it", dial: "+39" },
        { name: "Spain", code: "es", dial: "+34" },
        { name: "Netherlands", code: "nl", dial: "+31" },
        { name: "New Zealand", code: "nz", dial: "+64" },
        { name: "Mexico", code: "mx", dial: "+52" }
    ]);

    const businessTypes = Object.freeze([
        { value: "sole_proprietorship", label: "Sole Proprietorship" },
        { value: "individual", label: "Individual / Freelancer" },
        { value: "llc", label: "Limited Liability Company" },
        { value: "private_limited", label: "Private Limited Company" },
        { value: "public_limited", label: "Public Limited Company" },
        { value: "partnership", label: "General Partnership" },
        { value: "llp", label: "Limited Liability Partnership" },
        { value: "corporation", label: "Corporation (C-Corp / S-Corp)" },
        { value: "cooperative", label: "Cooperative (Co-op)" },
        { value: "non_profit", label: "Non-Profit Organization" }
    ]);

    // Preload Step 2 & 3 images during idle time
    const heroImage = document.getElementById("leftHeroImage");
    if (heroImage) {
        ['data-step2-img', 'data-step3-img'].forEach(attr => {
            const src = heroImage.getAttribute(attr);
            if (src) {
                const img = new Image();
                img.src = src;
            }
        });
    }

    // Helper close all dropdowns
    function closeAllDropdowns() {
        togglePhoneDropdown(false);
        toggleRegionDropdown(false);
        toggleBusinessTypeDropdown(false);
    }

    // ==========================================
    // 2. PHONE NUMBER COUNTRY PICKER
    // ==========================================
    const phoneTrigger = document.getElementById("countryDropdownTrigger");
    const phoneMenu = document.getElementById("countryDropdownMenu");
    const phoneChevron = document.getElementById("chevronIcon");
    const phoneSearch = document.getElementById("countrySearch");
    const phoneFlagSlot = document.getElementById("selectedFlagSlot");
    const phoneDialSlot = document.getElementById("selectedDialCode");
    const hiddenDialInput = document.getElementById("dial_code");
    const phoneCountryList = document.getElementById("countryList");
    const phoneInput = document.getElementById("phone");
    const phoneWrapper = document.getElementById("phoneWrapper");
    const phoneError = document.getElementById("phoneError");
    let isPhoneListRendered = false;

    function renderPhoneCountries(list) {
        if (!phoneCountryList) return;
        phoneCountryList.innerHTML = list.length === 0
            ? `<li class="px-3 py-2 text-center text-xs text-gray-400">No countries found</li>`
            : list.map(item => `
                <li>
                    <button type="button" class="w-full flex items-center justify-between px-3 py-2 rounded-xl text-left hover:bg-emerald-50/60 transition group cursor-pointer"
                            data-dial="${item.dial}" data-code="${item.code}">
                        <div class="flex items-center gap-2.5">
                            <span class="w-5 h-3.5 rounded-[2px] shadow-2xs overflow-hidden shrink-0">
                                <img src="https://flagcdn.com/w40/${item.code}.png" alt="${item.name}" loading="lazy" class="w-full h-full object-cover">
                            </span>
                            <span class="font-semibold text-gray-700 group-hover:text-gray-900">${item.name}</span>
                        </div>
                        <span class="font-bold text-gray-400 group-hover:text-[#00875A]">${item.dial}</span>
                    </button>
                </li>
            `).join('');
    }

    if (phoneCountryList) {
        phoneCountryList.addEventListener('click', (e) => {
            const btn = e.target.closest('button');
            if (!btn) return;
            const dial = btn.dataset.dial;
            const code = btn.dataset.code;

            if (phoneFlagSlot) phoneFlagSlot.innerHTML = `<img src="https://flagcdn.com/w40/${code}.png" alt="${code}" class="w-full h-full object-cover">`;
            if (phoneDialSlot) phoneDialSlot.textContent = dial;
            if (hiddenDialInput) hiddenDialInput.value = dial;

            togglePhoneDropdown(false);
            if (phoneInput) {
                phoneInput.focus();
                validatePhone();
            }
        });
    }

    const togglePhoneDropdown = (show) => {
        if (!phoneMenu) return;
        const isOpen = !phoneMenu.classList.contains("hidden");
        const state = typeof show === "boolean" ? show : !isOpen;

        if (state) {
            closeAllDropdowns();
            if (!isPhoneListRendered) {
                renderPhoneCountries(countries);
                isPhoneListRendered = true;
            }
            phoneMenu.classList.remove("hidden");
            phoneChevron?.classList.add("rotate-180");
            phoneTrigger?.setAttribute("aria-expanded", "true");
            setTimeout(() => phoneSearch?.focus(), 40);
        } else {
            phoneMenu.classList.add("hidden");
            phoneChevron?.classList.remove("rotate-180");
            phoneTrigger?.setAttribute("aria-expanded", "false");
            if (phoneSearch) phoneSearch.value = "";
            renderPhoneCountries(countries);
        }
    };

    phoneTrigger?.addEventListener("click", (e) => {
        e.stopPropagation();
        togglePhoneDropdown();
    });

    phoneSearch?.addEventListener("input", (e) => {
        const query = e.target.value.toLowerCase().trim();
        renderPhoneCountries(countries.filter(c => c.name.toLowerCase().includes(query) || c.dial.includes(query)));
    });

    const validatePhone = () => {
        if (!phoneInput) return true;
        const rawDigits = phoneInput.value.replace(/\D/g, "");

        if (!rawDigits) {
            phoneWrapper?.classList.add("border-red-500");
            if (phoneError) {
                phoneError.textContent = "Phone number is required.";
                phoneError.classList.remove("hidden");
            }
            return false;
        }

        if (rawDigits.length < 7 || rawDigits.length > 15) {
            phoneWrapper?.classList.add("border-red-500");
            if (phoneError) {
                phoneError.textContent = "Please enter a valid phone number (7 to 15 digits).";
                phoneError.classList.remove("hidden");
            }
            return false;
        }

        phoneWrapper?.classList.remove("border-red-500");
        phoneError?.classList.add("hidden");
        return true;
    };

    phoneInput?.addEventListener("input", () => {
        phoneInput.value = phoneInput.value.replace(/[^\d\s\-()]/g, "");
        validatePhone();
    });

    // ==========================================
    // 3. BUSINESS TYPE CUSTOM DROPDOWN
    // ==========================================
    const bizTrigger = document.getElementById("businessTypeTrigger");
    const bizMenu = document.getElementById("businessTypeMenu");
    const bizChevron = document.getElementById("businessTypeChevron");
    const bizSearch = document.getElementById("businessTypeSearchInput");
    const bizIcon = document.getElementById("selectedBusinessTypeIcon");
    const bizText = document.getElementById("selectedBusinessTypeText");
    const bizHiddenInput = document.getElementById("business_type");
    const bizList = document.getElementById("businessTypeList");
    const bizError = document.getElementById("businessTypeError");
    let isBizListRendered = false;

    function renderBusinessTypes(list) {
        if (!bizList) return;
        bizList.innerHTML = list.length === 0
            ? `<li class="px-3 py-2 text-center text-xs text-gray-400">No business type found</li>`
            : list.map(item => `
                <li>
                    <button type="button" class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-left hover:bg-emerald-50/60 transition group cursor-pointer"
                            data-value="${item.value}" data-label="${item.label}">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-[#00875A] transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                            <span class="font-semibold text-gray-700 group-hover:text-gray-900">${item.label}</span>
                        </div>
                    </button>
                </li>
            `).join('');
    }

    if (bizList) {
        bizList.addEventListener('click', (e) => {
            const btn = e.target.closest('button');
            if (!btn) return;

            const val = btn.dataset.value;
            const label = btn.dataset.label;

            if (bizText) {
                bizText.textContent = label;
                bizText.classList.remove('text-gray-400', 'font-normal');
                bizText.classList.add('text-gray-900', 'font-semibold');
            }

            bizIcon?.classList.remove('hidden');
            if (bizHiddenInput) bizHiddenInput.value = val;

            bizTrigger?.classList.remove('border-red-500');
            bizError?.classList.add('hidden');

            toggleBusinessTypeDropdown(false);
        });
    }

    const toggleBusinessTypeDropdown = (show) => {
        if (!bizMenu) return;
        const isOpen = !bizMenu.classList.contains("hidden");
        const state = typeof show === "boolean" ? show : !isOpen;

        if (state) {
            closeAllDropdowns();
            if (!isBizListRendered) {
                renderBusinessTypes(businessTypes);
                isBizListRendered = true;
            }
            bizMenu.classList.remove("hidden");
            bizChevron?.classList.add("rotate-180");
            bizTrigger?.setAttribute("aria-expanded", "true");
            setTimeout(() => bizSearch?.focus(), 40);
        } else {
            bizMenu.classList.add("hidden");
            bizChevron?.classList.remove("rotate-180");
            bizTrigger?.setAttribute("aria-expanded", "false");
            if (bizSearch) bizSearch.value = "";
            renderBusinessTypes(businessTypes);
        }
    };

    bizTrigger?.addEventListener("click", (e) => {
        e.stopPropagation();
        toggleBusinessTypeDropdown();
    });

    bizSearch?.addEventListener("input", (e) => {
        const query = e.target.value.toLowerCase().trim();
        renderBusinessTypes(businessTypes.filter(b => b.label.toLowerCase().includes(query)));
    });

    // ==========================================
    // 4. COUNTRY / REGION SELECTOR
    // ==========================================
    const regionTrigger = document.getElementById("countryRegionTrigger");
    const regionMenu = document.getElementById("countryRegionMenu");
    const regionChevron = document.getElementById("regionChevronIcon");
    const regionSearch = document.getElementById("regionSearchInput");
    const regionFlag = document.getElementById("selectedRegionFlag");
    const regionText = document.getElementById("selectedRegionText");
    const regionHiddenInput = document.getElementById("country");
    const regionCountryList = document.getElementById("regionCountryList");
    const countryError = document.getElementById("countryError");
    let isRegionListRendered = false;

    function renderRegionCountries(list) {
        if (!regionCountryList) return;
        regionCountryList.innerHTML = list.length === 0
            ? `<li class="px-3 py-2 text-center text-xs text-gray-400">No countries found</li>`
            : list.map(item => `
                <li>
                    <button type="button" class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-left hover:bg-emerald-50/60 transition group cursor-pointer"
                            data-code="${item.code.toUpperCase()}" data-name="${item.name}" data-img="https://flagcdn.com/w40/${item.code}.png">
                        <div class="flex items-center gap-2.5">
                            <span class="w-5 h-3.5 rounded-[2px] shadow-2xs overflow-hidden shrink-0">
                                <img src="https://flagcdn.com/w40/${item.code}.png" alt="${item.name}" loading="lazy" class="w-full h-full object-cover">
                            </span>
                            <span class="font-semibold text-gray-700 group-hover:text-gray-900">${item.name}</span>
                        </div>
                        <span class="text-[11px] font-bold text-gray-400 group-hover:text-[#00875A]">${item.code.toUpperCase()}</span>
                    </button>
                </li>
            `).join('');
    }

    if (regionCountryList) {
        regionCountryList.addEventListener('click', (e) => {
            const btn = e.target.closest('button');
            if (!btn) return;

            const code = btn.dataset.code;
            const name = btn.dataset.name;
            const img = btn.dataset.img;

            if (regionFlag) {
                const imgEl = regionFlag.querySelector("img");
                if (imgEl) imgEl.src = img;
                regionFlag.classList.remove("hidden");
            }

            if (regionText) {
                regionText.textContent = name;
                regionText.classList.remove("text-gray-400", "font-normal");
                regionText.classList.add("text-gray-900", "font-semibold");
            }

            if (regionHiddenInput) regionHiddenInput.value = code;
            regionTrigger?.classList.remove("border-red-500");
            countryError?.classList.add("hidden");

            toggleRegionDropdown(false);
        });
    }

    const toggleRegionDropdown = (show) => {
        if (!regionMenu) return;
        const isOpen = !regionMenu.classList.contains("hidden");
        const state = typeof show === "boolean" ? show : !isOpen;

        if (state) {
            closeAllDropdowns();
            if (!isRegionListRendered) {
                renderRegionCountries(countries);
                isRegionListRendered = true;
            }
            regionMenu.classList.remove("hidden");
            regionChevron?.classList.add("rotate-180");
            regionTrigger?.setAttribute("aria-expanded", "true");
            setTimeout(() => regionSearch?.focus(), 40);
        } else {
            regionMenu.classList.add("hidden");
            regionChevron?.classList.remove("rotate-180");
            regionTrigger?.setAttribute("aria-expanded", "false");
            if (regionSearch) regionSearch.value = "";
            renderRegionCountries(countries);
        }
    };

    regionTrigger?.addEventListener("click", (e) => {
        e.stopPropagation();
        toggleRegionDropdown();
    });

    regionSearch?.addEventListener("input", (e) => {
        const query = e.target.value.toLowerCase().trim();
        renderRegionCountries(countries.filter(c => c.name.toLowerCase().includes(query) || c.code.toLowerCase().includes(query)));
    });

    // Close any menu on outside click
    document.addEventListener("click", (e) => {
        if (phoneMenu && !phoneMenu.contains(e.target) && !phoneTrigger?.contains(e.target)) togglePhoneDropdown(false);
        if (regionMenu && !regionMenu.contains(e.target) && !regionTrigger?.contains(e.target)) toggleRegionDropdown(false);
        if (bizMenu && !bizMenu.contains(e.target) && !bizTrigger?.contains(e.target)) toggleBusinessTypeDropdown(false);
    });

    // ==========================================
    // 5. PASSWORD & DROPZONE PREVIEWS
    // ==========================================
    document.querySelectorAll(".toggle-password-btn").forEach((btn) => {
        btn.addEventListener("click", (e) => {
            const input = e.currentTarget.parentElement.querySelector("input");
            if (input) input.type = input.type === "password" ? "text" : "password";
        });
    });

    const descTextarea = document.getElementById("store_description");
    const charCount = document.getElementById("charCount");
    if (descTextarea && charCount) {
        descTextarea.addEventListener("input", () => {
            charCount.textContent = `${descTextarea.value.length}/500`;
        });
    }

    document.querySelectorAll(".upload-dropzone").forEach((dropzone) => {
        const input = dropzone.querySelector(".file-input");
        const previewContainer = dropzone.querySelector(".preview-container");
        const previewImg = dropzone.querySelector(".preview-img");
        const placeholder = dropzone.querySelector(".upload-placeholder");

        const handleFiles = (files) => {
            if (!files || !files[0]) return;
            const file = files[0];

            if (file.type.startsWith("image/") && previewImg && previewContainer) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImg.src = e.target.result;
                    previewContainer.classList.remove("hidden");
                    placeholder?.classList.add("opacity-0");
                };
                reader.readAsDataURL(file);
            } else {
                const docLabel = document.getElementById("docsFileName");
                if (docLabel) {
                    docLabel.textContent = file.name.length > 25 ? file.name.substring(0, 22) + "..." : file.name;
                    docLabel.classList.add("text-[#00875A]", "font-bold");
                }
            }
        };

        input?.addEventListener("change", (e) => handleFiles(e.target.files));

        ["dragenter", "dragover"].forEach(evt => dropzone.addEventListener(evt, (e) => {
            e.preventDefault();
            dropzone.classList.add("border-[#00875A]", "bg-emerald-50/20");
        }));

        ["dragleave", "drop"].forEach(evt => dropzone.addEventListener(evt, (e) => {
            e.preventDefault();
            dropzone.classList.remove("border-[#00875A]", "bg-emerald-50/20");
        }));

        dropzone.addEventListener("drop", (e) => {
            if (input && e.dataTransfer.files.length) {
                input.files = e.dataTransfer.files;
                handleFiles(input.files);
            }
        });
    });

    // ==========================================
    // 6. VALIDATION & SECURITY ENGINE
    // ==========================================
    function showError(element, message) {
        if (!element) return;
        element.classList.add("border-red-500");
        const err = element.closest("div")?.parentElement?.querySelector(".error-text") ||
            element.closest("div")?.querySelector(".error-text");
        if (err) {
            err.textContent = message;
            err.classList.remove("hidden");
        }
    }

    function clearError(element) {
        if (!element) return;
        element.classList.remove("border-red-500");
        const err = element.closest("div")?.parentElement?.querySelector(".error-text") ||
            element.closest("div")?.querySelector(".error-text");
        if (err) err.classList.add("hidden");
    }

    function checkField(id, errorMsg) {
        const input = document.getElementById(id);
        if (!input || !input.value.trim()) {
            if (input) showError(input, errorMsg);
            return false;
        }
        clearError(input);
        return true;
    }

    let currentStep = 1;
    const form = document.getElementById("vendorForm");

    function validateStep(step) {
        let isValid = true;

        if (step === 1) {
            isValid = checkField("legal_name", "Please enter your legal or business name.") && isValid;

            const pass = document.getElementById("password");
            const passConfirm = document.getElementById("password_confirmation");

            if (pass) {
                if (pass.value.length < 8) {
                    showError(pass, "Password must be at least 8 characters long.");
                    isValid = false;
                } else {
                    clearError(pass);
                }
            }

            if (passConfirm && pass) {
                if (passConfirm.value !== pass.value || !passConfirm.value) {
                    showError(passConfirm, "Passwords do not match.");
                    isValid = false;
                } else {
                    clearError(passConfirm);
                }
            }

            const email = document.getElementById("business_email");
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email) {
                if (!emailRegex.test(email.value.trim())) {
                    showError(email, "Please enter a valid email address.");
                    isValid = false;
                } else {
                    clearError(email);
                }
            }

            isValid = validatePhone() && isValid;

            // Validate Custom Business Type
            if (!bizHiddenInput || !bizHiddenInput.value) {
                bizTrigger?.classList.add("border-red-500");
                bizError?.classList.remove("hidden");
                isValid = false;
            } else {
                bizTrigger?.classList.remove("border-red-500");
                bizError?.classList.add("hidden");
            }

            // Validate Custom Country
            if (!regionHiddenInput || !regionHiddenInput.value) {
                regionTrigger?.classList.add("border-red-500");
                countryError?.classList.remove("hidden");
                isValid = false;
            } else {
                regionTrigger?.classList.remove("border-red-500");
                countryError?.classList.add("hidden");
            }

            isValid = checkField("business_address", "Business address is required.") && isValid;
        }
        else if (step === 2) {
            isValid = checkField("store_name", "Store name is required.") && isValid;
            isValid = checkField("store_description", "Please provide a store description.") && isValid;

            const logo = document.getElementById("store_logo");
            const logoError = document.getElementById("logoError");
            if (logo && (!logo.files || !logo.files.length)) {
                if (logoError) {
                    logoError.textContent = "Please upload a store logo.";
                    logoError.classList.remove("hidden");
                }
                isValid = false;
            } else if (logoError) {
                logoError.classList.add("hidden");
            }
        }

        return isValid;
    }

    function switchStep(target) {
        if (target < 1 || target > 3) return;

        if (target > currentStep) {
            for (let s = 1; s < target; s++) {
                if (!validateStep(s)) {
                    switchStep(s);
                    return;
                }
            }
        }

        document.querySelectorAll(".step-pane").forEach(el => el.classList.add("hidden"));
        document.getElementById(`step${target}Container`)?.classList.remove("hidden");

        if (heroImage) {
            const targetImg = heroImage.getAttribute(`data-step${target}-img`);
            if (targetImg) {
                heroImage.style.opacity = "0.2";
                heroImage.src = targetImg;
                heroImage.onload = () => { heroImage.style.opacity = "1"; };
            }
        }

        currentStep = target;
        window.scrollTo({ top: 0, behavior: "smooth" });
    }

    document.querySelectorAll("[data-next-step]").forEach((btn) => {
        btn.addEventListener("click", () => {
            const targetStep = currentStep + 1;
            if (targetStep <= 3 && validateStep(currentStep)) switchStep(targetStep);
        });
    });

    document.querySelectorAll("[data-prev-step]").forEach((btn) => {
        btn.addEventListener("click", () => {
            switchStep(Math.max(1, currentStep - 1));
        });
    });

    // Step 3 Submission Shield
    document.getElementById("submitVendorBtn")?.addEventListener("click", () => {
        if (!validateStep(1)) { switchStep(1); return; }
        if (!validateStep(2)) { switchStep(2); return; }

        const idFront = document.getElementById("id_front");
        const idBack = document.getElementById("id_back");
        const idSelfie = document.getElementById("id_selfie");
        const idError = document.getElementById("idError");

        if (!idFront?.files?.length || !idBack?.files?.length || !idSelfie?.files?.length) {
            if (idError) {
                idError.textContent = "Please upload all 3 ID verification photos (Front, Back, and Selfie).";
                idError.classList.remove("hidden");
            }
            return;
        }

        idError?.classList.add("hidden");
        form?.submit();
    });
});
