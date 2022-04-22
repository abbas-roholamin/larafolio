<!-- ====== Hero Section Start -->
<div class="relative bg-white pt-[60px] pb-[50px] lg:pt-[80px] dark:bg-slate-900 dark:text-white">
    <div class="container">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 lg:w-5/12">
                <div class="hero-content">
                    <h1
                        class="mb-6 text-4xl font-bold leading-snug text-dark sm:text-[42px] lg:text-[40px] xl:text-[42px] dark:text-white">
                        Hi, I'am <br />
                        Abbas Roholamin.
                    </h1>
                    <p class="mb-8 max-w-[480px] text-base text-body-color dark:text-gray-400">
                        I am a web developer with 1.5+ years of experience
                        I'm still learning and trying new things to add to my knowledge as much as possible.
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <x-common.button-link href="https://github.com/abbas-roholamin" target="_blank">
                                GitHub
                            </x-common.button-link>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="inline-flex items-center justify-center py-4 px-6 text-center text-base font-normal text-body-color hover:text-primary dark:hover:text-white sm:px-10 lg:px-8 xl:px-10 ">
                                <span class="mr-2 dark:text-slate-100">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11" cy="11" r="11" fill="#3056D3" />
                                        <rect x="6.90906" y="13.3636" width="8.18182" height="1.63636" fill="white" />
                                        <rect x="10.1818" y="6" width="1.63636" height="4.09091" fill="white" />
                                        <path d="M11 12.5454L13.8343 9.47726H8.16576L11 12.5454Z" fill="white" />
                                    </svg>
                                </span>
                                Download CV
                            </a>
                        </li>
                    </ul>
                    <div class="clients pt-16">
                        <h6 class="flex items-center text-xs font-normal text-body-color mb-4">
                            Follow me on social media
                            <span class="ml-2 mt-1 inline-block h-[1px] w-8 bg-body-color"></span>
                        </h6>
                        <x-common.social-icons></x-common.social-icons>
                    </div>
                </div>
            </div>
            <div class="hidden px-4 lg:block lg:w-1/12"></div>
            <div class="w-full px-4 lg:w-6/12">
                <div class="lg:ml-auto lg:text-right">
                    <div class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img src="{{ asset('images/hero/hero-image-01.png') }}" alt="hero"
                            class="max-w-full lg:ml-auto" />
                        <x-common.dot-svg class="absolute -left-8 -bottom-8 z-[-1]"></x-common.dot-svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- ====== Hero Section End -->
