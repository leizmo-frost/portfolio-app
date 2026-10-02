<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name', 'Lermodious Karanja') }}</title>

    <meta name="description" content="Lermodious Karanja builds thoughtful web applications, payment integrations, and dependable systems from Nairobi, Kenya.">
    <meta name="theme-color" content="#11131b">
    <meta name="color-scheme" content="dark">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased">
    {{ $slot }}

    @livewireScripts
</body>
</html>
