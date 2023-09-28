{{-- Desktop sidebar Start --}}
<aside class="aside">
    <div class="py-4 text-slate-500 dark:text-slate-300">
        {{-- Logo Name Start --}}
        <a class="logo" href="{{ route('dashboard') }}">
            Nar Computer Center
        </a>
        {{-- Logo Name End --}}

        {{-- Links Start --}}
        <ul class="mt-6">
            {{-- Dashboard Start --}}
            <li class="relative px-6 py-3">
                {{-- Line Active Start --}}
                <span class="{{ Active::checkRoute('dashboard', 'sidebar-line-active') }}"></span>
                {{-- Line Active End --}}

                {{-- Dashboard Link Start --}}
                <a href="{{ route('dashboard') }}" class="sidebar-link {{ Active::checkRoute('dashboard', 'sidebar-link-active') }}">
                    <i class="fa-solid fa-gauge-high ml-0.5 text-lg"></i>
                    <span class="ml-4">Dashboard</span>
                </a>
                {{-- Dashboard Link End --}}
            </li>
            {{-- Dashboard End --}}

            {{-- Article Dropdown Start --}}
            <li class="relative px-6 py-3" x-data="{{ Active::checkRoute(['article.index', 'article.create'], '{ isArticleMenuOpen: true }') }}">
                {{-- Line Active Start --}}
                <span class="{{ Active::checkRoute(['article.index', 'article.create', 'article.show'], 'sidebar-line-active') }}"></span>
                {{-- Line Active End --}}

                {{-- Toggle Button Articles Start --}}
                <button @click="toggleArticleMenu"
                    class="sidebar-link-toggle {{ Active::checkRoute(['article.index', 'article.create', 'article.show'], 'sidebar-link-active') }}">
                    <span class="inline-flex items-center">
                        <i class="fa-solid fa-newspaper ml-0.5 text-lg"></i>
                        <span class="ml-4">Article</span>
                    </span>
                    <i :class="isArticleMenuOpen ? 'fa-chevron-up' : 'fa-chevron-down'" class="fa-solid"></i>
                    {{-- <i class="fa-solid fa-chevron-up rotate-180"></i> --}}
                </button>
                {{-- Toggle Button Articles End --}}

                {{-- Menu Dropdown Articles Start --}}
                <div x-show="isArticleMenuOpen" x-transition>
                    <ul class="sidebar-dropdown">
                        {{-- Edit Article --}}
                        <li class="sidebar-dropdown-link {{ Active::checkRoute('article.index', 'sidebar-dropdown-link-active') }}">
                            <a class="w-full" href="{{ route('article.index') }}">
                                <i class="fa-solid fa-pen-to-square mr-1"></i>
                                Edit Article
                            </a>
                        </li>
                        {{-- Create Article --}}
                        <li class="sidebar-dropdown-link {{ Active::checkRoute('article.create', 'sidebar-dropdown-link-active') }}">
                            <a class="w-full" href="{{ route('article.create') }}">
                                <i class="fa-solid fa-plus mr-1"></i>
                                Create Article
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- Menu Dropdown Articles End --}}
            </li>
            {{-- Article Dropdown End --}}

            {{-- Laptops Start --}}
            <li class="relative px-6 py-3" x-data="{{ Active::checkRoute(['laptop.index', 'laptop.create'], '{ isLaptopMenuOpen: true }') }}">
                {{-- Line Active End --}}
                <span class="{{ Active::checkRoute(['laptop.index', 'laptop.create'], 'sidebar-line-active') }}"></span>
                {{-- Line Active End --}}

                {{-- Toggle Button Laptops Start --}}
                <button @click="toggleLaptopMenu"
                    class="sidebar-link-toggle {{ Active::checkRoute(['laptop.index', 'laptop.create'], 'sidebar-link-active') }}">
                    <span class="inline-flex items-center">
                        <i class="fa-solid fa-laptop ml-0.5"></i>
                        <span class="ml-4">Laptop</span>
                    </span>
                    <i :class="isLaptopMenuOpen ? 'rotate-down' : 'rotate-up'" class="fa-solid fa-chevron-down"></i>
                </button>
                {{-- Toggle Button Laptops End --}}

                {{-- Menu Dropdown Laptops Start --}}
                <div x-show="isLaptopMenuOpen" x-transition>
                    <ul class="sidebar-dropdown">
                        {{-- Edit Laptop --}}
                        <li class="sidebar-dropdown-link {{ Active::checkRoute('laptop.index', 'sidebar-dropdown-link-active') }}">
                            <a class="w-full" href="{{ route('laptop.index') }}">
                                <i class="fa-solid fa-pen-to-square mr-1"></i>
                                Edit Laptop
                            </a>
                        </li>
                        {{-- Add Laptop --}}
                        <li class="sidebar-dropdown-link {{ Active::checkRoute('laptop.create', 'sidebar-dropdown-link-active') }}">
                            <a class="w-full" href="{{ route('laptop.create') }}">
                                <i class="fa-solid fa-plus mr-1"></i>
                                Add Laptop
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- Menu Dropdown Laptops End --}}
            </li>
            {{-- Laptops End --}}

            {{-- Message Start --}}
            <li class="relative px-6 py-3">
                {{-- Line Active Start --}}
                <span class="{{ Active::checkRoute('message', 'sidebar-line-active') }}"></span>
                {{-- Line Active End --}}

                {{-- Message Link Start --}}
                <a href="{{ route('message') }}" class="sidebar-link {{ Active::checkRoute('message', 'sidebar-link-active') }}">
                    <i class="fa-solid fa-message ml-0.5 text-lg"></i>
                    <span class="ml-4">Message</span>
                </a>
                {{-- Message Link End --}}
            </li>
            {{-- Message End --}}
        </ul>
        {{-- Links End --}}
    </div>
