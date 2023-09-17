@extends('templates.layouts.admin')

@section('container')
    {{-- Title Start --}}
    <h2 class="admin-title">
        Dashboard
    </h2>
    {{-- Title End --}}

    {{-- URL Info Start --}}
    <h3 class="admin-url-info">
        <a href="{{ route(Route::currentRouteName()) }}" class="admin-url-info-link">
            {{ Str::ucfirst(Route::currentRouteName()) }}
        </a>
    </h3>
    {{-- URL Info End --}}

    {{-- Cards Start --}}
    <div class="mb-8 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        {{-- Total Articles Card Start --}}
        <div class="dashboard-card">
            <div class="dashboard-card-icon dashboard-card-icon-orange">
                <i class="fa-regular fa-newspaper"></i>
            </div>
            <div>
                <p class="mb-1 text-sm font-medium text-slate-400 dark:text-slate-300">
                    Total Articles
                </p>
                <p class="text-lg font-semibold text-slate-600 dark:text-slate-200">
                    6389
                </p>
            </div>
        </div>
        {{-- Total Articles Card End --}}

        {{-- Total Laptops Card Start --}}
        <div class="dashboard-card">
            <div class="dashboard-card-icon dashboard-card-icon-green">
                <i class="fa-solid fa-laptop"></i>
            </div>
            <div>
                <p class="mb-1 text-sm font-medium text-slate-400 dark:text-slate-300">
                    Total Laptops
                </p>
                <p class="text-lg font-semibold text-slate-700 dark:text-slate-200">
                    $ 44,740.89
                </p>
            </div>
        </div>
        {{-- Total Laptops Card End --}}

        {{-- Total Message Card Start --}}
        <div class="dashboard-card">
            <div class="dashboard-card-icon dashboard-card-icon-blue">
                <i class="fa-regular fa-envelope"></i>
            </div>
            <div>
                <p class="mb-1 text-sm font-medium text-slate-400 dark:text-slate-300">
                    Total Message
                </p>
                <p class="text-lg font-semibold text-slate-700 dark:text-slate-200">
                    376
                </p>
            </div>
        </div>
        {{-- Total Message Card End --}}
    </div>
    {{-- Cards End --}}

    {{-- Table for Articles Start --}}
    <div class="table-wrapper">
        <h1 class="table-wrapper-title">All Articles</h1>
        <div class="w-full overflow-x-auto">
            <table class="whitespace-no-wrap w-full">
                {{-- Table Header Start --}}
                <thead>
                    <tr class="table-head-tr">
                        <th class="w-5 p-3 text-center">No</th>
                        <th class="px-4 py-3">Articles</th>
                        <th class="px-4 py-3">Author</th>
                        <th class="px-4 py-3">Categories</th>
                        <th class="w-32 px-4 py-3 text-center">Created Date</th>
                    </tr>
                </thead>
                {{-- Table Header End --}}

                {{-- Table Body Start --}}
                <tbody class="table-body">
                    <tr class="table-body-tr">
                        {{-- No --}}
                        <td class="text-center text-lg font-light">1.</td>
                        {{-- Articles --}}
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <div class="relative mr-3 hidden h-8 w-8 rounded-full md:block">
                                    <img class="h-full w-full rounded-full object-cover" src="{{ asset('img/hanni.jpeg') }}">
                                </div>
                                <p class="font-semibold">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </td>
                        {{-- Author --}}
                        <td class="px-4 py-3 text-sm">Danar Wijanarko</td>
                        {{-- Categories --}}
                        <td class="px-4 py-3 text-sm">Programming</td>
                        {{-- Created Date --}}
                        <td class="px-4 py-3 text-center text-sm">6-10-2020</td>
                    </tr>
                    <tr class="table-body-tr">
                        <td class="text-center text-lg font-light">2.</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <div class="relative mr-3 hidden h-8 w-8 rounded-full md:block">
                                    <img class="h-full w-full rounded-full object-cover" src="{{ asset('img/hanni.jpeg') }}">
                                </div>
                                <div>
                                    <p class="font-semibold">Lorem ipsum dolor sit amet.</p>
                                    <p class="text-xs text-slate-600 dark:text-slate-400">
                                        Lorem, ipsum dolor.
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">Danar Wijanarko</td>
                        <td class="px-4 py-3 text-sm">Technologies</td>
                        <td class="px-4 py-3 text-center text-sm">30-5-2019</td>
                    </tr>
                </tbody>
                {{-- Table Body End --}}

                {{-- Table Footer Start --}}
                <tfoot class="border-t border-slate-200 dark:border-slate-700">
                    <td colspan="5" class="bg-slate-200 dark:bg-slate-700">
                        <div class="flex justify-between px-5 py-3 text-sm tracking-wide text-slate-500 dark:text-slate-300">
                            <p>Showing 23-30 of 100</p>
                            <p>
                                < 1 2 3 4 5>
                            </p>
                        </div>
                    </td>
                </tfoot>
                {{-- Table Footer End --}}
            </table>
        </div>
    </div>
    {{-- Table for Articles End --}}

    {{-- Table for Laptops Start --}}
    <div class="table-wrapper">
        <h1 class="table-wrapper-title">All Laptops</h1>
        <div class="w-full overflow-x-auto">
            <table class="whitespace-no-wrap w-full">
                {{-- Table Header Start --}}
                <thead>
                    <tr class="table-head-tr">
                        <th class="w-5 p-3 text-center">No</th>
                        <th class="px-4 py-3">Laptops</th>
                        <th class="px-4 py-3">Series</th>
                        <th class="px-4 py-3">Company</th>
                        <th class="w-32 px-4 py-3 text-center">Created Date</th>
                    </tr>
                </thead>
                {{-- Table Header End --}}

                {{-- Table Body Start --}}
                <tbody class="table-body">
                    <tr class="table-body-tr">
                        {{-- No --}}
                        <td class="text-center text-lg font-light">1.</td>
                        {{-- Laptops --}}
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <div class="relative mr-3 hidden h-8 w-8 rounded-full md:block">
                                    <img class="h-full w-full rounded-full object-cover" src="{{ asset('img/hanni.jpeg') }}">
                                </div>
                                <p class="font-semibold">Acer Nitro 5 515-58 Obsidian Black 2022</p>
                            </div>
                        </td>
                        {{-- Categories --}}
                        <td class="px-4 py-3 text-sm">Nitro 5</td>
                        {{-- Company --}}
                        <td class="px-4 py-3 text-sm">Acer Inc.</td>
                        {{-- Created Date --}}
                        <td class="px-4 py-3 text-center text-sm">13-5-2023</td>
                    </tr>
                    <tr class="table-body-tr">
                        {{-- No --}}
                        <td class="text-center text-lg font-light">2.</td>
                        {{-- Laptops --}}
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <div class="relative mr-3 hidden h-8 w-8 rounded-full md:block">
                                    <img class="h-full w-full rounded-full object-cover" src="{{ asset('img/hanni.jpeg') }}">
                                </div>
                                <p class="font-semibold">Asus ROG Strix G-513QE 2023</p>
                            </div>
                        </td>
                        {{-- Categories --}}
                        <td class="px-4 py-3 text-sm">Republic of Gamers</td>
                        {{-- Company --}}
                        <td class="px-4 py-3 text-sm">Asus</td>
                        {{-- Created Date --}}
                        <td class="px-4 py-3 text-center text-sm">25-10-2023</td>
                    </tr>
                </tbody>
                {{-- Table Body End --}}

                {{-- Table Footer Start --}}
                <tfoot class="border-t border-slate-200 dark:border-slate-700">
                    <td colspan="5" class="bg-slate-200 dark:bg-slate-700">
                        <div class="flex justify-between px-5 py-3 text-sm tracking-wide text-slate-500 dark:text-slate-300">
                            <p>Showing 1-10 of 50</p>
                            <p>
                                < 1 2 3 4 5>
                            </p>
                        </div>
                    </td>
                </tfoot>
                {{-- Table Footer End --}}
            </table>
        </div>
    </div>
    {{-- Table for Laptops End --}}

    {{-- Table for Messages Start --}}
    <div class="table-wrapper">
        <h1 class="table-wrapper-title">All Messages</h1>
        <div class="w-full overflow-x-auto">
            <table class="whitespace-no-wrap w-full">
                {{-- Table Header Start --}}
                <thead>
                    <tr class="table-head-tr">
                        <th class="w-5 p-3 text-center">No</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="max-w-md px-4 py-3">Messages</th>
                    </tr>
                </thead>
                {{-- Table Header End --}}

                {{-- Table Body Start --}}
                <tbody class="table-body">
                    <tr class="table-body-tr">
                        {{-- No --}}
                        <td class="text-center text-lg font-light">1.</td>
                        {{-- Name --}}
                        <td class="py-3text-sm px-4 font-semibold">Danar Wijanarko</td>
                        {{-- Email --}}
                        <td class="px-4 py-3 text-sm">danarwijanark98@gmail.com</td>
                        {{-- Messages --}}
                        <td class="max-w-md px-4 py-3 text-sm">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur modi in perferendis aspernatur
                            illum, asperiores animi, est corporis minima rem incidunt eaque officiis ab sint?
                        </td>
                    </tr>
                    <tr class="table-body-tr">
                        {{-- No --}}
                        <td class="text-center text-lg font-light">1.</td>
                        {{-- Name --}}
                        <td class="py-3text-sm px-4 font-semibold">Danar Wijanarko</td>
                        {{-- Email --}}
                        <td class="px-4 py-3 text-sm">danarwijanark98@gmail.com</td>
                        {{-- Messages --}}
                        <td class="max-w-md px-4 py-3 text-sm">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur modi in perferendis aspernatur
                            illum, asperiores animi, est corporis minima rem incidunt eaque officiis ab sint?
                        </td>
                    </tr>

                </tbody>
                {{-- Table Body End --}}

                {{-- Table Footer Start --}}
                <tfoot class="border-t border-slate-200 dark:border-slate-700">
                    <td colspan="5" class="bg-slate-200 dark:bg-slate-700">
                        <div class="flex justify-between px-5 py-3 text-sm tracking-wide text-slate-500 dark:text-slate-300">
                            <p>Showing 51-60 of 150</p>
                            <p>
                                < 1 2 3 4 5>
                            </p>
                        </div>
                    </td>
                </tfoot>
                {{-- Table Footer End --}}
            </table>
        </div>
    </div>
    {{-- Table for Messages End --}}
@endsection
