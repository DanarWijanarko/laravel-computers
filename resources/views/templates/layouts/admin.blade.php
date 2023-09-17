<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Vite Resources --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Alpine Init --}}
    <script src="{{ asset('js/alpine-init.js') }}"></script>

    {{-- Sweet Alert Init --}}
    <script type="module" src="{{ asset('js/sweetalert-init.js') }}"></script>

    <title>Nar Computer Center | Dashboard</title>
</head>

<body :class="{ 'dark': dark }" x-data="dataDashboard()" class="font-poppins">
    <div class="flex h-screen bg-slate-50 dark:bg-slate-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('templates.partials.admin.sidebar')
        <div class="flex w-full flex-1 flex-col">
            @include('templates.partials.admin.header')
            <main class="h-full overflow-y-auto">
                <div class="container mx-auto grid px-6">
                    @yield('container')
                </div>
            </main>
        </div>
    </div>
</body>

</html>
