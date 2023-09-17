@extends('templates.layouts.main')

@section('container')
    {{-- Jumbotron Start --}}
    <section class="bg-contact bg-[rgb(61,61,61)] bg-center bg-no-repeat bg-blend-multiply">
        <div class="mx-auto flex h-[600px] max-w-screen-xl flex-col items-center justify-center px-4 py-24 text-center">
            <h1 class="text-4xl font-extrabold leading-none tracking-wide text-slate-100 md:text-5xl lg:text-7xl">
                Contact Us.
            </h1>
        </div>
    </section>
    {{-- Jumbotron End --}}

    {{-- Hero Start --}}
    <div class="mx-10 max-w-screen-lg py-10 lg:mx-auto">
        <h1 class="mb-10 text-center text-2xl font-medium lg:text-4xl">Let's Start a Conversation</h1>
        <div class="mb-1 grid-cols-2 items-center justify-items-center gap-36 lg:grid">
            {{-- Left Hero Section Start --}}
            <div class="w-full">
                <h3 class="mb-8 text-xl font-bold text-slate-800 lg:text-3xl">
                    Ask how we can help you:
                </h3>
                <h5 class="mb-1 font-medium text-slate-600 lg:text-xl">
                    Lorem ipsum dolor sit amet.
                </h5>
                <p class="mb-8 font-light text-slate-400 lg:text-lg">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
                <h5 class="mb-1 font-medium text-slate-600 lg:text-xl">
                    Lorem ipsum dolor sit amet.
                </h5>
                <p class="mb-8 font-light text-slate-400 lg:text-lg">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
            {{-- Left Hero Section End --}}

            {{-- Right Hero Section Start --}}
            <form class="w-full" action="{{ route('sendMessage') }}" method="POST">
                @csrf
                {{-- Your Name Start --}}
                <div class="mb-3">
                    <label for="name" class="form-default-label">Your Name</label>
                    <input type="text" id="name" class="form-default-input @error('name') is-invalid @enderror" name="name"
                        placeholder="Enter your Name here..." value="{{ old('name') }}">
                    @error('name')
                        <p class="is-invalid mt-2 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Your Name End --}}

                {{-- Your Email Start --}}
                <div class="mb-3">
                    <label for="email" class="form-default-label">Your Email</label>
                    <input type="email" id="email" class="form-default-input @error('email') is-invalid @enderror" name="email"
                        placeholder="Enter your Email here..." value="{{ old('email') }}">
                    @error('email')
                        <p class="is-invalid mt-2 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Your Email End --}}

                {{-- Your Message Start --}}
                <div class="mb-5">
                    <label for="message" class="form-default-label">Your Message</label>
                    <textarea id="message" rows="4" class="form-default-input @error('message') is-invalid @enderror" name="message"
                        placeholder="Leave a comment...">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="is-invalid mt-2 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Your Message End --}}

                {{-- Submit Button Start --}}
                <button type="submit" class="btn-primary mx-auto block">
                    Submit Form
                </button>
                {{-- Submit Button End --}}

                {{-- Sweet Alert Modal Init Start --}}
                <span class="hidden" id="success" success="{{ session('success') }}"></span>
                {{-- Sweet Alert Modal Init End --}}
            </form>
            {{-- Right Hero Section End --}}
        </div>
    </div>
    {{-- Hero End --}}
@endsection
