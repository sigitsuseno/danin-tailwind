<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css') }}">
    <!-- Styles / Scripts -->

    {{-- <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
    <!-- languages (Basic Language: English/en) -->
    <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ko.js"></script> --}}

    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/scss/layout.scss', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="dashboard_container with_text">
        <x-sidebar></x-sidebar>

        <div class="konten">
            <header class="dashboard_header">
                <div>
                    {{ $bread }}
                </div>
                <div>
                    {{ $theMenu }}
                </div>
                <div>
                    @auth
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="px-4 py-1 text-white bg-orange-700 rounded-lg">
                                <x-logout-icon></x-logout-icon>
                            </button>
                        </form>
                    @endauth
                </div>
            </header>
            <main class="dashboard_main">
                <div class="dash_wrapper">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

</body>

</html>
