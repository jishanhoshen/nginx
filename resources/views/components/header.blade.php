<header class="w-full sticky inset-x-0 top-0 z-50 bg-transparent">
    <div class="container m-auto">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-6 w-auto" src="{{ asset($logo) }}" alt="">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button id="menu-opener" type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">

            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-12">
                @foreach ($menu as $item)
                    <a href="{{ $item === 'Home' ? '/' : $item }}"
                        class="text-sm font-semibold leading-6 text-gray-900">{{ $item }}</a>
                @endforeach
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div id="mobile-menu" class="lg:hidden hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div id="backdrop".mv class="fixed inset-0 z-50"></div>
            <div
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                    <button id="menu-closer" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            @foreach ($menu as $item)
                                <a href="{{ $item === 'Home' ? '/' : $item }}"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">{{ $item }}</a>
                            @endforeach
                        </div>
                        <div class="py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    const menuOpener = document.getElementById('menu-opener');
    const menuCloser = document.getElementById('menu-closer');
    const mobileMenu = document.getElementById('mobile-menu');
    const backdrop = document.getElementById('backdrop');

    // Function to open the mobile menu
    function openMobileMenu() {
        mobileMenu.classList.remove('hidden');
        backdrop.classList.remove('hidden');
    }

    // Function to close the mobile menu
    function closeMobileMenu() {
        mobileMenu.classList.add('hidden');
        backdrop.classList.add('hidden');
    }

    // Add click event listener to the menu opener button
    menuOpener.addEventListener('click', openMobileMenu);

    // Add click event listener to the menu closer button
    menuCloser.addEventListener('click', closeMobileMenu);

    // Add click event listener to the backdrop
    backdrop.addEventListener('click', closeMobileMenu);
</script>
