<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                <div class="card-body bg-base-100 rounded-lg w-full">
                    <div class="flex flex-auto text-center justify-center align-middle">
                        <h1 class="text-3xl font-bold">ListyList</h1>
                        <x-icons.pencil/>
                    </div>

                    {{ $slot }}

                </div>
            </div>

        </div>
    </body>
</html>