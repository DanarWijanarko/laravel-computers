@extends('templates.layouts.admin')

@section('container')
    {{-- Title Start --}}
    <h2 class="admin-title">
        Delete Messages
    </h2>
    {{-- Title End --}}

    {{-- URL Info Start --}}
    <h3 class="admin-url-info">
        <a href="{{ route('dashboard') }}" class="admin-url-info-link">
            Dashboard
        </a>
        <span class="admin-url-info-slash">/</span>
        <a href="{{ route(Route::currentRouteName()) }}" class="admin-url-info-link">
            Delete Messages
        </a>
    </h3>
    {{-- URL Info End --}}

    {{-- Alert Start --}}
    @if (session('messageDeleted'))
        <x-alert type="success" message="{!! session('messageDeleted') !!}" />
    @endif
    {{-- Alert End --}}

    {{-- Table for Delete Articles Start --}}
    <div class="table-wrapper">
        <h1 class="table-wrapper-title">Delete Messages</h1>
        <div class="w-full overflow-x-auto">
            <table class="whitespace-no-wrap w-full">
                {{-- Table Header Start --}}
                <thead>
                    <tr class="table-head-tr">
                        <th class="w-5 p-3 text-center">No</th>
                        <th class="w-60 px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Message</th>
                        <th class="w-28 px-4 py-3 text-center">Action</th>
                    </tr>
                </thead>
                {{-- Table Header End --}}

                {{-- Table Body Start --}}
                <tbody class="table-body">
                    @if ($messages->count())
                        @foreach ($messages as $message)
                            <tr class="table-body-tr">
                                {{-- No --}}
                                <td class="text-center text-lg font-light">{{ $loop->iteration + $messages->firstItem() - 1 }}.</td>
                                {{-- Articles --}}
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative mr-3 hidden h-8 w-8 rounded-full md:block">
                                            <img class="h-full w-full rounded-full object-cover" src="{{ asset('img/hanni.jpeg') }}">
                                        </div>
                                        <p class="font-semibold">{{ $message->name }}</p>
                                    </div>
                                </td>
                                {{-- Author --}}
                                <td class="px-4 py-3 text-sm">{{ $message->email }}</td>
                                {{-- Message --}}
                                <td class="px-4 py-3 text-sm">
                                    {{ $message->message }}
                                </td>
                                {{-- Action --}}
                                <td class="px-4 py-3 text-sm">
                                    <div class="flex items-center justify-center gap-1">
                                        {{-- Delete --}}
                                        <form action="{{ route('delete', ['name' => $message->name]) }}" method="POST" class="form-delete-message">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-action action-red btn-delete-message" message-name="{{ $message->name }}">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="table-body-tr">
                            <td colspan="5" class="px-4 py-3 text-center text-sm font-bold text-slate-900">
                                Table Empty.
                            </td>
                        </tr>
                    @endif
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
    {{-- Table for Delete Articles End --}}
@endsection
