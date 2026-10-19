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
    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-3.5">
        <?php foreach ($categories as $cat): ?>
        <a href="#cat"
            class="group bg-gray-100 border border-gray-100 rounded-2xl p-4 flex flex-col items-center justify-center text-center transition-all">
            <div
                class="w-full h-20 rounded-xl bg-gray-50 flex items-center justify-center overflow-hidden mb-3 group-hover:scale-105 transition-transform">
                <img src="<?= $cat['img'] ?>" alt="<?= $cat['name'] ?>" class="w-full h-full object-cover">
            </div>
            <span
                class="text-xs sm:text-sm font-semibold text-gray-800 group-hover:text-[#008c52] transition-colors leading-tight line-clamp-1">
                <?= $cat['name'] ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</section>
