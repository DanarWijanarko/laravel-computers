@extends('templates.layouts.users')

@section('container')
    <section class="bg-logres users-section">
        <div class="users-container">
            {{-- Cancel & Title Start --}}
            <div>
                <a href="{{ route('home') }}" class="users-btn-cancel">Cancel</a>
                <h1 class="users-title">Please Login First.</h1>
            </div>
            {{-- Cancel & Title End --}}

            {{-- Alert Start --}}
            @if (session('type'))
                <x-alert type="{{ session('type') }}" message="{{ session('message') }}" />
            @endif
            {{-- Alert End --}}

            {{-- Login Form Start --}}
            <form action="{{ route('doLogin') }}" method="POST">
                @csrf
                {{-- Input Email Address Start --}}
                <div class="group relative z-0 mb-8 w-full">
                    <input type="email" id="email" class="floating-input peer" placeholder="" name="email">
                    <label for="email" class="floating-label">Email address</label>
                    @if (false)
                        <p class="is-invalid mt-2 text-xs">Email Address Invalid.</p>
                    @endif
                </div>
                {{-- Input Email Address End --}}

                {{-- Input Password Start --}}
                <div class="group relative z-0 mb-8 w-full">
                    <input :type="isInputShow ? 'text' : 'password'" class="floating-input peer" placeholder="" name="password">
                    <label for="password" class="floating-label">Password</label>

                    {{-- Toggle Show & Hide Password Start --}}
                    <button @click="toggleShowHide" type="button" class="users-btn-show-hide">
                        <i class="fa-regular" :class="isInputShow ? 'fa-eye-slash' : 'fa-eye'"></i>
                    </button>
                    {{-- Toggle Show & Hide Password End --}}
                </div>
                {{-- Input Password End --}}

                {{-- Button Login Start --}}
                <div class="mb-7 flex justify-center">
                    <button type="submit" class="btn-primary px-7 text-lg">Login</button>
                </div>
                {{-- Button Login End --}}

                {{-- Don't Have an Account Start --}}
                <p class="text-center text-sm text-slate-500">
                    Don't Have an Account?
                    <a href="{{ route('register') }}" class="users-btn-link">Register Now!</a>
                </p>
                {{-- Don't Have an Account End --}}
            </form>
            {{-- Login Form End --}}
        </div>
    </section>
@endsection
