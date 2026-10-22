@props([
    'label' => 'Notifications',
    'href' => '#',
    'count' => 0,
    'badgeClass' => '-top-1 -right-1.5 bg-[#EF4444] text-white text-[10px]',
    'variant' => 'icon',
    'active' => false,
])

@php
    $isNav = ($variant ?? 'icon') === 'nav';
@endphp

<a href="{{ $href }}" @if ($isNav && $active) aria-current="page" @endif
    {{ $attributes->class(['relative transition', 'flex flex-col items-center gap-1' => $isNav, 'text-[#00875A]' => $isNav && $active, 'text-gray-500 hover:text-[#00875A]' => $isNav && !$active]) }}
    aria-label="{{ $label }}{{ $variant === 'icon' && $count > 0 ? ', ' . $count . ' items' : '' }}">
    {{ $slot }}
    @if ($isNav)
        <span class="text-[10px] font-semibold">{{ $label }}</span>
    @elseif ($count > 0)
        <span
            class="absolute {{ $badgeClass ?? '' }} text-white font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-xs">{{ $count > 99 ? '99+' : $count }}</span>
    @endif
</a>
