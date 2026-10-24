<nav class="w-full bg-white border-b border-gray-100 hidden lg:block">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6 flex items-center gap-8 text-sm font-semibold">
        <!-- Category Toggle Button -->
        <button class="flex items-center gap-3 px-4 py-3 border-r border-gray-100 text-gray-800 hover:text-[#00875A]">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span>All Categories</span>
            <svg class="w-3.5 h-3.5 text-gray-400 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <!-- Navigation Links -->
        <div class="flex items-center gap-8 py-3 text-gray-600 font-medium">
            <a href="{{ route('home') }}"
                class="relative text-[#00875A] font-bold py-1 after:absolute after:bottom-[-13px] after:left-0 after:right-0 after:h-[2.5px] after:bg-[#00875A] after:rounded-full">
                Home
            </a>
            <a href="#shop" class="hover:text-[#00875A] transition">Shop</a>
            <a href="#vendors" class="hover:text-[#00875A] transition">Vendors</a>
            <a href="#deals" class="hover:text-[#00875A] transition">Deals</a>
            <a href="#about" class="hover:text-[#00875A] transition">About Us</a>
            <a href="#contact" class="hover:text-[#00875A] transition">Contact</a>
        </div>
    </div>
</nav>
