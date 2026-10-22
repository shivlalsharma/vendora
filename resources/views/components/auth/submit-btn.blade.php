<button type="submit"
    {{ $attributes->merge(['class' => 'cursor-pointer w-full bg-[#00875A] hover:bg-[#00744D] text-white font-bold text-sm py-3 rounded-xl shadow-sm hover:shadow transition-all duration-200 mt-2']) }}>
    {{ $slot }}
</button>
