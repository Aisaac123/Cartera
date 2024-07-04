@props(['icon' => null])

<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex gap-1 justify-center items-center px-3 py-4 bg-[#E4E7EB] border border-gray-300 rounded-md font-inter font-semibold text-base text-[#4B5768] shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    @if($icon)
        {{ $icon }}
    @endif

    {{ $slot }}
</button>
