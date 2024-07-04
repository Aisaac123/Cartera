<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center items-center px-3 py-4 bg-[#E4E7EB] border border-transparent rounded-md font-inter font-semibold text-sm text-[#4B5768] hover:bg-[#299D91] focus:bg-[#299D91] active:bg-[#299D91] hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
