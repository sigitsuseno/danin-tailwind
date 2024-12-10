<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pie Susu') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-900">
    <div class="w-full min-h-screen bg-orange-100 dark:bg-slate-900">
        <x-atasan />
        <div class="dasaran {{ request()->routeIs('beranda') ? 'show' : '' }} bg-orange-100">
            {{-- <div class="bg-orange-100 bg-bg">
                <img src="/asset/img/bgbg.jpg" alt="">
            </div> --}}
            @include('slide')
        </div>
        <x-header></x-header>
        {{ $slot }}
        <x-footer></x-footer>
    </div>
</body>

</html>
