<div
    class="bg-white rounded-2xl border border-gray-100 hover:border-gray-200 shadow-sm hover:shadow-lg transition-all p-3 flex flex-col justify-between group">

    <!-- Top Image & Badges -->
    <div class="relative bg-gray-50 rounded-xl overflow-hidden aspect-square flex items-center justify-center mb-3">
        <?php if ($product['badge']): ?>
        <span
            class="absolute top-2 left-2 z-10 px-2 py-0.5 rounded text-[11px] font-bold <?= $product['badge_color'] ?>">
            <?= $product['badge'] ?>
        </span>
        <?php endif; ?>

        <!-- Wishlist Icon -->
        <button
            class="absolute top-2 right-2 z-10 p-1.5 rounded-full bg-white/90 text-gray-500 hover:text-red-500 transition shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
        </button>

        <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['title']) ?>"
            class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
    </div>

    <!-- Product Info -->
    <div class="space-y-1">
        <h3 class="text-sm font-bold text-gray-900 group-hover:text-[#00875A] transition truncate">
            <?= htmlspecialchars($product['title']) ?>
        </h3>
        <p class="text-[11px] text-gray-500 truncate">
            <?= htmlspecialchars($product['subtitle']) ?>
        </p>

        <!-- Rating -->
        <div class="flex items-center gap-1 pt-0.5">
            <svg class="w-3.5 h-3.5 text-amber-400 fill-current" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <span class="text-xs font-bold text-gray-800"><?= $product['rating'] ?></span>
            <span class="text-[11px] text-gray-400">(<?= $product['reviews'] ?>)</span>
        </div>

        <!-- Pricing -->
        <div class="flex items-baseline gap-2 pt-1">
            <span class="text-base font-extrabold text-gray-900">$<?= $product['price'] ?></span>
            <span class="text-xs text-gray-400 line-through">$<?= $product['old_price'] ?></span>
        </div>
    </div>

    <!-- Add to Cart Button -->
    <button
        class="cursor-pointer mt-3 w-full bg-[#008c52] hover:bg-[#007444] text-white py-2 px-3 rounded-lg text-xs font-semibold flex items-center justify-center gap-1.5 transition">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17" />
        </svg>
        Add to Cart
    </button>
</div>