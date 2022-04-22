<a href="{{ $href }}" target="{{ $target }}" {{ $attributes->class([
    "inline-flex items-center justify-center rounded-lg bg-primary py-4 px-6 text-center text-base font-normal
    text-white hover:bg-opacity-90 sm:px-10 lg:px-8 xl:px-10 dark:text-white
    dark:hover:text-slate-900 dark:hover:bg-white dark:focus:ring-slate-500"
    ]) }}>
    {{ $slot }}
</a>
