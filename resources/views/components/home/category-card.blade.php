<a href="#cat"
    class="group bg-gray-100 border border-gray-100 rounded-2xl p-4 flex flex-col items-center justify-center text-center transition-all">
    <div
        class="w-full h-20 rounded-xl bg-gray-50 flex items-center justify-center overflow-hidden mb-3 group-hover:scale-105 transition-transform">
        <img src="<?= $category['img'] ?>" alt="<?= $category['name'] ?>" class="w-full h-full object-cover">
    </div>
    <span
        class="text-xs sm:text-sm font-semibold text-gray-800 group-hover:text-[#008c52] transition-colors leading-tight line-clamp-1">
        <?= $category['name'] ?>
    </span>
</a>