@extends('templates.layouts.admin')

@section('container')
    {{-- Title Start --}}
    <h2 class="admin-title">
        Add an Laptops
    </h2>
    {{-- Title End --}}

    {{-- URL Info Start --}}
    <h3 class="admin-url-info">
        <a href="{{ route('dashboard') }}" class="admin-url-info-link">
            Dashboard
        </a>
        <span class="admin-url-info-slash">/</span>
        <a href="{{ route('edit-laptop') }}" class="admin-url-info-link">
            Edit Laptop
        </a>
        <span class="admin-url-info-slash">/</span>
        <a href="{{ route(Route::currentRouteName()) }}" class="admin-url-info-link">
            Add
        </a>
    </h3>
    {{-- URL Info End --}}

    <div class="rounded-lg border border-slate-200 bg-white p-5 shadow-lg dark:border-slate-800 dark:bg-slate-800">
        <form action="">
            {{-- Laptop Start --}}
            <div class="mb-3">
                <label for="laptop" class="form-default-label">Laptop</label>
                <input type="text" class="form-default-input is-invalid" id="laptop" name="laptop">
                @if (true)
                    <p class="is-invalid mt-1 text-xs">Email Address Invalid.</p>
                @endif
            </div>
            {{-- laptop End --}}

            {{-- series Start --}}
            <div class="mb-3">
                <label for="series" class="form-default-label">Series</label>
                <input type="text" class="form-default-input" id="series" name="series">
            </div>
            {{-- series End --}}

            {{-- company Start --}}
            <div class="mb-3">
                <label for="company" class="form-default-label">Company</label>
                <input type="text" class="form-default-input" id="company" name="company">
            </div>
            {{-- company End --}}

            {{-- Image Start --}}
            <div class="mb-3" x-data="previewImage()">
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

                {{-- Image Input Start --}}
                <input @change="fileChosen" type="file" class="form-default-input-file" id="image" name="laptop-image">
                {{-- Image Input End --}}
            </div>
            {{-- Image End --}}

            {{-- Body Start --}}
            <div class="mb-3">
                <label for="body" class="form-default-label">Laptop Body</label>
                <input type="hidden" id="body" name="laptop-body">
                <trix-editor input="body" class="form-default-input"></trix-editor>
            </div>
            {{-- Body End --}}

            {{-- Button Submit Start --}}
            <div class="mt-5 flex w-full justify-center">
                <button type="submit" class="btn-primary">
                    Submit
                </button>
            </div>
            {{-- Button Submit End --}}
        </form>
    </div>
@endsection