</aside>
{{-- Desktop sidebar End --}}

{{-- Backdrop Start --}}
<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center md:hidden">
</div>
{{-- Backdrop End --}}

{{-- Mobile sidebar Start --}}
<aside class="fixed inset-y-0 z-20 mt-16 w-64 flex-shrink-0 overflow-y-auto bg-white dark:bg-slate-800 md:hidden" x-show="isSideMenuOpen"
    x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu" @keydown.escape="closeSideMenu">
    <div class="py-4 text-slate-500 dark:text-slate-400">
        <a class="ml-6 text-lg font-bold text-slate-800 dark:text-slate-200" href="{{ route('dashboard') }}">
            Nar Computer Center
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <span class="absolute inset-y-0 left-0 w-1 rounded-br-lg rounded-tr-lg bg-sky-600"></span>
                <a class="inline-flex w-full items-center text-sm font-semibold text-slate-800 transition-colors duration-150 hover:text-slate-800 dark:text-slate-100 dark:hover:text-slate-200"
                    href="index.html">
                    <i class="fa-solid fa-gauge-high ml-0.5 text-lg"></i>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul>
            <li class="relative px-6 py-3">
                <button
                    class="inline-flex w-full items-center justify-between text-sm font-semibold transition-colors duration-150 hover:text-slate-800 dark:hover:text-slate-200"
                    @click="toggleArticleMenu">
                    <span class="inline-flex items-center">
                        <i class="fa-solid fa-newspaper ml-0.5 text-lg"></i>
                        <span class="ml-4">Articles</span>
                    </span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div x-show="isArticleMenuOpen" x-transition>
                    <ul
                        class="mt-2 space-y-2 overflow-hidden rounded-md bg-slate-50 p-2 text-sm font-medium text-slate-500 shadow-inner dark:bg-slate-900 dark:text-slate-400">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-slate-800 dark:hover:text-slate-200">
                            <i class="fa-solid fa-pen-to-square mr-1"></i>
                            <a class="w-full" href="pages/login.html">Edit Article</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-slate-800 dark:hover:text-slate-200">
                            <a class="w-full" href="pages/create-account.html">
                                <i class="fa-solid fa-plus mr-1"></i>
                                Create Article
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative px-6 py-3">
                <button
                    class="inline-flex w-full items-center justify-between text-sm font-semibold transition-colors duration-150 hover:text-slate-800 dark:hover:text-slate-200"
                    @click="toggleLaptopMenu">
                    <span class="inline-flex items-center">
                        <i class="fa-solid fa-laptop ml-0.5"></i>
                        <span class="ml-4">Laptops</span>
                    </span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div x-show="isLaptopMenuOpen" x-transition>
                    <ul
                        class="mt-2 space-y-2 overflow-hidden rounded-md bg-slate-50 p-2 text-sm font-medium text-slate-500 shadow-inner dark:bg-slate-900 dark:text-slate-400">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-slate-800 dark:hover:text-slate-200">
                            <i class="fa-solid fa-pen-to-square mr-1"></i>
                            <a class="w-full" href="pages/login.html">Edit Laptop</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-slate-800 dark:hover:text-slate-200">
                            <a class="w-full" href="pages/create-account.html">
                                <i class="fa-solid fa-plus mr-1"></i>
                                Add Laptop
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative px-6 py-3">
                <a class="inline-flex w-full items-center text-sm font-semibold transition-colors duration-150 hover:text-slate-800 dark:hover:text-slate-200"
                    href="charts.html">
                    <i class="fa-solid fa-message ml-0.5 text-lg"></i>
                    <span class="ml-4">Message</span>
                </a>
            </li>
        </ul>
        <div class="my-6 px-6">
            <button
                class="focus:shadow-outline-sky flex w-full items-center justify-between rounded-lg border border-transparent bg-sky-600 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 hover:bg-sky-700 focus:outline-none active:bg-sky-600">
                Create account
                <span class="ml-2"><i class="fa-solid fa-plus"></i></span>
            </button>
        </div>
    </div>
</aside>
{{-- Mobile sidebar End --}}
