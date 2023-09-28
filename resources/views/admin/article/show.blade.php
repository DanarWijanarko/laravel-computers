@extends('templates.layouts.admin')

@section('container')
    <div class="mx-auto max-w-screen-lg mt-5">
        <h1 class="text-center text-3xl font-bold text-slate-800 dark:text-slate-200">{{ $article->title }}</h1>
        <div class="my-4">
            <div class="mb-1 flex justify-between">
                <p class="text-sm text-slate-600 dark:text-slate-300">
                    Author:
                    <a href="/dashboard/article?author={{ $article->author->username }}"
                        class="text-base font-medium text-sky-500 transition-all hover:text-sky-700">
                        {{ $article->author->name }}
                    </a>, in
                    <a href="/dashboard/article?category={{ $article->category->slug }}"
                        class="text-base font-medium text-sky-500 transition-all hover:text-sky-700">
                        {{ $article->category->name }}
                    </a>
                </p>
                <p class="text-sm text-slate-600 dark:text-slate-300">
                    Last Updated {{ $article->created_at->diffForHumans() }}
                </p>
            </div>
            <img src="{{ asset('img/hanni.jpeg') }}" class="mx-auto h-[500px] w-full rounded-md border border-slate-700 object-cover">
        </div>
        <div class="mb-10 flex flex-col gap-5 text-slate-700 dark:text-slate-300">
            {!! $article->body !!}
        </div>
    </div>
@endsection
