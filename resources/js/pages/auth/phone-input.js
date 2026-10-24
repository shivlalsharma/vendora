import { countries } from "../../data";

document.addEventListener("DOMContentLoaded", function () {
    const phoneTrigger = document.getElementById("countryDropdownTrigger");
    const phoneMenu = document.getElementById("countryDropdownMenu");
    const phoneChevron = document.getElementById("chevronIcon");
    const phoneSearch = document.getElementById("countrySearch");
    const phoneFlagSlot = document.getElementById("selectedFlagSlot");
    const phoneDialSlot = document.getElementById("selectedDialCode");
    const hiddenDialInput = document.getElementById("dial_code");
    const phoneCountryList = document.getElementById("countryList");
    const phoneInput = document.getElementById("phone");
    let isPhoneListRendered = false;

    function renderPhoneCountries(list) {
        if (!phoneCountryList) return;
        phoneCountryList.innerHTML =
            list.length === 0
                ? `<li class="px-3 py-2 text-center text-xs text-gray-400">No countries found</li>`
                : list
                      .map(
                          (item) => `
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
            `,
                      )
                      .join("");
    }

    if (phoneCountryList) {
        phoneCountryList.addEventListener("click", (e) => {
            const btn = e.target.closest("button");
            if (!btn) return;
            const dial = btn.dataset.dial;
            const code = btn.dataset.code;

            if (phoneFlagSlot)
                phoneFlagSlot.innerHTML = `<img src="https://flagcdn.com/w40/${code}.png" alt="${code}" class="w-full h-full object-cover">`;
            if (phoneDialSlot) phoneDialSlot.textContent = dial;
            if (hiddenDialInput) hiddenDialInput.value = dial;

            togglePhoneDropdown(false);
            if (phoneInput) {
                phoneInput.focus();
            }
        });
    }

    function closeAllDropdowns() {
        togglePhoneDropdown(false);
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
        renderPhoneCountries(
            countries.filter(
                (c) =>
                    c.name.toLowerCase().includes(query) ||
                    c.dial.includes(query),
            ),
        );
    });

    phoneInput?.addEventListener("input", () => {
        phoneInput.value = phoneInput.value.replace(/[^\d\s\-()]/g, "");
    });

    // Close any menu on outside click
    document.addEventListener("click", (e) => {
        if (
            phoneMenu &&
            !phoneMenu.contains(e.target) &&
            !phoneTrigger?.contains(e.target)
        )
            togglePhoneDropdown(false);
    });
});
