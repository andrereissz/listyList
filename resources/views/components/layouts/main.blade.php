<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title ?? 'ListyList' }} </title>

    @vite('resources/css/app.css')
</head>
<body>
    <x-ui.nav-menu></x-ui.nav-menu>
    {{ $slot }}
</body>
</html>
