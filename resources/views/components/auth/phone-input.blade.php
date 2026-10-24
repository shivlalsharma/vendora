<div id="phoneWrapper"
    class="relative flex items-center border border-gray-200 rounded-xl bg-white focus-within:border-[#00875A] focus-within:ring-1 focus-within:ring-[#00875A] transition">
    <button type="button" id="countryDropdownTrigger" aria-haspopup="listbox" aria-expanded="false"
        class="flex items-center pl-3 pr-2.5 py-2.5 gap-1.5 border-r border-gray-200 text-xs sm:text-sm font-semibold text-gray-800 hover:bg-gray-50/80 rounded-l-xl transition cursor-pointer select-none shrink-0">
        <span id="selectedFlagSlot"
            class="w-5 h-3.5 rounded-[2px] shadow-2xs overflow-hidden flex items-center justify-center shrink-0">
            <img src="https://flagcdn.com/w40/in.png" alt="IN" class="w-full h-full object-cover">
        </span>
        <span id="selectedDialCode" class="text-gray-900 font-bold">+91</span>
        <svg id="chevronIcon" class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200" fill="none"
            stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <input type="hidden" name="dial_code" id="dial_code" value="+91">
    <input type="tel" name="phone" id="phone" placeholder="98765 43210"
        class="w-full px-3.5 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-transparent focus:outline-none">

    <div id="countryDropdownMenu"
        class="hidden absolute left-0 right-0 top-[calc(100%+6px)] bg-white border border-gray-100 rounded-2xl shadow-[0_12px_40px_rgba(0,0,0,0.12)] p-2.5 z-50 transition-all duration-150">
        <div class="relative mb-2 px-0.5">
            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </span>
            <input type="text" id="countrySearch" placeholder="Search country or code (+91)..." autocomplete="off"
                class="w-full pl-9 pr-3 py-1.5 text-xs text-gray-800 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:bg-white transition">
        </div>
        <ul id="countryList" class="max-h-56 overflow-y-auto space-y-0.5 pr-1.5 text-xs custom-scrollbar">
        </ul>
    </div>
</div>
