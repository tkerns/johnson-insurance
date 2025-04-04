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
    @include('layouts.footer')
</body>

</html>
