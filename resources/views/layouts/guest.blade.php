<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="mytheme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="flex justify-center items-center h-screen drop-shadow-lg bg-neutral">

        <div class="card w-96 card-normaljustify-center items-center shadow-2xl">
            <div class="card-body bg-base-200 rounded-lg w-full">
                <x-application-logo />

                {{ $slot }}

            </div>
        </div>

    </div>
</body>

</html>
