@extends('templates.layouts.admin')

@section('container')
    {{-- Title Start --}}
    <h2 class="admin-title">
        User Profile
    </h2>
    {{-- Title End --}}

    {{-- URL Info Start --}}
    <h3 class="admin-url-info">
        <a href="{{ route('profile', ['user' => Auth::user()->username]) }}" class="admin-url-info-link">
            Profile
        </a>
        <span class="admin-url-info-slash">/</span>
        <a href="{{ route(Route::currentRouteName(), ['user' => Auth::user()->username]) }}" class="admin-url-info-link">
            {{ Str::ucfirst(Auth::user()->username) }}
        </a>
    </h3>
    {{-- URL Info End --}}

    @if (session('type'))
        <x-alert type="{{ session('type') }}" message="{!! session('message') !!}" />
    @endif

    <section class="profile-container xl:pl-4">
        <div class="profile-picture-container">
            @if ($user->profile_image)
                <img src="{{ asset('storage/' . $user->profile_image) }}" class="h-full max-w-xl">
            @else
                <a href="{{ route('editProfile', ['user' => Auth::user()->username]) }}" class="profile-picture-link">
                    <i class="fa-solid fa-cloud-arrow-up text-7xl"></i>
                    <span class="font-bold tracking-wide">
                        Upload Picture to See Profile Picture.
                    </span>
                </a>
            @endif
        </div>
        <dl class="profile-account-information">
            <a href="{{ route('editProfile', ['user' => Auth::user()->username]) }}" class="profile-edit-btn">
                Edit Profile
            </a>
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
                    @if ($user->profile_caption)
                        {!! $user->profile_caption !!}
                    @else
                        <p>You haven't filled in the Caption yet.</p>
                    @endif
            </div>
        </dl>
    </section>
@endsection
