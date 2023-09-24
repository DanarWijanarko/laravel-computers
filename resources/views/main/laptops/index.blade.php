@extends('templates.layouts.main')

@section('container')
    <section class="bg-about-2 bg-[rgb(0,0,0,0.5)] bg-center bg-no-repeat pb-12 pt-20 bg-blend-multiply">
        <h1 class="text-center text-3xl font-bold text-white">{{ $header }}</h1>
        {{-- Search Start --}}
        <div class="container mb-5">
            <div class="relative mx-auto flex max-w-screen-xl justify-end">
                <form action="{{ route('laptops') }}" method="get">
                    <input class="header-search-input w-80" type="text" placeholder="Search for Laptops" name="search" value="{{ request('search') }}">
                    <button class="header-search-btn" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>
        {{-- Search End --}}

        @if ($laptops->count())
            {{-- Laptops Cards Start --}}
            <div class="mx-auto flex max-w-screen-xl flex-wrap justify-center gap-8">
                {{-- Horizontal Card --}}
                @foreach ($laptops as $laptop)
                    <div
                        class="mx-8 flex flex-col items-center overflow-hidden rounded-xl border-2 border-slate-700 bg-slate-500 md:mx-0 md:max-w-[39rem] md:flex-row">
                        {{-- Card Image --}}
                        <img class="h-96 w-full object-cover md:h-full md:w-48" src="http://source.unsplash.com/640x480?laptops">
                        {{-- Card Body --}}
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-1 text-2xl font-bold text-slate-200">
                                {{ $laptop->name }}
                            </h5>
                            <p class="mb-3 text-sm font-light text-slate-100">
                                <a href="/laptops?series={{ $laptop->series->slug }}" class="text-base text-sky-300 transition-all hover:text-sky-500">
                                    {{ $laptop->series->name }}
                                </a>, by.
                                <a href="/laptops?company={{ $laptop->company->slug }}" class="text-base text-sky-300 transition-all hover:text-sky-500">
                                    {{ $laptop->company->name }}
                                </a>
                            </p>
                            <p class="mb-3 font-normal text-slate-300">
                                {{ $laptop->excerpt }}
                            </p>
                            <a href="{{ route('laptopDetail', ['laptop' => $laptop->slug]) }}"
                                class="flex items-center font-light text-slate-200 transition-all hover:translate-x-2 hover:text-slate-300">
                                Detail<i class="fa-solid fa-chevron-right ml-0.5"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- Laptops Cards End --}}

            {{-- Pagination Start --}}
            <div class="mx-auto mt-5 max-w-screen-xl text-white">
                {{ $laptops->withQueryString()->links('components.pagination-text-white') }}
            </div>
            {{-- Pagination End --}}
        @else
            <div class="flex h-[394px] items-center justify-center text-5xl font-bold text-white">
                No Laptops Found.
            </div>
        @endif
    </section>
@endsection
