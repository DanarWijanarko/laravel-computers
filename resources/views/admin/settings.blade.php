@extends('templates.layouts.admin')

@section('container')
    {{-- Title Start --}}
    <h2 class="admin-title">
        Settings
    </h2>
    {{-- Title End --}}

    {{-- Navbar Settings Start --}}
    <ul class="relative mt-5 flex gap-16 text-center text-sm font-medium">
        <li class="relative">
            <a href="" class="text-sky-400 transition-colors hover:text-sky-600 dark:text-sky-300 dark:hover:text-sky-500">
                Users Lists
            </a>
            <span class="absolute -bottom-3 left-0 h-2 w-full rounded-t-lg bg-sky-600 dark:bg-sky-500"></span>
        </li>
        <li class="relative">
            <a href="" class="text-slate-400 transition-colors hover:text-slate-700 dark:text-slate-200 dark:hover:text-slate-400">
                Notification
            </a>
        </li>
        <li class="relative">
            <a href="" class="text-slate-400 transition-colors hover:text-slate-700 dark:text-slate-200 dark:hover:text-slate-400">
                Privacy
            </a>
        </li>
        <li class="relative">
            <a href="" class="text-slate-400 transition-colors hover:text-slate-700 dark:text-slate-200 dark:hover:text-slate-400">
                Blacklist
            </a>
        </li>
        <span class="absolute -bottom-3 left-0 h-0.5 w-full rounded-r-full bg-slate-200 dark:bg-slate-700"></span>
    </ul>
    {{-- Navbar Settings End --}}

    {{-- Table for Edit Articles Start --}}
    <div class="w-full overflow-x-auto">
        <table class="whitespace-no-wrap mt-7 w-full">
            {{-- Table Header Start --}}
            <thead>
                <tr class="table-head-tr bg-slate-200">
                    <th class="w-5 p-3 text-center">No</th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Username</th>
                    <th class="px-4 py-3">Address</th>
                    <th class="w-32 px-4 py-3 text-center">Created Date</th>
                    <th class="w-28 px-4 py-3 text-center">Action</th>
                </tr>
            </thead>
            {{-- Table Header End --}}

            {{-- Table Body Start --}}
            <tbody class="table-body">
                @foreach ($users as $user)
                    <tr class="table-body-tr">
                        {{-- No --}}
                        <td class="text-center text-lg font-light">{{ $loop->iteration }}.</td>
                        {{-- Name --}}
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <div class="relative mr-3 hidden h-8 w-8 rounded-full md:block">
                                    @if ($user->profile_image)
                                        <img class="h-full w-full rounded-full object-cover" src="{{ asset('storage/' . $user->profile_image) }}">
                                    @else
                                        <img class="h-full w-full rounded-full object-cover" src="{{ asset('img/hanni.jpeg') }}">
                                    @endif
                                </div>
                                <div>
                                    <p class="font-semibold">{{ $user->name }}</p>
                                    <p class="text-xs font-normal">{{ $user->email }}</p>
                                </div>
                            </div>
                        </td>
                        {{-- Usernmae --}}
                        <td class="px-4 py-3 text-sm">{{ $user->username }}</td>
                        {{-- Address --}}
                        <td class="px-4 py-3 text-sm">
                            @if ($user->address)
                                {{ $user->address }}
                            @else
                                You haven't filled in the Address yet.
                            @endif
                        </td>
                        {{-- Created Date --}}
                        <td class="px-4 py-3 text-center text-sm">{{ $user->created_at }}</td>
                        {{-- Action --}}
                        <td class="px-4 py-3 text-sm">
                            <div class="flex items-center justify-center gap-1">
                                {{-- Update --}}
                                <a href="" class="btn-action action-yellow">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                {{-- Delete --}}
                                <form action="" method="POST" class="form-delete-user">
                                    @csrf
                                    <button class="btn-action action-red btn-delete-user" user-name="{{ $user->name }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            {{-- Table Body End --}}

            {{-- Table Footer Start --}}
            <tfoot class="border-t border-slate-200 dark:border-slate-700">
                <td colspan="6" class="bg-slate-200 dark:bg-slate-700">
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
@endsection
