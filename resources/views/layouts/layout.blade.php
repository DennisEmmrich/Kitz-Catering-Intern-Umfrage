@props([
    'pageScripts' => '',
    'pageTitle' => 'Kitz-Catering',
])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('') }}">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('') }}">
    <link rel="shortcut icon" type="image/png" sizes="32x32" href="{{ asset('') }}">
    <link rel="shortcut icon" type="image/png" sizes="70x70" href="{{ asset('') }}">
    <link rel="shortcut icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicons/favicon96x96.png') }}">
    <link rel="shortcut icon" type="image/png" sizes="256x256" href="{{ asset('') }}">

    <title>{{ $pageTitle }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- styles -->
    <style>
        [x-cloak] { display: none !important; }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head>

<body class="min-h-screen bg-bgColorPrimary pt-4" id="body">

<header class="w-full font-sans select-none">
    <div class="max-w-fit mx-auto">
        <a href="{{ route('welcome') }}">
            <img class="h-24 mx-auto" src="{{ asset('assets/logos/Logo.png') }}" alt="" draggable="false">
        </a>
    </div>
</header>

<!-- Page Content -->
<main class="w-full font-sans select-none relative z-10">
    {{ $slot }}
</main>

<footer class="w-full font-sans sticky top-[100vh] select-none">
    <div class="w-full text-sm text-white text-center py-7 opacity-30 cursor-default">
        &copy; Copyright {{ now()->year }} Kitz Catering - All Rights Reserved
    </div>
</footer>

{{ $pageScripts }}

</body>
</html>
