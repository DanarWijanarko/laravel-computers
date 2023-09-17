@extends('templates.layouts.main')

@section('container')
    <h1 class="mt-24 text-center text-3xl font-bold">All Articles</h1>

    {{-- Search Start --}}
    <div class="container">
        <div class="relative mx-auto flex max-w-screen-xl justify-end">
            <input class="header-search-input w-80 bg-transparent" type="text" placeholder="Search for Articles">
            <button class="header-search-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </div>
    {{-- Search End --}}

    {{-- Latest Article Start --}}
    <div class="container mt-6 pb-8">
        <div class="mx-auto max-w-screen-xl overflow-hidden rounded-lg border-2 shadow-lg">
            <div class="flex max-h-80 items-center justify-center overflow-hidden">
                <img src="img/contact.jpeg">
            </div>
            <div class="grid justify-items-center p-5">
                <h1 class="text-center text-2xl font-bold text-slate-700">{{ $articles[0]->title }}</h1>
                <p class="mb-3 text-center text-sm font-light text-slate-400">By.
                    <a href="" class="font-medium text-sky-500 transition-all hover:text-sky-600">
                        {{ $articles[0]->author->name }}
                    </a>, in
                    <a href="" class="font-medium text-sky-500 transition-all hover:text-sky-600">
                        Programming
                    </a>
                </p>
                <h3 class="mb-3 text-center text-base font-medium text-slate-500">
                    {{ $articles[0]->excerpt }}
                </h3>
                <p class="mb-3 text-center text-sm font-extralight text-slate-400">Last updated {{ $articles[0]->created_at->diffForHumans() }}</p>
                <a href="" class="btn-primary">
                    Read More<i class="fa-solid fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>
    {{-- Latest Article End --}}

    {{-- All Articles Start --}}
    <div class="container mb-5 px-6 sm:flex sm:flex-wrap sm:justify-center sm:gap-4">
        @foreach ($articles->skip(1) as $article)
            <div class="mb-10 overflow-hidden rounded-lg border-2 shadow-lg sm:mb-0 sm:w-64 md:w-80 lg:w-72 xl:w-[26rem]">
                <div class="flex max-h-60 items-center justify-center overflow-hidden">
                    <img class="w-full" src="http://source.unsplash.com/1000x700?girls">
                </div>
                <div class="relative p-5">
                    <h5 class="text-2xl font-bold tracking-tight text-slate-700">
                        {{ $article->title }}
                    </h5>
                    <p class="mb-4 text-sm font-light text-slate-400">
                        By.
                        <a href="" class="font-medium text-sky-500 transition-all hover:text-sky-600">
                            {{ $article->author->name }}
                        </a>
                    </p>
                    <h3 class="mb-4 text-base font-medium text-slate-500">
                        {{ $article->excerpt }}
                    </h3>
                    <p class="mb-7 text-sm font-extralight text-slate-400">Last Updated {{ $article->created_at->diffForHumans() }}</p>
                    <a href="#" class="absolute bottom-3 font-medium text-sky-500 transition-all hover:translate-x-3 hover:text-sky-300">
                        Read more<i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    {{-- All Articles End --}}

    {{-- Pagination Start --}}
    <div class="mx-auto mb-5 max-w-screen-xl">
        {{ $articles->withQueryString()->links('components.pagination') }}
    </div>
    {{-- Pagination End --}}
@endsection
