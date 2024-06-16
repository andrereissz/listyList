<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-theme="mytheme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ListyList {{ '- '.$page ?? '' }} </title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex justify-center items-center h-screen drop-shadow-lg bg-neutral">


            <div class="card w-96 card-normaljustify-center items-center shadow-2xl">
                <div class="card-body bg-base-100 rounded-lg w-full">

                {{ $slot }}

                </div>
            </div>

    </div>

</body>
</html>
