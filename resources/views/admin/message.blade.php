@extends('templates.layouts.admin')

@section('container')
    {{-- Title Start --}}
    <h2 class="admin-title">
        Edit Messages
    </h2>
    {{-- Title End --}}

    {{-- URL Info Start --}}
    <h3 class="admin-url-info">
        <a href="{{ route('dashboard') }}" class="admin-url-info-link">
            Dashboard
        </a>
        <span class="admin-url-info-slash">/</span>
        <a href="{{ route(Route::currentRouteName()) }}" class="admin-url-info-link">
            Edit Messages
        </a>
    </h3>
    {{-- URL Info End --}}

    {{-- Table for Edit Articles Start --}}
    <div class="table-wrapper">
        <h1 class="table-wrapper-title">Edit Messages</h1>
        <div class="w-full overflow-x-auto">
            <table class="whitespace-no-wrap w-full">
                {{-- Table Header Start --}}
                <thead>
                    <tr class="table-head-tr">
                        <th class="w-5 p-3 text-center">No</th>
                        <th class="px-4 py-3 w-60">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Message</th>
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
                                <p class="font-semibold">Danar Wijanarko</p>
                            </div>
                        </td>
                        {{-- Author --}}
                        <td class="px-4 py-3 text-sm">danarwijanarko98@gmail.com</td>
                        {{-- Categories --}}
                        <td class="px-4 py-3 text-sm">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae optio amet maiores laboriosam,
                            itaque quae earum quod minus sunt porro odio, facilis omnis? Quod, eum.
                        </td>
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
                                <form action="" method="POST" id="form-delete-message">
                                    @csrf
                                    <button class="btn-action action-red" id="btn-delete-message" message-name="danar">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
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
                                < 1 2 3 4 5>
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
