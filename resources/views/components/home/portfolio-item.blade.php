<div x-data="{categories:{{ json_encode($categories) }}}"
    :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden' "
    class="w-full px-4 md:w-1/2 xl:w-1/3">
    <div class="relative mb-12">
        <div class="overflow-hidden rounded-lg">
            <img src="{{ $image }}" alt="portfolio" class="w-full" />
        </div>
        <div
            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg dark:bg-slate-900 dark:text-white">
            <span class="mb-2 block text-sm font-semibold text-primary dark:text-gray-400">
                {{ implode(", ", $categories) }}
            </span>
            <h3 class="mb-4 text-xl font-bold text-dark dark:text-white">
                {{ $title }}
            </h3>
            <a href="{{ $link }}"
                class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary dark:border-primary hover:bg-primary hover:text-white dark:bg-primary dark:text-white dark:hover:bg-opacity-90">
                View Details
            </a>
        </div>
    </div>
</div>
