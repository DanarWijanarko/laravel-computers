@extends('templates.layouts.users')

@section('container')
    <section class="bg-logres users-section">
        <div class="users-container">
            {{-- Cancel & Title Start --}}
            <div>
                <a href="{{ route('home') }}" class="users-btn-cancel">Cancel</a>
                <h1 class="users-title">Create your Account.</h1>
            </div>
            {{-- Cancel & Title End --}}

            {{-- Alert Start --}}
            @if (session('type'))
                <x-alert type="{{ session('type') }}" message="{{ session('message') }}" />
            @endif
            {{-- Alert End --}}

            {{-- Login Form Start --}}
            <form action="{{ route('storeAcc') }}" method="POST">
                @csrf
                {{-- Input Full Name Start --}}
                <div class="group relative z-0 mb-8 w-full">
                    <input type="text" id="name" class="floating-input @error('name') is-invalid @enderror peer" placeholder="" name="name"
                        value="{{ old('name') }}">
                    <label for="name" class="floating-label">Full Name</label>
                    @error('name')
                        <p class="is-invalid mt-2 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Input Full Name End --}}

                {{-- Input Username Start --}}
                <div class="group relative z-0 mb-8 w-full">
                    <input type="text" id="username" class="floating-input @error('username') is-invalid @enderror peer" name="username"
                        placeholder="" value="{{ old('username') }}">
                    <label for="username" class="floating-label">Username</label>
                    @error('username')
                        <p class="is-invalid mt-2 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Input Username End --}}

                {{-- Input Email Address Start --}}
                <div class="group relative z-0 mb-8 w-full">
                    <input type="text" id="email" class="floating-input @error('email') is-invalid @enderror peer" placeholder="" name="email"
                        value="{{ old('email') }}">
                    <label for="email" class="floating-label">Email address</label>
                    @error('email')
                        <p class="is-invalid mt-2 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Input Email Address End --}}

                {{-- Input Password Start --}}
                <div class="group relative z-0 mb-8 w-full">
                    <input :type="isInputShow ? 'text' : 'password'" class="floating-input @error('password') is-invalid @enderror peer" name="password"
                        placeholder="">
                    <label for="password" class="floating-label">Password</label>
                    @error('password')
                        <p class="is-invalid mt-2 text-xs">{{ $message }}</p>
                    @enderror

                    {{-- Toggle Show & Hide Password Start --}}
                    <button @click="toggleShowHide" type="button" class="users-btn-show-hide">
                        <i class="fa-regular" :class="isInputShow ? 'fa-eye-slash' : 'fa-eye'"></i>
                    </button>
                    {{-- Toggle Show & Hide Password End --}}
                </div>
                {{-- Input Password End --}}

                {{-- Input Password Confirmation Start --}}
                <div class="group relative z-0 mb-8 w-full">
                    <input :type="isInputShowConfirm ? 'text' : 'password'" class="floating-input @error('password_confirmation') is-invalid @enderror peer"
                        name="password_confirmation" placeholder="">
                    <label for="password" class="floating-label">Confirm Password</label>
                    @error('password_confirmation')
                        <p class="is-invalid mt-2 text-xs">{{ $message }}</p>
                    @enderror

                    {{-- Toggle Show & Hide Password Start --}}
                    <button @click="toggleShowHideConfirm" type="button" class="users-btn-show-hide">
                        <i class="fa-regular" :class="isInputShowConfirm ? 'fa-eye-slash' : 'fa-eye'"></i>
                    </button>
                    {{-- Toggle Show & Hide Password End --}}
                </div>
                {{-- Input Password Confirmation End --}}

                {{-- Button Register Start --}}
                <div class="mb-7 flex justify-center">
                    <button type="submit" class="btn-primary px-7 text-lg">Create</button>
                </div>
                {{-- Button Register End --}}

                {{-- Have an Account Start --}}
                <p class="text-center text-sm text-slate-500">
                    Have an Account?
                    <a href="{{ route('login') }}" class="users-btn-link">Login Now!</a>
                </p>
                {{-- Have an Account End --}}
            </form>
            {{-- Login Form End --}}
        </div>
    </section>
@endsection
