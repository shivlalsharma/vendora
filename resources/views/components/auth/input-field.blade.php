@props(['type' => 'text', 'name', 'id' => null, 'value' => null, 'required' => false, 'placeholder' => ''])

<div class="relative flex items-center">
    @isset($icon)
        <span class="absolute left-3.5 text-gray-400 pointer-events-none">
            {{ $icon }}
        </span>
    @endisset

    <input type="{{ $type }}" id="{{ $id ?? $name }}" name="{{ $name }}" value="{{ old($name, $value) }}"
        {{ $required ? 'required' : '' }} placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' => 'w-full ' . (isset($icon) ? 'pl-11 ' : 'pl-4 ') . 'pr-4 py-2.5 text-xs sm:text-sm text-gray-800 placeholder-gray-400 bg-white border border-gray-200 rounded-xl focus:outline-none focus:border-[#00875A] focus:ring-1 focus:ring-[#00875A] transition']) }}>

    @isset($toggleBtn)
        {{ $toggleBtn }}
    @endisset

</div>
@error($name)
    <p class="text-xs text-red-500 font-medium">{{ $message }}</p>
@enderror
