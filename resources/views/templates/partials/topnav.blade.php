<nav @scroll.window="window.pageYOffset ? $refs.fixed.classList.add('navbar-fixed') : $refs.fixed.classList.remove('navbar-fixed')" x-ref="fixed"
    class="{{ isset($navbar) ? $navbar : 'bg-transparent' }} absolute left-0 top-0 z-20 w-full">
    <div class="mx-5 flex max-w-screen-xl flex-wrap items-center justify-between p-4 md:mx-auto">
        {{-- Logo Brand Start --}}
        <a href="{{ route('home') }}" class="flex items-center">
            <span class="flex items-center gap-0.5 self-center text-2xl font-bold text-slate-100">
                <span class="text-3xl text-sky-600">N</span>CC
            </span>
        </a>
        {{-- Logo Brand End --}}

        {{-- Account & Hamburger Button Right Start --}}
        <div class="relative flex items-center md:order-2">
            {{-- Harus Sign In Jika Ingin masuk ke halaman laptops, articles, contact --}}
            @if (Auth::check())
                {{-- Button Account Start --}}
                <button @click="toggleProfileMenuMain" class="group mr-3 flex items-center gap-3 self-center">
                    <span class="nav-dropdown-username">
                        {{ Auth::user()->name }}
                    </span>
                    @if (Auth::user()->profile_image)
                        <img src="{{ asset('storage/' . Auth::user()->profile_image) }}"
                            class="h-8 w-8 rounded-full border-2 border-slate-300 transition-all group-hover:opacity-80">
                    @else
                        <div class="relative h-8 w-8 rounded-full border-2 border-slate-500 text-slate-50">
                            <i class="fa-solid fa-user absolute left-1/2 top-[45%] -translate-x-1/2 -translate-y-[45%]"></i>
                        </div>
                    @endif
                </button>
                {{-- Button Account End --}}

                {{-- Dropdown Account Start --}}
                <div x-show="isProfileMenuOpenMain" @click.outside="closeProfileMenuMain" @keydown.escape="closeProfileMenuMain"
                    x-transition:enter="transition ease-out duration-200 origin-top-right" x-transition:enter-start="opacity-0 scale-50"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 origin-top-right"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-50"
                    class="absolute right-12 top-14 z-10 w-44 divide-y divide-slate-300 rounded-lg bg-white font-normal shadow-lg md:right-3">
                    {{-- Dashboard Start --}}
                    <ul class="text-md py-2 text-slate-700">
                        <li>
                            <a href="{{ route('dashboard') }}" class="nav-dropdown-link">
                                <i class="fa-solid fa-gauge-high mr-2"></i>Dashboard
                            </a>
                        </li>
                    </ul>
                    {{-- Dashboard End --}}

                    {{-- Sign Out Form Start --}}
                    <form action="{{ route('logout') }}" method="POST" class="text-md py-2 text-slate-700" id="form-logout">
                        @csrf
                        <button class="nav-dropdown-link" id="btn-logout" name="Danar">
                            <i class="fa-solid fa-right-from-bracket mr-2"></i>Sign Out
                        </button>
                    </form>
                    {{-- Sign Out Form End --}}
                </div>
                {{-- Dropdown Account End --}}
            @else
                {{-- Not Logged In --}}
                <a href="{{ route('login') }}" class="mr-3 flex items-center self-center font-semibold text-sky-100 hover:text-sky-300 xl:mr-12">
                    <i class="fa-solid fa-right-to-bracket mr-2"></i>Sign In
                </a>
            @endif

            {{-- Button Hamburger Menu Start --}}
            <button @click="toggleNavbarMenu" :class="isNavbarMenuOpen && 'hamburger-active'" class="nav-collapse-button">
                <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                <span class="hamburger-line transition duration-300 ease-in-out"></span>
                <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
            </button>
            {{-- Button Hamburger Menu End --}}
        </div>
        {{-- Account & Hamburger Button Right End --}}

        {{-- Navbar Link Mobile Start --}}
        <div x-show="isNavbarMenuOpen" @click.outside="closeNavbarMenu" @keydown.escape="closeNavbarMenu"
            x-transition:enter="transition ease-out duration-200 origin-top-right" x-transition:enter-start="opacity-0 scale-50"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 origin-top-right"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-50"
            class="w-full items-center justify-between md:order-1 md:flex md:w-auto">
            <ul class="nav-link-ul">
                <li>
                    <a href="{{ route('home') }}" class="nav-link {{ Active::checkRoute('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="nav-link {{ Active::checkRoute('about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="nav-link {{ Active::checkRoute('contact') }}">Contact</a>
                </li>
                <li>
                    <a href="{{ route('laptops') }}" class="nav-link {{ Active::checkRoute('laptops') }}">Laptops</a>
                </li>
                <li>
                    <a href="{{ route('articles') }}" class="nav-link {{ Active::checkRoute(['articles', 'articleDetail']) }}">Articles</a>
                </li>
            </ul>
        </div>
        {{-- Navbar Link Mobile End --}}

        {{-- Navbar Link Desktop Start --}}
        <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto">
            <ul class="nav-link-ul">
                <li>
                    <a href="{{ route('home') }}" class="nav-link {{ Active::checkRoute('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="nav-link {{ Active::checkRoute('about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="nav-link {{ Active::checkRoute('contact') }}">Contact</a>
                </li>
                <li>
                    <a href="{{ route('laptops') }}" class="nav-link {{ Active::checkRoute('laptops') }}">Laptops</a>
                </li>
                <li>
                    <a href="{{ route('articles') }}" class="nav-link {{ Active::checkRoute(['articles', 'articleDetail']) }}">Articles</a>
                </li>
            </ul>
        </div>
        {{-- Navbar Link Desktop End --}}
    </div>
</nav>
