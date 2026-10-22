@props(['label', 'href' => '#'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'flex items-center hover:text-[#00875A] transition']) }}>
    {{ $slot }}
    <span>{{ $label }}</span>
</a>
