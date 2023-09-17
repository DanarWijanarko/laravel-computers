@extends('templates.layouts.admin')

@section('container')
    {{-- Title Start --}}
    <h2 class="admin-title">
        Edit Laptops
    </h2>
    {{-- Title End --}}

    {{-- URL Info Start --}}
    <h3 class="admin-url-info">
        <a href="{{ route('dashboard') }}" class="admin-url-info-link">
            Dashboard
        </a>
        <span class="admin-url-info-slash">/</span>
        <a href="{{ route(Route::currentRouteName()) }}" class="admin-url-info-link">
            Edit Laptop
        </a>
    </h3>
    {{-- URL Info End --}}

    {{-- Table for Edit Articles Start --}}
    <div class="table-wrapper">
        <h1 class="table-wrapper-title">Edit Laptops</h1>
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
                        <th class="w-28 px-4 py-3 text-center">Action</th>
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
                                <p class="font-semibold">Acer Nitro 5 515-58 Obsidian Black 2022</p>
                            </div>
                        </td>
                        {{-- Author --}}
                        <td class="px-4 py-3 text-sm">Nitro 5</td>
                        {{-- Categories --}}
                        <td class="px-4 py-3 text-sm">Acer Inc.</td>
                        {{-- Created Date --}}
                        <td class="px-4 py-3 text-center text-sm">6-10-2020</td>
                        {{-- Action --}}
                        <td class="px-4 py-3 text-sm">
                            <div class="flex items-center justify-center gap-1">
                                {{-- Detail --}}
                                <a href="" class="btn-action action-green">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                {{-- Update --}}
                                <a href="" class="btn-action action-yellow">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                {{-- Delete --}}
                                <form action="" method="POST" id="form-delete-laptop">
                                    @csrf
                                    <button class="btn-action action-red" id="btn-delete-laptop" laptop-name="danar">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-body-tr">
                        <td class="text-center text-lg font-light">2.</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <div class="relative mr-3 hidden h-8 w-8 rounded-full md:block">
                                    <img class="h-full w-full rounded-full object-cover" src="{{ asset('img/hanni.jpeg') }}">
                                </div>
                                <div>
                                    <p class="font-semibold">Asus ROG Strix G-513QE 2023</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">Republic of Gamers</td>
                        <td class="px-4 py-3 text-sm">Asus</td>
                        <td class="px-4 py-3 text-center text-sm">30-5-2019</td>
                        <td class="px-4 py-3 text-sm">
                            <div class="flex items-center justify-center gap-1">
                                {{-- Detail --}}
                                <a href="" class="btn-action action-green">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                {{-- Update --}}
                                <a href="" class="btn-action action-yellow">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                {{-- Delete --}}
                                <a href="" class="btn-action action-red">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
                {{-- Table Body End --}}

                {{-- Table Footer Start --}}
                <tfoot class="border-t border-slate-200 dark:border-slate-700">
                    <td colspan="5" class="bg-slate-200 dark:bg-slate-700">
                        <div class="flex justify-between px-5 py-3 text-sm tracking-wide text-slate-500 dark:text-slate-300">
                            <p>Showing 23-30 of 100</p>
                            <p>
                                < 1 2 3 4 5 >
                            </p>
                        </div>
                    </td>
                </tfoot>
                {{-- Table Footer End --}}
            </table>
        </div>
    </div>
    {{-- Table for Edit Articles End --}}
@endsection
