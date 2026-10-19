<div @class([ 'relative rounded-3xl p-6 sm:p-8 flex items-center justify-between overflow-hidden shadow-sm'
    , 'bg-black text-white'=> $banner['theme'] === 'dark',
    'bg-gradient-to-r from-[#ffeae5] to-[#fde2db] text-[#0d1b2a]' => $banner['theme'] === 'fashion',
    ])>

    <div class="z-10 max-w-[60%] space-y-2">
        <span @class([ 'text-xs font-semibold' , 'text-gray-400'=> $banner['theme'] === 'dark',
            'text-rose-600' => $banner['theme'] === 'fashion',
            ])>
            {{ $banner['label'] }}
        </span>

        <h3 class="text-2xl sm:text-3xl font-extrabold leading-tight">
            {{ $banner['title'] }}
        </h3>

        <p @class([ 'text-sm font-semibold pb-2' , 'text-gray-300'=> $banner['theme'] === 'dark',
            'text-gray-700' => $banner['theme'] === 'fashion',
            ])>
            {{ $banner['offer'] }}
        </p>

        <a href="{{ $banner['button_link'] }}"
            @class([ 'inline-flex items-center gap-2 px-4 py-2 rounded-lg font-semibold text-xs transition'
            , 'bg-white text-gray-900 hover:bg-gray-100'=> $banner['theme'] === 'dark',
            'bg-[#008c52] text-white hover:bg-[#007444]' => $banner['theme'] === 'fashion',
            ])>
            {{ $banner['button_text'] }}

            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </a>
    </div>

    <div class="w-1/2 absolute -right-2 top-0 bottom-0 flex items-center">
        <img src="{{ $banner['image'] }}" alt="{{ $banner['image_alt'] }}" class="h-full w-full object-cover object-left
                         {{ $banner['theme'] === 'dark' ? 'opacity-90' : '' }}">
    </div>

</div>