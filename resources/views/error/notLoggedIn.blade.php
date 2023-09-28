<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Vite Resources --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>401 - Unauthorized</title>
</head>

<body>
    <div class="relative flex items-center justify-center overflow-hidden">
        <div class="fixed top-48 text-center">
            <h1 class="text-7xl font-bold text-sky-600">
                Hold Up!
            </h1>
            <p class="mt-10 text-xl font-medium text-slate-700">
                Error 401: Unauthorized, Please
                <a href="{{ route('login') }}" class="text-sky-600 underline underline-offset-2">
                    Login.
                </a>
            </p>
        </div>
        <img src="{{ asset('img/401.png') }}" class="fixed top-0 -z-10 h-full">
    </div>
</body>

</html>
