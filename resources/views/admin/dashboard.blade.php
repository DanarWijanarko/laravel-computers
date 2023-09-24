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
                    {{ $articles->total() }}
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
                    {{ $laptops->total() }}
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
                    {{ $messages->total() }}
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
                    @foreach ($articles as $article)
                        <tr class="table-body-tr">
                            {{-- No --}}
                            <td class="text-center text-lg font-light">{{ $loop->iteration }}</td>
                            {{-- Articles --}}
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative mr-3 hidden h-8 w-8 rounded-full md:block">
                                        <img class="h-full w-full rounded-full object-cover" src="{{ asset('img/hanni.jpeg') }}">
                                    </div>
                                    <p class="font-semibold">{{ $article->title }}</p>
                                </div>
                            </td>
                            {{-- Author --}}
                            <td class="px-4 py-3 text-sm">{{ $article->author->name }}</td>
                            {{-- Categories --}}
                            <td class="px-4 py-3 text-sm">Programming</td>
                            {{-- Created Date --}}
                            <td class="px-4 py-3 text-center text-sm">{{ $article->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
                {{-- Table Body End --}}

                {{-- Table Footer Start --}}
                <tfoot class="border-t border-slate-200 dark:border-slate-700">
                    <td colspan="5" class="bg-slate-200 px-5 dark:bg-slate-700">
                        {{ $articles->links('components.pagination') }}
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
                    @foreach ($laptops as $laptop)
                        <tr class="table-body-tr">
                            {{-- No --}}
                            <td class="text-center text-lg font-light">{{ $loop->iteration }}</td>
                            {{-- Laptops --}}
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative mr-3 hidden h-8 w-8 rounded-full md:block">
                                        <img class="h-full w-full rounded-full object-cover" src="{{ asset('img/hanni.jpeg') }}">
                                    </div>
                                    <p class="font-semibold">{{ $laptop->name }}</p>
                                </div>
                            </td>
                            {{-- Series --}}
                            <td class="px-4 py-3 text-sm">{{ $laptop->series->name }}</td>
                            {{-- Company --}}
                            <td class="px-4 py-3 text-sm">{{ $laptop->company->name }}</td>
                            {{-- Created Date --}}
                            <td class="px-4 py-3 text-center text-sm">{{ $laptop->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
                {{-- Table Body End --}}

                {{-- Table Footer Start --}}
                <tfoot class="border-t border-slate-200 dark:border-slate-700">
                    <td colspan="5" class="bg-slate-200 px-5 dark:bg-slate-700">
                        {{ $laptops->links('components.pagination') }}
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
                        <th class="w-32 px-4 py-3 text-center">Created Date</th>
                    </tr>
                </thead>
                {{-- Table Header End --}}

                {{-- Table Body Start --}}
                <tbody class="table-body">
                    @foreach ($messages as $message)
                        <tr class="table-body-tr">
                            {{-- No --}}
                            <td class="text-center text-lg font-light">{{ $loop->iteration }}</td>
                            {{-- Name --}}
                            <td class="py-3text-sm px-4 font-semibold">{{ $message->name }}</td>
                            {{-- Email --}}
                            <td class="px-4 py-3 text-sm">{{ $message->email }}</td>
                            {{-- Messages --}}
                            <td class="max-w-md px-4 py-3 text-sm">{{ $message->message }}</td>
                            {{-- Created Date --}}
                            <td class="max-w-md px-4 py-3 text-center text-sm">{{ $message->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
                {{-- Table Body End --}}

                {{-- Table Footer Start --}}
                <tfoot class="border-t border-slate-200 dark:border-slate-700">
                    <td colspan="5" class="bg-slate-200 px-5 dark:bg-slate-700">
                        {{ $messages->links('components.pagination') }}
                    </td>
                </tfoot>
                {{-- Table Footer End --}}
            </table>
        </div>
    </div>
    {{-- Table for Messages End --}}
@endsection
