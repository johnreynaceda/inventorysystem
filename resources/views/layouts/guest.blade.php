<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-indigo-200">

        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex justify-center items-center">
                <a href="/" class="flex items-center space-x-2">
                    <svg class="w-16 h-16 fill-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path
                            d="M20.1 6.94c0 .54-.29 1.03-.75 1.28l-1.74.94-1.48.79-3.07 1.66c-.33.18-.69.27-1.06.27-.37 0-.73-.09-1.06-.27L4.65 8.22c-.46-.25-.75-.74-.75-1.28s.29-1.03.75-1.28L6.62 4.6l1.57-.85 2.75-1.48c.66-.36 1.46-.36 2.12 0l6.29 3.39c.46.25.75.74.75 1.28zM9.9 12.79L4.05 9.86c-.45-.23-.97-.2-1.4.06-.43.26-.68.72-.68 1.22v5.53c0 .96.53 1.82 1.39 2.25l5.85 2.92c.2.1.42.15.64.15.26 0 .52-.07.75-.22.43-.26.68-.72.68-1.22v-5.53c.01-.94-.52-1.8-1.38-2.23zM22.03 11.15v5.53c0 .95-.529 1.81-1.389 2.24l-5.85 2.93a1.433 1.433 0 01-1.4-.07c-.42-.26-.68-.72-.68-1.22v-5.52c0-.96.53-1.82 1.39-2.25l2.15-1.07 1.5-.75 2.2-1.1c.45-.23.97-.21 1.4.06.42.26.68.72.68 1.22z"
                            opacity=".4"></path>
                        <path
                            d="M17.61 9.16l-1.48.79L6.62 4.6l1.57-.85 9.18 5.18c.1.06.18.14.24.23zM17.75 10.97v2.27c0 .41-.34.75-.75.75s-.75-.34-.75-.75v-1.52l1.5-.75z">
                        </path>
                    </svg>
                    <h1 class="text-2xl text-indigo-600 font-bold">RAYSAY MINIMART</h1>
                </a>
            </div>

            <div class="mt-10">
                {{ $slot }}
            </div>
        </div>
    </div>
    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>
