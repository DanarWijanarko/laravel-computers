<header class="z-10 bg-white py-4 shadow-md dark:bg-slate-800">
    <div class="container mx-auto flex h-full items-center justify-between px-6 text-sky-600 dark:text-sky-300">
        {{-- Hamburger Menu Button Start --}}
        <button class="header-hamburger-btn" @click="toggleSideMenu">
            <i class="fa-solid fa-bars text-xl"></i>
        </button>
        {{-- Hamburger Menu Button End --}}

        {{-- Search Input Start --}}
        <div class="flex flex-1 justify-center lg:mr-32">
            <div class="relative mr-6 w-full max-w-xl focus-within:text-sky-500">
                <input class="header-search-input" type="text" placeholder="Search for projects">
                <button class="header-search-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
        {{-- Search Input End --}}

        {{-- Right Header Start --}}
        <ul class="flex flex-shrink-0 items-center space-x-6">
            {{-- Theme Toggle For Dark & Light Mode Start --}}
            <div x-data="{ tooltip: false }">
                <button @click="toggleTheme" @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                    class="relative -mr-2 mt-0.5 rounded-md outline-none transition-all hover:text-sky-400">
                    {{-- Icon Start --}}
                    <section>
                        <template x-if="!dark">
                            <i class="fa-solid fa-moon"></i>
                        </template>
                        <template x-if="dark">
                            <i class="fa-solid fa-sun"></i>
                        </template>
                    </section>
                    {{-- Icon End --}}

                    {{-- Tooltip Start --}}
                    <section>
                        <template x-if="!dark">
                            <div x-show="tooltip" x-transition:enter="transition ease-out origin-top duration-200"
                                x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in origin-top duration-100" x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-50" class="header-tooltip">
                                Toggle Dark Mode
                            </div>
                        </template>
                        <template x-if="dark">
                            <div x-show="tooltip" x-transition:enter="transition ease-out origin-top duration-200"
                                x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in origin-top duration-100" x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-50" class="header-tooltip">
                                Toggle Light Mode
                            </div>
                        </template>
                    </section>
                    {{-- Tooltip End --}}
                </button>
            </div>
            {{-- Theme Toggle For Dark & Light Mode End --}}

            {{-- Notification Start --}}
            <li class="relative">
                {{-- Notification Button Start --}}
                <button class="header-notification-menu-button" @click="toggleNotificationsMenu">
                    <i class="fa-solid fa-bell h-5 w-5"></i>
                    @if (!(Auth::user()->profile_image && Auth::user()->address && Auth::user()->profile_caption))
                        <span class="header-notification-badge"></span>
                        <span class="animate-ping">
                            <span class="header-notification-badge-animate"></span>
                        </span>
                    @endif
                </button>
                {{-- Notification Button End --}}

                {{-- Notification Dropdown Menu Start --}}
                <div x-show="isNotificationsMenuOpen" @click.outside="closeNotificationsMenu" @keydown.escape="closeNotificationsMenu"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-50"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-50">
                    <ul class="header-ul">
                        <li class="flex">
                            @if (!(Auth::user()->profile_image && Auth::user()->address && Auth::user()->profile_caption))
                                <p class="text-center text-sm font-bold text-slate-800 dark:text-slate-200">
                                    You Must Complete the Profile Data.
                                </p>
                            @else
                                <p class="text-center text-sm font-bold text-slate-800 dark:text-slate-200">
                                    You don't have any notification.
                                </p>
                            @endif
                        </li>
                    </ul>
                </div>
                {{-- Notification Dropdown Menu End --}}
            </li>
            {{-- Notification End --}}

            {{-- Profile Start --}}
            <li class="relative">
                {{-- Profile Menu Button Start --}}
                <button class="header-profile-menu-button" @click="toggleProfileMenu">
                    <p class="mr-3 hidden md:block">{{ Auth::user()->name }}</p>
                    @if (Auth::user()->profile_image)
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('storage/' . Auth::user()->profile_image) }}" />
                    @else
                        <div class="relative h-8 w-8 rounded-full border-2 border-slate-500 bg-slate-200">
                            <i class="fa-solid fa-user absolute left-1/2 top-[45%] -translate-x-1/2 -translate-y-[45%]"></i>
                        </div>
                    @endif
                </button>
                {{-- Profile Menu Button End --}}

                {{-- Profile Dropdown Menu Start --}}
                <div x-show="isProfileMenuOpen" @click.outside="closeProfileMenu" @keydown.escape="closeProfileMenu"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-50"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-50">
                    <ul class="header-ul">
                        {{-- Main Home Start --}}
                        <li class="flex">
                            <a class="header-li-link" href="{{ route('home') }}">
                                <i class="fa-solid fa-house ml-2 mr-4 flex w-2 justify-center"></i>
                                <span>Main Home</span>
                            </a>
                        </li>
                        {{-- Main Home Start --}}

                        {{-- Profile Start --}}
                        <li class="flex">
                            <a class="header-li-link" href="{{ route('profile', ['user' => Auth::user()->username]) }}">
                                <i class="fa-solid fa-user ml-2 mr-4 flex w-2 justify-center"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                        {{-- Profile End --}}

                        {{-- Settings Start --}}
                        <li class="flex">
                            <a class="header-li-link" href="{{ route('settings') }}">
                                <i class="fa-solid fa-gears ml-2 mr-[15px] flex w-2 justify-center"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                        {{-- Settings End --}}

                        {{-- Sign Out Start --}}
                        <li class="flex">
                            <form action="{{ route('logout') }}" method="POST" id="form-logout" class="w-full">
                                @csrf
                                <button class="header-li-link" id="btn-logout" name="Danar">
                                    <i class="fa-solid fa-right-from-bracket ml-2 mr-4 flex w-2 justify-center"></i>
                                    Sign Out
                                </button>
                            </form>
                        </li>
                        {{-- Sign Out End --}}
                    </ul>
                </div>
                {{-- Profile Dropdown Menu End --}}
            </li>
            {{-- Profile End --}}
        </ul>
        {{-- Right Header End --}}
    </div>
</header>
