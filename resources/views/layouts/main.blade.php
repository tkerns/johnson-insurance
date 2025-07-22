<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <meta name="description" content="{{ $metaDesc ?? config('app.description') }}" />
    <link rel="canonical" href="{{ Request::fullUrl() }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <meta property="og:locale" content="{{ app()->getLocale() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $title ?? config('app.name') }}" />
    <meta property="og:description" content="{{ $metaDesc ?? config('app.description') }}" />
    <meta property="og:url" content="{{ Request::fullUrl() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="og:image" content="{{ isset($ogImage) ? url($ogImage) : url('') }}" />
    <meta property="og:image:secure_url" content="{{ isset($ogImage) ? url($ogImage) : url('') }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="{{ $metaDesc ?? config('app.description') }}" />
    <meta name="twitter:title" content="{{ $title ?? config('app.name') }}" />
    <meta name="twitter:image" content="{{ isset($ogImage) ? url($ogImage) : url('') }}" />

    @stack('head')
    @vite(['resources/css/app.css'])
</head>

<body>
    @include('layouts.header')
    @yield('content')
    <button x-data="{ showButton: false }"
        x-init="window.addEventListener('scroll', () => { showButton = window.scrollY > 100 })"
        x-cloak
        x-show="showButton"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="hidden md:flex justify-center items-center fixed bottom-4 right-4 z-10 bg-black rounded-full p-4 focus-visible:outline-4 focus-visible:outline-offset-2">
    <svg width="20" height="20" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.30201 1.51317L7.29917 21.3422C7.29912 21.7057 6.97211 21.9993 6.5674 21.9993C6.16269 21.9992 5.83577 21.7055 5.83582 21.342L5.83844 3.10055L1.39753 7.08842C1.11169 7.34511 0.647535 7.34506 0.361762 7.0883C0.0759894 6.83155 0.0760493 6.41464 0.361896 6.15795L6.05367 1.04682C6.26405 0.857899 6.5773 0.802482 6.85167 0.905201C7.12374 1.00792 7.30205 1.24823 7.30201 1.51317Z"
              fill="#FFF"></path>
        <path d="M12.9991 6.6318C12.9991 6.80021 12.9282 6.96861 12.7841 7.09592C12.4983 7.35261 12.0341 7.35256 11.7483 7.0958L6.05118 1.97719C5.76541 1.72043 5.76547 1.30352 6.05131 1.04684C6.33716 0.790152 6.80131 0.790206 7.08709 1.04696L12.7842 6.16557C12.9283 6.29498 12.9991 6.46339 12.9991 6.6318Z"
              fill="#FFF"></path>
    </svg>
    <span class="sr-only">Go to top</span>
</button>
    @include('layouts.footer')
</body>

</html>
