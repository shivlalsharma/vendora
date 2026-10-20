<section>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl sm:text-2xl font-bold text-[#0B1527]">Shop by Category</h2>
        <a href="#all-categories" class="text-sm font-semibold text-[#00875A] hover:underline flex items-center gap-1">
            <span>View All</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>

    <!-- Categories Grid / Responsive Slider -->
    <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-8 gap-3.5">
        <?php foreach (config('data.categories') as $cat): ?>
        <x-home.category-card :category="$cat" />
        <?php endforeach; ?>
    </div>
</section>
