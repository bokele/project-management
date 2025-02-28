<!-- ========== HEADER ========== -->
<header class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-7 ">
    <nav
        class="relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 lg:px-8 mx-auto">
        <div class="lg:col-span-3 flex items-center">
            <!-- Logo -->
            <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                href="/" aria-label="Preline">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 200 200" fill="none">
                    <!-- Background Circle -->
                    <circle cx="100" cy="100" r="50" stroke="white" stroke-width="5" fill="transparent" />

                    <!-- UVAPM Text -->
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle"
                        font-family="Arial, sans-serif" font-size="20" font-weight="bold" fill="white">
                        UVAPM
                    </text>

                    <!-- Optional: Rays or Light Effect -->
                    <line x1="100" y1="20" x2="100" y2="50" stroke="white" stroke-width="3" />
                    <line x1="180" y1="100" x2="150" y2="100" stroke="white" stroke-width="3" />
                    <line x1="100" y1="180" x2="100" y2="150" stroke="white" stroke-width="3" />
                    <line x1="20" y1="100" x2="50" y2="100" stroke="white" stroke-width="3" />
                </svg>
            </a>
            <!-- End Logo -->

            <div class="ms-1 sm:ms-2">
                <!-- Templates Dropdown -->
                <div class="hs-dropdown  relative  [--auto-close:inside] inline-flex">
                    <button id="hs-dropdown-preview-navbar" type="button"
                        class="hs-dropdown-toggle  group relative flex justify-center items-center size-8 text-xs rounded-full    text-neutral-200 hover:bg-neutral-700 focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-none"
                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    </button>
                </div>
                <!-- End Templates Dropdown -->
            </div>
        </div>

        <!-- Button Group -->
        @if (Route::has('login'))
            <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-lg     hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none bg-neutral-900  text-white hover:text-white focus:text-white">
                        Sign in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-lg border border-white  focus:outline-none  transition disabled:opacity-50 disabled:pointer-events-none hover:bg-white/10 text-white hover:text-white focus:text-white">
                            Sign up
                        </a>
                    @endif
                @endauth

                <div class="lg:hidden">
                    <button type="button"
                        class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border    focus:outline-none  disabled:opacity-50 disabled:pointer-events-none text-white border-neutral-700 hover:bg-neutral-700 focus:bg-neutral-700"
                        id="hs-navbar-hcail-collapse" aria-expanded="false" aria-controls="hs-navbar-hcail"
                        aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-hcail">
                        <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <!-- End Button Group -->

        <!-- Collapse -->
        <div id="hs-navbar-hcail"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6"
            aria-labelledby="hs-navbar-hcail-collapse">
            <div
                class="flex flex-col gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">
                <div>
                    <a class="relative inline-block  focus:outline-none before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 text-white"
                        href="#" aria-current="page">Princing</a>
                </div>
                <div>
                    <a class="inline-block  hover:text-gray-100 focus:outline-none focus:text-gray-100 text-white  "
                        href="#">Feature</a>
                </div>


            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>
<!-- ========== END HEADER ========== -->
