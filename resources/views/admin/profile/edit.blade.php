@extends('templates.layouts.admin')

@section('container')
    {{-- Title Start --}}
    <h2 class="admin-title">
        Edit User Profile
    </h2>
    {{-- Title End --}}

    {{-- URL Info Start --}}
    <h3 class="admin-url-info">
        <a href="{{ route('profile', ['user' => Auth::user()->username]) }}" class="admin-url-info-link">
            Profile
        </a>
        <span class="admin-url-info-slash">/</span>
        <a href="{{ route('profile', ['user' => Auth::user()->username]) }}" class="admin-url-info-link">
            {{ Str::ucfirst(Auth::user()->username) }}
        </a>
        <span class="admin-url-info-slash">/</span>
        <a href="{{ route('editProfile', ['user' => Auth::user()->username]) }}" class="admin-url-info-link">
            Edit
        </a>
    </h3>
    {{-- URL Info End --}}

    <div class="mb-5 rounded-lg border border-slate-200 bg-white p-5 shadow-lg dark:border-slate-800 dark:bg-slate-800">
        <form action="{{ route('updateProfile', ['user' => Auth::user()->username]) }}" method="POST" enctype="multipart/form-data">
            {{-- @method('put') --}}
            @csrf
            {{-- Full Name Start --}}
            <div class="mb-3">
                <label for="name" class="form-default-label">Full Name</label>
                <input type="text" class="form-default-input @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $user->name) }}">
                @error('name')
                    <p class="is-invalid mt-1 text-xs">{{ $message }}</p>
                @enderror
            </div>
            {{-- Full Name End --}}

            {{-- Username Start --}}
            <div class="mb-3">
                <label for="username" class="form-default-label">Username</label>
                <input type="text" class="form-default-input @error('username') is-invalid @enderror" id="username" name="username"
                    value="{{ old('username', $user->username) }}">
                @error('username')
                    <p class="is-invalid mt-1 text-xs">{{ $message }}</p>
                @enderror
            </div>
            {{-- Username End --}}

            {{-- Email Start --}}
            <div class="mb-3">
                <label for="email" class="form-default-label">Email</label>
                <input type="text" class="form-default-input @error('email') is-invalid @enderror" id="email" name="email"
                    value="{{ old('email', $user->email) }}">
                @error('email')
                    <p class="is-invalid mt-1 text-xs">{{ $message }}</p>
                @enderror
            </div>
            {{-- Email End --}}

            {{-- Address Start --}}
            <div class="mb-3">
                <label for="address" class="form-default-label">Address</label>
                <input type="text" class="form-default-input @error('address') is-invalid @enderror" id="address" name="address"
                    value="{{ old('address', $user->address) }}">
                @error('address')
                    <p class="is-invalid mt-1 text-xs">{{ $message }}</p>
                @enderror
            </div>
            {{-- Address End --}}

            {{-- Image Start --}}
            <div class="mb-3" x-data="ImageChecker('{{ asset('storage/' . $user->profile_image) }}')">
                {{-- Image Preview Start --}}
                <label for="image" class="form-default-label">Image Preview</label>
                <div class="image-preview">
                    <label for="image" class="cursor-pointer">
                        <img x-show="imageUrl" :src="imageUrl" class="w-full object-cover">
                        <div x-show="!imageUrl" class="no-image-preview">
                            <i class="fa-solid fa-cloud-arrow-up text-5xl"></i>
                            <p>No Image Chosen</p>
                        </div>
                    </label>
                </div>
                {{-- Image Peview End --}}

                <input type="hidden" name="oldImg" value="{{ $user->profile_image }}">

                {{-- Image Input Start --}}
                <input @change="fileChosen" type="file" class="form-default-input-file @error('profile_image') is-invalid @enderror" id="image"
                    name="profile_image">
                @error('profile_image')
                    <p class="is-invalid mt-1 text-xs">{{ $message }}</p>
                @enderror
                {{-- Image Input End --}}
            </div>
            {{-- Image End --}}

            {{-- Caption Start --}}
            <div class="mb-3">
                <label for="profile_caption" class="form-default-label">Caption</label>
                <input type="hidden" id="profile_caption" name="profile_caption" value="{{ old('profile_caption', $user->profile_caption) }}">
                <trix-editor input="profile_caption" class="form-default-input @error('profile_caption') is-invalid @enderror"></trix-editor>
                @error('profile_caption')
                    <p class="is-invalid mt-1 text-xs">{{ $message }}</p>
                @enderror
            </div>
            {{-- Caption End --}}

            {{-- Button Update Start --}}
            <div class="mt-5 flex w-full justify-center">
                <button type="submit" class="btn-primary">
                    Update
                </button>
            </div>
            {{-- Button Update End --}}
        </form>
    </div>
@endsection
