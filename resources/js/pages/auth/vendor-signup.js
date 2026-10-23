// resources/js/pages/auth/vendor-signup.js
document.addEventListener('DOMContentLoaded', () => {
    const countries = [
        { name: "United States", code: "us", dial: "+1" },
        { name: "India", code: "in", dial: "+91" },
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
    ];

    // ==========================================
    // 2. PHONE NUMBER COUNTRY PICKER
    // ==========================================
    const phoneTrigger = document.getElementById('countryDropdownTrigger');
    const phoneMenu = document.getElementById('countryDropdownMenu');
    const phoneChevron = document.getElementById('chevronIcon');
    const phoneSearch = document.getElementById('countrySearch');
    const phoneFlagSlot = document.getElementById('selectedFlagSlot');
    const phoneDialSlot = document.getElementById('selectedDialCode');
    const hiddenDialInput = document.getElementById('dial_code');
    const phoneCountryList = document.getElementById('countryList');
    const phoneInput = document.getElementById('phone');
    const phoneWrapper = document.getElementById('phoneWrapper');
    const phoneError = document.getElementById('phoneError');

    function renderPhoneCountries(list) {
        if (!phoneCountryList) return;
        phoneCountryList.innerHTML = '';
        if (list.length === 0) {
            phoneCountryList.innerHTML = `<li class="px-3 py-2 text-center text-xs text-gray-400">No countries found</li>`;
            return;
        }

        list.forEach(item => {
            const li = document.createElement('li');
            li.innerHTML = `
                <button type="button" class="w-full flex items-center justify-between px-3 py-2 rounded-xl text-left hover:bg-emerald-50/60 transition group cursor-pointer"
                        data-dial="${item.dial}" data-code="${item.code}" data-name="${item.name}">
                    <div class="flex items-center gap-2.5">
                        <span class="w-5 h-3.5 rounded-[2px] shadow-2xs overflow-hidden shrink-0">
                            <img src="https://flagcdn.com/w40/${item.code}.png" alt="${item.name}" class="w-full h-full object-cover">
                        </span>
                        <span class="font-semibold text-gray-700 group-hover:text-gray-900">${item.name}</span>
                    </div>
                    <span class="font-bold text-gray-400 group-hover:text-[#00875A]">${item.dial}</span>
                </button>
            `;
            phoneCountryList.appendChild(li);
        });

        phoneCountryList.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('click', () => {
                const dial = btn.getAttribute('data-dial');
                const code = btn.getAttribute('data-code');

                phoneFlagSlot.innerHTML = `<img src="https://flagcdn.com/w40/${code}.png" alt="${code}" class="w-full h-full object-cover">`;
                phoneDialSlot.textContent = dial;
                hiddenDialInput.value = dial;

                togglePhoneDropdown(false);
                phoneInput.focus();
                validatePhone();
            });
        });
    }

    const togglePhoneDropdown = (show) => {
        if (!phoneMenu) return;
        const isOpen = !phoneMenu.classList.contains('hidden');
        const state = typeof show === 'boolean' ? show : !isOpen;

        if (state) {
            phoneMenu.classList.remove('hidden');
            phoneChevron.classList.add('rotate-180');
            phoneTrigger.setAttribute('aria-expanded', 'true');
            setTimeout(() => phoneSearch.focus(), 50);
        } else {
            phoneMenu.classList.add('hidden');
            phoneChevron.classList.remove('rotate-180');
            phoneTrigger.setAttribute('aria-expanded', 'false');
            phoneSearch.value = '';
            renderPhoneCountries(countries);
        }
    };

    if (phoneTrigger) {
        phoneTrigger.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleRegionDropdown(false); // Close other dropdown if open
            togglePhoneDropdown();
        });
    }

    if (phoneSearch) {
        phoneSearch.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase().trim();
            const filtered = countries.filter(c =>
                c.name.toLowerCase().includes(query) || c.dial.includes(query)
            );
            renderPhoneCountries(filtered);
        });
    }

    renderPhoneCountries(countries);

    const validatePhone = () => {
        const rawDigits = phoneInput.value.replace(/\D/g, '');

        if (!rawDigits) {
            phoneWrapper.classList.add('border-red-500');
            phoneError.textContent = 'Phone number is required.';
            phoneError.classList.remove('hidden');
            return false;
        }

        if (rawDigits.length < 7 || rawDigits.length > 15) {
            phoneWrapper.classList.add('border-red-500');
            phoneError.textContent = 'Please enter a valid phone number (7 to 15 digits).';
            phoneError.classList.remove('hidden');
            return false;
        }

        phoneWrapper.classList.remove('border-red-500');
        phoneError.classList.add('hidden');
        return true;
    };

    if (phoneInput) {
        phoneInput.addEventListener('input', () => {
            phoneInput.value = phoneInput.value.replace(/[^\d\s\-()]/g, '');
            validatePhone();
        });
    }

    // ==========================================
    // 3. COUNTRY / REGION SELECTOR DROPDOWN
    // ==========================================
    const regionTrigger = document.getElementById('countryRegionTrigger');
    const regionMenu = document.getElementById('countryRegionMenu');
    const regionChevron = document.getElementById('regionChevronIcon');
    const regionSearch = document.getElementById('regionSearchInput');
    const regionFlag = document.getElementById('selectedRegionFlag');
    const regionText = document.getElementById('selectedRegionText');
    const regionHiddenInput = document.getElementById('country');
    const regionCountryList = document.getElementById('regionCountryList');
    const countryError = document.getElementById('countryError');

    function renderRegionCountries(list) {
        if (!regionCountryList) return;
        regionCountryList.innerHTML = '';
        if (list.length === 0) {
            regionCountryList.innerHTML = `<li class="px-3 py-2 text-center text-xs text-gray-400">No countries found</li>`;
            return;
        }

        list.forEach(item => {
            const li = document.createElement('li');
            li.innerHTML = `
                <button type="button" class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-left hover:bg-emerald-50/60 transition group cursor-pointer"
                        data-code="${item.code.toUpperCase()}" data-name="${item.name}" data-img="https://flagcdn.com/w40/${item.code}.png">
                    <div class="flex items-center gap-2.5">
                        <span class="w-5 h-3.5 rounded-[2px] shadow-2xs overflow-hidden shrink-0">
                            <img src="https://flagcdn.com/w40/${item.code}.png" alt="${item.name}" class="w-full h-full object-cover">
                        </span>
                        <span class="font-semibold text-gray-700 group-hover:text-gray-900">${item.name}</span>
                    </div>
                    <span class="text-[11px] font-bold text-gray-400 group-hover:text-[#00875A]">${item.code.toUpperCase()}</span>
                </button>
            `;
            regionCountryList.appendChild(li);
        });

        regionCountryList.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('click', () => {
                const code = btn.getAttribute('data-code');
                const name = btn.getAttribute('data-name');
                const img = btn.getAttribute('data-img');

                // Update Trigger state
                regionFlag.querySelector('img').src = img;
                regionFlag.classList.remove('hidden');

                regionText.textContent = name;
                regionText.classList.remove('text-gray-400', 'font-normal');
                regionText.classList.add('text-gray-900', 'font-semibold');

                regionHiddenInput.value = code;

                // Clear any error
                regionTrigger.classList.remove('border-red-500');
                if (countryError) countryError.classList.add('hidden');

                toggleRegionDropdown(false);
            });
        });
    }

    const toggleRegionDropdown = (show) => {
        if (!regionMenu) return;
        const isOpen = !regionMenu.classList.contains('hidden');
        const state = typeof show === 'boolean' ? show : !isOpen;

        if (state) {
            regionMenu.classList.remove('hidden');
            regionChevron.classList.add('rotate-180');
            regionTrigger.setAttribute('aria-expanded', 'true');
            setTimeout(() => regionSearch.focus(), 50);
        } else {
            regionMenu.classList.add('hidden');
            regionChevron.classList.remove('rotate-180');
            regionTrigger.setAttribute('aria-expanded', 'false');
            regionSearch.value = '';
            renderRegionCountries(countries);
        }
    };

    if (regionTrigger) {
        regionTrigger.addEventListener('click', (e) => {
            e.stopPropagation();
            togglePhoneDropdown(false); // Close phone dropdown if open
            toggleRegionDropdown();
        });
    }

    if (regionSearch) {
        regionSearch.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase().trim();
            const filtered = countries.filter(c =>
                c.name.toLowerCase().includes(query) || c.code.toLowerCase().includes(query)
            );
            renderRegionCountries(filtered);
        });
    }

    renderRegionCountries(countries);

    // Global click listener to close dropdowns when clicking outside
    document.addEventListener('click', (e) => {
        if (phoneMenu && !phoneMenu.contains(e.target) && !phoneTrigger.contains(e.target)) {
            togglePhoneDropdown(false);
        }
        if (regionMenu && !regionMenu.contains(e.target) && !regionTrigger.contains(e.target)) {
            toggleRegionDropdown(false);
        }
    });

    // ==========================================
    // 4. PASSWORD VISIBILITY TOGGLE
    // ==========================================
    document.querySelectorAll('.toggle-password-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const input = e.currentTarget.parentElement.querySelector('input');
            const isPassword = input.getAttribute('type') === 'password';
            input.setAttribute('type', isPassword ? 'text' : 'password');
        });
    });

    // ==========================================
    // 5. STORE DESCRIPTION COUNTER
    // ==========================================
    const descTextarea = document.getElementById('store_description');
    const charCount = document.getElementById('charCount');
    if (descTextarea && charCount) {
        descTextarea.addEventListener('input', () => {
            charCount.textContent = `${descTextarea.value.length}/500`;
        });
    }

    // ==========================================
    // 6. IN-PLACE IMAGE PREVIEW & DROPZONE
    // ==========================================
    document.querySelectorAll('.upload-dropzone').forEach(dropzone => {
        const input = dropzone.querySelector('.file-input');
        const previewContainer = dropzone.querySelector('.preview-container');
        const previewImg = dropzone.querySelector('.preview-img');
        const placeholder = dropzone.querySelector('.upload-placeholder');

        const handleFiles = (files) => {
            if (!files || !files[0]) return;
            const file = files[0];

            if (file.type.startsWith('image/') && previewImg && previewContainer) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImg.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                    if (placeholder) placeholder.classList.add('opacity-0');
                };
                reader.readAsDataURL(file);
            } else {
                const docLabel = document.getElementById('docsFileName');
                if (docLabel) {
                    docLabel.textContent = file.name.length > 25 ? file.name.substring(0, 22) + '...' : file.name;
                    docLabel.classList.add('text-[#00875A]', 'font-bold');
                }
            }
        };

        if (input) {
            input.addEventListener('change', (e) => handleFiles(e.target.files));
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            dropzone.addEventListener(eventName, (e) => {
                e.preventDefault();
                dropzone.classList.add('border-[#00875A]', 'bg-emerald-50/20');
            });
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropzone.addEventListener(eventName, (e) => {
                e.preventDefault();
                dropzone.classList.remove('border-[#00875A]', 'bg-emerald-50/20');
            });
        });

        dropzone.addEventListener('drop', (e) => {
            if (input && e.dataTransfer.files.length) {
                input.files = e.dataTransfer.files;
                handleFiles(input.files);
            }
        });
    });

    // ==========================================
    // 7. STEP TRANSITIONS & VALIDATION
    // ==========================================
    let currentStep = 1;
    const form = document.getElementById('vendorForm');
    const heroImage = document.getElementById('leftHeroImage');

    document.querySelectorAll('[data-next-step]').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const next = parseInt(e.currentTarget.dataset.nextStep, 10);
            if (validateStep(currentStep)) {
                switchStep(next);
            }
        });
    });

    document.querySelectorAll('[data-prev-step]').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const prev = parseInt(e.currentTarget.dataset.prevStep, 10);
            switchStep(prev);
        });
    });

    function switchStep(target) {
        document.querySelectorAll('.step-pane').forEach(el => el.classList.add('hidden'));
        document.getElementById(`step${target}Container`).classList.remove('hidden');

        const targetImg = heroImage.getAttribute(`data-step${target}-img`);
        if (targetImg) {
            heroImage.style.opacity = '0.3';
            setTimeout(() => {
                heroImage.src = targetImg;
                heroImage.style.opacity = '1';
            }, 150);
        }

        currentStep = target;
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function validateStep(step) {
        let isValid = true;

        if (step === 1) {
            isValid = checkField('legal_name', 'Please enter your legal or business name.') && isValid;

            const pass = document.getElementById('password');
            const passConfirm = document.getElementById('password_confirmation');

            if (pass.value.length < 8) {
                showError(pass, 'Password must be at least 8 characters long.');
                isValid = false;
            } else {
                clearError(pass);
            }

            if (passConfirm.value !== pass.value || !passConfirm.value) {
                showError(passConfirm, 'Passwords do not match.');
                isValid = false;
            } else {
                clearError(passConfirm);
            }

            const email = document.getElementById('business_email');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value.trim())) {
                showError(email, 'Please enter a valid email address.');
                isValid = false;
            } else {
                clearError(email);
            }

            isValid = validatePhone() && isValid;
            isValid = checkField('business_type', 'Please select a business type.') && isValid;

            // Validate Custom Country Selector
            if (!regionHiddenInput.value) {
                regionTrigger.classList.add('border-red-500');
                if (countryError) countryError.classList.remove('hidden');
                isValid = false;
            } else {
                regionTrigger.classList.remove('border-red-500');
                if (countryError) countryError.classList.add('hidden');
            }

            isValid = checkField('business_address', 'Business address is required.') && isValid;
        } else if (step === 2) {
            isValid = checkField('store_name', 'Store name is required.') && isValid;
            isValid = checkField('store_description', 'Please provide a store description.') && isValid;

            const logo = document.getElementById('store_logo');
            const logoError = document.getElementById('logoError');
            if (!logo.files.length) {
                logoError.textContent = 'Please upload a store logo.';
                logoError.classList.remove('hidden');
                isValid = false;
            } else {
                logoError.classList.add('hidden');
            }
        }

        return isValid;
    }

    function checkField(id, errorMsg) {
        const input = document.getElementById(id);
        if (!input.value.trim()) {
            showError(input, errorMsg);
            return false;
        }
        clearError(input);
        return true;
    }

    function showError(element, message) {
        element.classList.add('border-red-500');
        const err = element.closest('div').parentElement.querySelector('.error-text') ||
            element.closest('div').querySelector('.error-text');
        if (err) {
            err.textContent = message;
            err.classList.remove('hidden');
        }
    }

    function clearError(element) {
        element.classList.remove('border-red-500');
        const err = element.closest('div').parentElement.querySelector('.error-text') ||
            element.closest('div').querySelector('.error-text');
        if (err) {
            err.classList.add('hidden');
        }
    }

    // Step 3 Verification Submit
    const submitBtn = document.getElementById('submitVendorBtn');
    if (submitBtn) {
        submitBtn.addEventListener('click', () => {
            const idFront = document.getElementById('id_front');
            const idBack = document.getElementById('id_back');
            const idSelfie = document.getElementById('id_selfie');
            const idError = document.getElementById('idError');

            if (!idFront.files.length || !idBack.files.length || !idSelfie.files.length) {
                idError.textContent = 'Please upload all 3 ID verification photos (Front, Back, and Selfie).';
                idError.classList.remove('hidden');
                return;
            }

            idError.classList.add('hidden');
            form.submit();
        });
    }
});
