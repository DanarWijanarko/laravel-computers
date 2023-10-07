<footer class="bg-slate-700">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        {{-- Top Footer Start --}}
        <div class="md:flex md:justify-between">
            {{-- Logo & Text Start --}}
            <div class="mb-6 text-center md:mb-0 md:text-start">
                <a href="/" class="flex flex-col items-center justify-center md:items-start md:justify-start">
                    <span class="flex items-center gap-0.5 self-center text-2xl font-bold text-slate-100 md:self-start">
                        <span class="text-3xl text-sky-600">N</span>CC
                    </span>
                    <span class="text-2xl font-semibold text-slate-100">
                        <span class="text-sky-600">Nar</span> Computer <span class="md:block">Center</span>
                    </span>
                </a>
                <p class="mt-4 text-sm font-extralight text-slate-50 md:max-w-sm">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta vitae qui nisi doloribus
                    repellat illum quibusdam nihil incidunt, voluptatum obcaecati natus deserunt quia officia quo!
                </p>
            </div>
            {{-- Logo & Text End --}}
            {{-- Links Start --}}
            <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 sm:gap-6">
                {{-- Pages Start --}}
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-sky-500">Pages</h2>
                    <ul class="font-medium text-slate-300">
                        <li class="mb-4">
                            <a href="{{ route('home') }}" class="after-footer-hover">Home</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('about') }}" class="after-footer-hover">About</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('laptops') }}" class="after-footer-hover">Laptops</a>
                        </li>
                        <li>
                            <a href="{{ route('articles') }}" class="after-footer-hover">Articles</a>
                        </li>
                    </ul>
                </div>
                {{-- Pages End --}}
                {{-- Find Us Start --}}
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-sky-500">Find us</h2>
                    <ul class="font-medium text-slate-300">
                        <li class="mb-4">
                            <a href="https://github.com/DanarWijanarko" target="_blank" class="after-footer-hover">Github</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://discordapp.com" target="_blank" class="after-footer-hover">Discord</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="after-footer-hover">Contact</a>
                        </li>
                    </ul>
                </div>
                {{-- Find Us End --}}
                {{-- Legal Start --}}
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-sky-500">Legal</h2>
                    <ul class="font-medium text-slate-300">
                        <li class="mb-4">
                            <a href="#" class="after-footer-hover">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="after-footer-hover">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
                {{-- Legal End --}}
            </div>
            {{-- Links End --}}
        </div>
        {{-- Top Footer End --}}
        <hr class="my-6 border-slate-100 sm:mx-auto lg:my-8" />
        {{-- Bottom Footer Start --}}
        <div class="sm:-mt-1 sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-slate-300 sm:text-center">© 2023
                <a href="/" class="transition-all hover:text-sky-400">Ncc™</a>. All Rights Reserved.
            </span>
            <div class="mt-4 flex space-x-5 sm:mt-0 sm:justify-center">
                <a href="#" class="text-slate-300 transition-all hover:text-sky-500">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="text-slate-300 transition-all hover:text-sky-500">
                    <i class="fa-brands fa-discord"></i>
                </a>
                <a href="#" class="text-slate-300 transition-all hover:text-sky-500">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="https://github.com/DanarWijanarko" class="text-slate-300 transition-all hover:text-sky-500">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="#" class="text-slate-300 transition-all hover:text-sky-500">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
        {{-- Bottom Footer End --}}
    </div>
</footer>
