<button {{ $attributes->class([
    "w-full rounded border border-primary bg-primary p-3 text-white transition hover:bg-opacity-90 dark:text-white
    dark:hover:text-white dark:focus:ring-slate-500 "
    ]) }}>
    {{ $slot }}
</button>
