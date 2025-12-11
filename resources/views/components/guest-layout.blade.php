<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <link rel="preconnect" href="https://fonts.bunny.net">

        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />



        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))

            @vite(['resources/css/app.css', 'resources/js/app.js'])

        @else

            <style>

                /*

                  NOTE: Keeping the Tailwind output here is purely structural.

                  In a real application, you would manage custom colors in tailwind.config.js.

                  The classes applied below are the effective changes.

                */

            </style>

        @endif

    </head>

    <body class="bg-[#FDF8F5] dark:bg-[#2C1810] text-[#4E342E] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

       

        {{ $slot }}

    </body>

</html>