@extends('templates.layouts.admin')

@section('container')
    <section class="profile-container xl:pl-4">
        <div class="profile-picture-container">
            @if ($user->image)
                <img src="{{ asset('img/hanni.jpeg') }}" class="h-full max-w-xl">
            @else
                <a href="" class="profile-picture-link">
                    <i class="fa-solid fa-cloud-arrow-up text-7xl"></i>
                    <span class="font-bold tracking-wide">
                        Upload Picture to See Profile Picture.
                    </span>
                </a>
            @endif
        </div>
        <dl class="profile-account-information">
            <div class="profile-account-even">
                <dt class="text-sm font-medium text-slate-500 dark:text-slate-700">
                    Full name
                </dt>
                <dd class="mt-1 text-sm text-slate-900 sm:col-span-2 sm:mt-0">
                    {{ $user->name }}
                </dd>
            </div>
            <div class="profile-account-odd">
                <dt class="text-sm font-medium text-slate-500 dark:text-slate-300">
                    Username
                </dt>
                <dd class="mt-1 text-sm text-slate-900 dark:text-slate-400 sm:col-span-2 sm:mt-0">
                    {{ $user->username }}
                </dd>
            </div>
            <div class="profile-account-even">
                <dt class="text-sm font-medium text-slate-500 dark:text-slate-700">
                    Email address
                </dt>
                <dd class="mt-1 text-sm text-slate-900 sm:col-span-2 sm:mt-0">
                    {{ $user->email }}
                </dd>
            </div>
            <div class="profile-account-odd">
                <dt class="text-sm font-medium text-slate-500 dark:text-slate-300">
                    Alamat
                </dt>
                <dd class="mt-1 text-sm text-slate-900 sm:col-span-2 sm:mt-0">
                    @if ($user->address)
                        {{ $user->address }}
                    @else
                        <p>You haven't filled in the Address yet.</p>
                    @endif
                </dd>
            </div>
            <div class="profile-account-even">
                <dt class="text-sm font-medium text-slate-500 dark:text-slate-700">
                    Caption
                </dt>
                <dd class="mt-1 text-sm text-slate-900 sm:col-span-2 sm:mt-0">
                    @if ($user->caption)
                        {{ $user->caption }}
                    @else
                        <p>You haven't filled in the Address yet.</p>
                    @endif
                    {{-- Max: 50 kata --}}
            </div>
        </dl>
    </section>
@endsection
