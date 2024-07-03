@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#191D23]']) }}>
    {{ $value ?? $slot }}
</label>
