<!-- ====== Navbar Section Start -->

<header x-data="
  {
    navbarOpen: false
  }
" class="flex w-full items-center bg-white dark:bg-slate-900 dark:text-white relative">
    <div class="container">
        <div class="flex">
            <div class="w-full md:w-1/4 px-4">
                <a href="javascript:void(0)" class="flex items-center py-5">
                    <img src="{{ asset('images/logo/logo.svg') }}" alt="logo" class="w-36  dark:hidden" />
                    <img src="{{ asset('images/logo/logo-white.svg') }}" alt="logo"
                        class="w-36 dark:inline-block hidden" />
                </a>
            </div>
            <div class="flex flex-grow px-4 justify-end">
                <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                    x-bind:class="navbarOpen && 'navbarTogglerActive'">
                </x-layout.navbar-hamburger>
                <nav :class="!navbarOpen && 'hidden' " id="navbarCollapse"
                    class="absolute right-0 top-full min-w-full bg-white dark:bg-slate-900 dark:text-white z-50 py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                    <ul class="blcok lg:flex lg:justify-end">
                        @foreach ($navigatinItems as $item )
                        <x-layout.navbar-item :href="$item['href']">{{ $item["label"] }}</x-layout.navbar-item>
                        @endforeach
                    </ul>
                </nav>
                <button type="button" @click="darkMode = !darkMode" class="mr-16 lg:mr-0">
                    <span class="dark:hidden"><svg viewBox="0 0 24 24" fill="none" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                            <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" class="fill-sky-400/20 stroke-sky-500">
                            </path>
                            <path
                                d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836"
                                class="stroke-sky-500"></path>
                        </svg>
                    </span>
                    <span class="hidden dark:inline"><svg viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z"
                                class="fill-sky-400/20"></path>
                            <path
                                d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z"
                                class="fill-sky-500"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z"
                                class="fill-sky-500"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- ====== Navbar Section End -->
