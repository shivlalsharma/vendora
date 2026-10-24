@props(['step', 'title', 'bgColor' => '', 'textColor' => ''])

<div class="flex items-center gap-2 pt-2 pb-2">
    <div class="flex items-center gap-2">
        <span
            class="w-7 h-7 rounded-full bg-[#00875A] text-white text-xs font-bold flex items-center justify-center">1</span>
        <span class="text-xs font-bold text-[#00875A] border-b-2 border-[#00875A] pb-0.5">Business
            details</span>
    </div>
    <div class="w-8 sm:w-16 h-[1.5px] bg-gray-200"></div>
    <div class="flex items-center gap-2 text-gray-400">
        <span
            class="w-7 h-7 rounded-full border border-gray-300 text-xs font-semibold flex items-center justify-center">2</span>
        <span class="text-xs font-medium hidden sm:inline">Store setup</span>
    </div>
    <div class="w-8 sm:w-16 h-[1.5px] bg-gray-200"></div>
    <div class="flex items-center gap-2 text-gray-400">
        <span
            class="w-7 h-7 rounded-full border border-gray-300 text-xs font-semibold flex items-center justify-center">3</span>
        <span class="text-xs font-medium hidden sm:inline">Verification</span>
    </div>
</div>
