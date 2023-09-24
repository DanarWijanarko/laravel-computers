@extends('templates.layouts.main')

@section('container')
    <section class="bg-about-2 bg-[rgb(0,0,0,0.7)] bg-center pb-12 pt-20 bg-blend-multiply">
        <div class="mx-auto max-w-screen-lg">
            <h1 class="text-center text-3xl font-bold text-slate-100">{{ $laptop->name }}</h1>
            <div class="my-4">
                <div class="mb-1 flex justify-between">
                    <p class="text-sm text-slate-100">
                        Series:
                        <a href="/laptops?series={{ $laptop->series->slug }}"
                            class="text-base font-medium text-sky-500 transition-all hover:text-sky-700">
                            {{ $laptop->series->name }}
                        </a>, by.
                        <a href="/laptops?company={{ $laptop->company->slug }}"
                            class="text-base font-medium text-sky-500 transition-all hover:text-sky-700">
                            {{ $laptop->company->name }}
                        </a>
                    </p>
                    <p class="text-sm text-slate-100">
                        Last Updated {{ $laptop->updated_at->diffForHumans() }}
                    </p>
                </div>
                <img src="{{ asset('img/hanni.jpeg') }}" class="mx-auto h-[500px] w-full rounded-md border border-slate-100 object-cover">
            </div>
            <div class="mb-10 flex flex-col gap-5 text-slate-100">
                {!! $laptop->body !!}
            </div>
        </div>
    </section>
@endsection
