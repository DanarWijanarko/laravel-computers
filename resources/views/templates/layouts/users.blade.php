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

    {{-- My Css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Nar Computer Center | Login Page</title>
</head>

<body x-data="dataUsers()" class="font-poppins" >

    @yield('container')

</body>

</html>
