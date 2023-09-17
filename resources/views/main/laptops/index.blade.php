@extends('templates.layouts.main')

@section('container')
    <section class="bg-about-2 bg-[rgb(0,0,0,0.5)] bg-center bg-no-repeat pb-12 pt-20 bg-blend-multiply">
        {{-- Search Start --}}
        <div class="container mb-5">
            <div class="relative mx-auto flex max-w-screen-xl justify-end">
                <input class="header-search-input w-80" type="text" placeholder="Search for Laptops">
                <button class="header-search-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
        {{-- Search End --}}

        {{-- Flex Control --}}
        <div class="mx-auto flex max-w-screen-xl flex-wrap justify-center gap-8">
            {{-- Horizontal Card --}}
            <div
                class="mx-8 flex flex-col items-center overflow-hidden rounded-xl border-2 border-slate-700 bg-slate-500 md:mx-0 md:max-w-[39rem] md:flex-row">
                {{-- Card Image --}}
                <img class="h-96 w-full object-cover md:h-full md:w-48" src="http://source.unsplash.com/640x480?laptops">
                {{-- Card Body --}}
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-3 text-2xl font-bold text-slate-200">
                        Acer Nitro 5 AN-515-58 Obsidian Black 2023
                    </h5>
                    <p class="mb-3 font-normal text-slate-300">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological
                        order.
                    </p>
                    <a href=""
                        class="flex items-center font-light text-slate-200 transition-all hover:translate-x-2 hover:text-slate-300">
                        Read More<i class="fa-solid fa-chevron-right ml-0.5"></i>
                    </a>
                </div>
            </div>
            {{-- Horizontal Card --}}
            <div class="mx-8 flex flex-col items-center rounded-lg border-2 border-slate-200 bg-slate-100 md:mx-0 md:max-w-[39rem] md:flex-row">
                {{-- Card Image --}}
                <img class="h-96 w-full object-cover md:h-full md:w-48" src="http://source.unsplash.com/640x480?laptop">
                {{-- Card Body --}}
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-3 text-2xl font-bold text-slate-800">
                        Acer Nitro 5 AN-515-58 Obsidian Black 2023
                    </h5>
                    <p class="mb-3 font-normal text-slate-500">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological
                        order.
                    </p>
                    <a href=""
                        class="flex items-center font-light text-slate-400 transition-all hover:translate-x-2 hover:text-slate-300">
                        Read More<i class="fa-solid fa-chevron-right ml-0.5"></i>
                    </a>
                </div>
            </div>
            {{-- Horizontal Card --}}
            <div class="mx-8 flex flex-col items-center rounded-lg border-2 border-slate-200 bg-slate-100 md:mx-0 md:max-w-[39rem] md:flex-row">
                {{-- Card Image --}}
                <img class="h-96 w-full object-cover md:h-full md:w-48" src="http://source.unsplash.com/640x480?laptops">
                {{-- Card Body --}}
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-3 text-2xl font-bold text-slate-800">
                        Acer Nitro 5 AN-515-58 Obsidian Black 2023
                    </h5>
                    <p class="mb-3 font-normal text-slate-500">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological
                        order.
                    </p>
                    <a href=""
                        class="flex items-center font-light text-slate-400 transition-all hover:translate-x-2 hover:text-slate-300">
                        Read More<i class="fa-solid fa-chevron-right ml-0.5"></i>
                    </a>
                </div>
            </div>
            {{-- Horizontal Card --}}
            <div class="mx-8 flex flex-col items-center rounded-lg border-2 border-slate-200 bg-slate-100 md:mx-0 md:max-w-[39rem] md:flex-row">
                {{-- Card Image --}}
                <img class="h-96 w-full object-cover md:h-full md:w-48" src="http://source.unsplash.com/640x480?laptop">
                {{-- Card Body --}}
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-3 text-2xl font-bold text-slate-800">
                        Acer Nitro 5 AN-515-58 Obsidian Black 2023
                    </h5>
                    <p class="mb-3 font-normal text-slate-500">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological
                        order.
                    </p>
                    <a href=""
                        class="flex items-center font-light text-slate-400 transition-all hover:translate-x-2 hover:text-slate-300">
                        Read More<i class="fa-solid fa-chevron-right ml-0.5"></i>
                    </a>
                </div>
            </div>
            {{-- Horizontal Card --}}
            <div class="mx-8 flex flex-col items-center rounded-lg border-2 border-slate-200 bg-slate-100 md:mx-0 md:max-w-[39rem] md:flex-row">
                {{-- Card Image --}}
                <img class="h-96 w-full object-cover md:h-full md:w-48" src="http://source.unsplash.com/640x480?laptop">
                {{-- Card Body --}}
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-3 text-2xl font-bold text-slate-800">
                        Acer Nitro 5 AN-515-58 Obsidian Black 2023
                    </h5>
                    <p class="mb-3 font-normal text-slate-500">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological
                        order.
                    </p>
                    <a href=""
                        class="flex items-center font-light text-slate-400 transition-all hover:translate-x-2 hover:text-slate-300">
                        Read More<i class="fa-solid fa-chevron-right ml-0.5"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
