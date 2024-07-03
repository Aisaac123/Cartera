@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'focus:border-[#4B5768] focus:border-indigo-500 focus:ring-indigo-0 rounded-md shadow-sm']) !!}>
