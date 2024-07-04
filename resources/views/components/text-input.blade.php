@props(['disabled' => false,
        'icon' => null,
        'type' => 'text'])

<div class="relative">
    <input {{ $disabled ? 'disabled' : '' }} type="{{ $type }}" {!! $attributes->merge(['class' => 'border-[#D0D5DD] focus:border-[#4B5768] focus:ring-transparent rounded-md shadow-sm px-4 py-3 pr-10']) !!}>
    @if($icon)
    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400">
        <!-- Render the icon slot -->
        {{ $icon }}
    </div>
    @endif
</div>
