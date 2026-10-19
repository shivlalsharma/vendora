<section>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl sm:text-2xl font-bold text-[#0B1527]">Featured Products</h2>
        <a href="#all-products" class="text-sm font-semibold text-[#00875A] hover:underline flex items-center gap-1">
            <span>View All</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>

    <!-- Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        <?php foreach (config('data.products') as $prod): ?>
        <x-home.product-card :product="$prod" />
        <?php endforeach; ?>
    </div>
</section>