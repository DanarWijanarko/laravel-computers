@extends('templates.layouts.admin')

@section('container')
    {{-- Title Start --}}
    <h2 class="admin-title">
        Edit Articles
    </h2>
    {{-- Title End --}}

    {{-- URL Info Start --}}
    <h3 class="admin-url-info">
        <a href="{{ route('dashboard') }}" class="admin-url-info-link">
            Dashboard
        </a>
        <span class="admin-url-info-slash">/</span>
        <a href="{{ route(Route::currentRouteName()) }}" class="admin-url-info-link">
            Edit Article
        </a>
    </h3>
    {{-- URL Info End --}}

    {{-- Table for Edit Articles Start --}}
    <div class="table-wrapper">
        <div class="flex justify-between">
            <h1 class="table-wrapper-title">Edit Articles</h1>
            <h1 class="table-wrapper-title">{{ $header }}</h1>
        </div>
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
                        <th class="w-28 px-4 py-3 text-center">Action</th>
                    </tr>
                </thead>
                {{-- Table Header End --}}

                {{-- Table Body Start --}}
                <tbody class="table-body">
                    @if ($articles->count())
                        @foreach ($articles as $article)
                            <tr class="table-body-tr">
                                {{-- No --}}
                                <td class="text-center text-lg font-light">{{ $loop->iteration + $articles->firstItem() - 1 }}.</td>
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
                                <td class="px-4 py-3 text-sm">{{ $article->category->name }}</td>
                                {{-- Created Date --}}
                                <td class="px-4 py-3 text-center text-sm">{{ $article->created_at }}</td>
                                {{-- Action --}}
                                <td class="px-4 py-3 text-sm">
                                    <div class="flex items-center justify-center gap-1">
                                        {{-- Detail --}}
                                        <a href="{{ route('article.show', ['article' => $article->slug]) }}" class="btn-action action-green">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        {{-- Update --}}
                                        <a href="{{ route('article.edit', ['article' => $article->slug]) }}" class="btn-action action-yellow">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                        {{-- Delete --}}
                                        <form action="{{ route('article.destroy', ['article' => $article->slug]) }}" method="POST"
                                            class="form-delete-article">
                                            @csrf
                                            @method('delete')
                                            <button class="btn-action action-red btn-delete-article" article-name="{{ $article->title }}">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="table-body-tr">
                            <td colspan="6" class="px-4 py-3 text-center text-sm font-bold">
                                Your Account Don't Have any Article.
                            </td>
                        </tr>
                    @endif
                </tbody>
                {{-- Table Body End --}}

                {{-- Table Footer Start --}}
                <tfoot class="border-t border-slate-200 dark:border-slate-700">
                    <td colspan="6" class="bg-slate-200 px-5 dark:bg-slate-700">
                        @if ($articles->count())
                            {{ $articles->links('components.pagination') }}
                        @else
                            <div class="h-5"></div>
                        @endif
                    </td>
                </tfoot>
                {{-- Table Footer End --}}
            </table>
        </div>
    </div>
    {{-- Table for Edit Articles End --}}
@endsection
