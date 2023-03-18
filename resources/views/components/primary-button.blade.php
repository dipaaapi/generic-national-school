{{-- <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#EA526F] dark:bg-red-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-red-700 dark:hover:bg-[#EA526F] focus:bg-red-700 dark:focus:bg-white active:bg-red-900 dark:active:bg-red-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-[#EA526F] transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button> --}}
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#EA526F] hover:bg-opacity-50 border text-white hover:text-black hover:shadow border-transparent rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
