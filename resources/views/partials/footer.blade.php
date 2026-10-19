<footer class="bg-[#0B1320] text-gray-400 text-xs mt-10 pt-14 pb-6 border-t border-gray-800">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-gray-800">

            <!-- Brand Info -->
            <div class="lg:col-span-4 space-y-4">
                <a href="#" class="flex items-center gap-2">
                    <svg class="h-8 w-auto" viewBox="0 0 460 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M140 120 C140 60, 220 60, 220 120" stroke="#00875A" stroke-width="26"
                            stroke-linecap="round" fill="none" />
                        <rect x="70" y="110" width="220" height="230" rx="42" fill="#00875A" />
                        <path d="M125 150 L180 270 L235 150" stroke="#FFFFFF" stroke-width="32" stroke-linecap="round"
                            stroke-linejoin="round" fill="none" />
                    </svg>
                    <span class="text-2xl font-extrabold text-white tracking-tight">Vendora</span>
                </a>
                <p class="text-gray-400 text-xs leading-relaxed max-w-sm">
                    Vendora is a multi-vendor marketplace where buyers and sellers come together to create a better
                    shopping experience.
                </p>
                <div class="flex items-center gap-3 pt-2 text-gray-400">
                    <!-- Social Icons -->
                    <a href="#"
                        class="w-8 h-8 rounded-full bg-gray-800/80 flex items-center justify-center hover:text-white transition">
                        <span class="font-bold text-xs">f</span>
                    </a>
                    <a href="#"
                        class="w-8 h-8 rounded-full bg-gray-800/80 flex items-center justify-center hover:text-white transition">
                        <span class="font-bold text-xs">ig</span>
                    </a>
                    <a href="#"
                        class="w-8 h-8 rounded-full bg-gray-800/80 flex items-center justify-center hover:text-white transition">
                        <span class="font-bold text-xs">𝕏</span>
                    </a>
                    <a href="#"
                        class="w-8 h-8 rounded-full bg-gray-800/80 flex items-center justify-center hover:text-white transition">
                        <span class="font-bold text-xs">▶</span>
                    </a>
                    <a href="#"
                        class="w-8 h-8 rounded-full bg-gray-800/80 flex items-center justify-center hover:text-white transition">
                        <span class="font-bold text-xs">P</span>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="lg:col-span-2 space-y-3">
                <h5 class="text-sm font-bold text-white tracking-wide">Quick Links</h5>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white transition">Home</a></li>
                    <li><a href="#shop" class="hover:text-white transition">Shop</a></li>
                    <li><a href="#vendors" class="hover:text-white transition">Vendors</a></li>
                    <li><a href="#deals" class="hover:text-white transition">Deals</a></li>
                    <li><a href="#about" class="hover:text-white transition">About Us</a></li>
                    <li><a href="#contact" class="hover:text-white transition">Contact</a></li>
                </ul>
            </div>

            <!-- Customer Service -->
            <div class="lg:col-span-2 space-y-3">
                <h5 class="text-sm font-bold text-white tracking-wide">Customer Service</h5>
                <ul class="space-y-2">
                    <li><a href="#help" class="hover:text-white transition">Help Center</a></li>
                    <li><a href="#shipping" class="hover:text-white transition">Shipping Info</a></li>
                    <li><a href="#returns" class="hover:text-white transition">Return Policy</a></li>
                    <li><a href="#track" class="hover:text-white transition">Track Order</a></li>
                    <li><a href="#faq" class="hover:text-white transition">FAQ</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div class="lg:col-span-2 space-y-3">
                <h5 class="text-sm font-bold text-white tracking-wide">Legal</h5>
                <ul class="space-y-2">
                    <li><a href="#terms" class="hover:text-white transition">Terms & Conditions</a></li>
                    <li><a href="#privacy" class="hover:text-white transition">Privacy Policy</a></li>
                    <li><a href="#cookie" class="hover:text-white transition">Cookie Policy</a></li>
                </ul>
            </div>

            <!-- Subscribe to Our Newsletter -->
            <div class="lg:col-span-2 space-y-3">
                <h5 class="text-sm font-bold text-white tracking-wide">Subscribe to Our Newsletter</h5>
                <p class="text-gray-400 text-xs">Get the latest updates and offers.</p>
                <form action="#" method="POST" class="space-y-2">
                    <input type="email" placeholder="Your email address"
                        class="w-full bg-[#182232] border border-gray-700/60 rounded-lg px-3.5 py-2 text-xs text-white placeholder-gray-500 focus:outline-none focus:border-[#00875A]">
                    <button type="submit"
                        class="w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold py-2 rounded-lg text-xs transition">
                        Subscribe
                    </button>
                </form>
            </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="pt-6 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-500 gap-2">
            <p>&copy; <?= date('Y') ?> Vendora. All rights reserved.</p>
        </div>
    </div>
</footer>
