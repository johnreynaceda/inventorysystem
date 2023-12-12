<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta wire:navigate charset="utf-8">
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
    <tallstackui:script />
    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased">
    <x-dialog />
    <div class="flex h-screen overflow-hidden bg-indigo-100">
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64">
                <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-white  ">
                    <div class="flex flex-col flex-shrink-0 px-4">
                        <a href="/" class="flex items-center space-x-2">
                            <svg class="w-16 h-16 fill-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M20.1 6.94c0 .54-.29 1.03-.75 1.28l-1.74.94-1.48.79-3.07 1.66c-.33.18-.69.27-1.06.27-.37 0-.73-.09-1.06-.27L4.65 8.22c-.46-.25-.75-.74-.75-1.28s.29-1.03.75-1.28L6.62 4.6l1.57-.85 2.75-1.48c.66-.36 1.46-.36 2.12 0l6.29 3.39c.46.25.75.74.75 1.28zM9.9 12.79L4.05 9.86c-.45-.23-.97-.2-1.4.06-.43.26-.68.72-.68 1.22v5.53c0 .96.53 1.82 1.39 2.25l5.85 2.92c.2.1.42.15.64.15.26 0 .52-.07.75-.22.43-.26.68-.72.68-1.22v-5.53c.01-.94-.52-1.8-1.38-2.23zM22.03 11.15v5.53c0 .95-.529 1.81-1.389 2.24l-5.85 2.93a1.433 1.433 0 01-1.4-.07c-.42-.26-.68-.72-.68-1.22v-5.52c0-.96.53-1.82 1.39-2.25l2.15-1.07 1.5-.75 2.2-1.1c.45-.23.97-.21 1.4.06.42.26.68.72.68 1.22z"
                                    opacity=".4"></path>
                                <path
                                    d="M17.61 9.16l-1.48.79L6.62 4.6l1.57-.85 9.18 5.18c.1.06.18.14.24.23zM17.75 10.97v2.27c0 .41-.34.75-.75.75s-.75-.34-.75-.75v-1.52l1.5-.75z">
                                </path>
                            </svg>
                            <h1 class="text-xl text-indigo-600 font-bold">RAYSAY MINIMART</h1>
                        </a>
                        <button class="hidden rounded-lg focus:outline-none focus:shadow-outline">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col flex-grow px-4 mt-5">
                        <nav class="flex-1 space-y-1 bg-white">


                            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                                Analytics
                            </p>
                            <ul>
                                <li>
                                    <a wire:navigate
                                        class="{{ request()->routeIs('admin.dashboard') ? 'bg-indigo-100 fill-indigo-500 text-indigo-500 scale-95' : '' }} inline-flex items-center w-full px-4 py-3 mt-1 font-medium  text-gray-500 fill-gray-500 hover:fill-indigo-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-indigo-100 hover:scale-95 hover:text-indigo-500"
                                        href="{{ route('admin.dashboard') }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-5 h-5 md hydrated">
                                            <path
                                                d="M10.07 2.82L3.14 8.37c-.78.62-1.28 1.93-1.11 2.91l1.33 7.96c.24 1.42 1.6 2.57 3.04 2.57h11.2c1.43 0 2.8-1.16 3.04-2.57l1.33-7.96c.16-.98-.34-2.29-1.11-2.91l-6.93-5.54c-1.07-.86-2.8-.86-3.86-.01z"
                                                opacity=".4"></path>
                                            <path d="M12 15.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"></path>
                                        </svg>
                                        <span class="ml-3">
                                            Dashboard
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <p class="px-4 pt-10 text-xs font-semibold text-gray-400 uppercase">
                                MANAGEMENT
                            </p>
                            <ul>
                                <li>
                                    <a wire:navigate
                                        class="{{ request()->routeIs('admin.category') ? 'bg-indigo-100 fill-indigo-500 text-indigo-500 scale-95' : '' }} inline-flex items-center w-full px-4 py-3 mt-1 font-medium  text-gray-500 fill-gray-500 hover:fill-indigo-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-indigo-100 hover:scale-95 hover:text-indigo-500"
                                        href="{{ route('admin.category') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-5 h-5 md hydrated">
                                            <path
                                                d="M10.07 2.82L3.14 8.37c-.78.62-1.28 1.93-1.11 2.91l1.33 7.96c.24 1.42 1.6 2.57 3.04 2.57h11.2c1.43 0 2.8-1.16 3.04-2.57l1.33-7.96c.16-.98-.34-2.29-1.11-2.91l-6.93-5.54c-1.07-.86-2.8-.86-3.86-.01z"
                                                opacity=".4"></path>
                                            <path d="M12 15.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"></path>
                                        </svg>
                                        <span class="ml-3">
                                            Category
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a wire:navigate
                                        class="{{ request()->routeIs('admin.product') ? 'bg-indigo-100 fill-indigo-500 text-indigo-500 scale-95' : '' }} inline-flex items-center w-full px-4 py-3 mt-1 font-medium  text-gray-500 fill-gray-500 hover:fill-indigo-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-indigo-100 hover:scale-95 hover:text-indigo-500"
                                        href="{{ route('admin.product') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-5 h-5 md hydrated">
                                            <path
                                                d="M16.19 2.33H7.82c-3.64 0-5.81 2.17-5.81 5.81v8.37c0 3.64 2.17 5.81 5.81 5.81h8.37c3.64 0 5.81-2.17 5.81-5.81V8.15c0-3.64-2.17-5.82-5.81-5.82z"
                                                opacity=".4"></path>
                                            <path
                                                d="M16.4 8.21l-3.76-2.03c-.4-.21-.87-.21-1.27 0L7.61 8.21a.87.87 0 00-.44.77c0 .33.17.62.44.77l3.76 2.03c.2.11.42.16.64.16.22 0 .44-.05.64-.16l3.76-2.03a.87.87 0 00.44-.77.9.9 0 00-.45-.77zM10.74 12.47l-3.5-1.75a.867.867 0 00-.84.04c-.26.16-.41.43-.41.73v3.31c0 .57.32 1.09.83 1.34l3.5 1.75c.12.06.25.09.39.09.16 0 .31-.04.45-.13.26-.16.41-.43.41-.73v-3.31c0-.57-.31-1.08-.83-1.34zM17.59 10.76a.867.867 0 00-.84-.04l-3.5 1.75a1.5 1.5 0 00-.83 1.34v3.31c0 .3.15.57.41.73.14.09.29.13.45.13.13 0 .26-.03.39-.09l3.5-1.75c.51-.26.83-.77.83-1.34v-3.31c0-.3-.15-.57-.41-.73z">
                                            </path>
                                        </svg>
                                        <span class="ml-3">
                                            Products
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a wire:navigate
                                        class="{{ request()->routeIs('admin.sales') ? 'bg-indigo-100 fill-indigo-500 text-indigo-500 scale-95' : '' }} inline-flex items-center w-full px-4 py-3 mt-1 font-medium  text-gray-500 fill-gray-500 hover:fill-indigo-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-indigo-100 hover:scale-95 hover:text-indigo-500"
                                        href="{{ route('admin.sales') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-5 h-5 md hydrated">
                                            <path
                                                d="M17 7.75c-.19 0-.38-.07-.53-.22a.754.754 0 010-1.06l2.05-2.05C16.76 2.92 14.49 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-2.49-.92-4.76-2.42-6.52l-2.05 2.05c-.15.15-.34.22-.53.22z"
                                                opacity=".4"></path>
                                            <path
                                                d="M13.75 11.82l-1-.35V9.25h.08c.51 0 .92.45.92 1 0 .41.34.75.75.75s.75-.34.75-.75c0-1.38-1.08-2.5-2.42-2.5h-.08V7.5c0-.41-.34-.75-.75-.75s-.75.34-.75.75v.25h-.3c-1.21 0-2.2 1.02-2.2 2.28 0 1.46.85 1.93 1.5 2.16l1 .35v2.22h-.08c-.51 0-.92-.45-.92-1 0-.41-.34-.75-.75-.75s-.75.34-.75.75c0 1.38 1.08 2.5 2.42 2.5h.08v.25c0 .41.34.75.75.75s.75-.34.75-.75v-.25h.3c1.21 0 2.2-1.02 2.2-2.28 0-1.47-.85-1.94-1.5-2.16zm-3.01-1.06c-.34-.12-.49-.19-.49-.74 0-.43.32-.78.7-.78h.3v1.69l-.51-.17zm2.31 3.99h-.3v-1.69l.51.18c.34.12.49.19.49.74 0 .42-.32.77-.7.77zM22.69 1.71a.782.782 0 00-.41-.41.717.717 0 00-.29-.06h-4c-.41 0-.75.34-.75.75s.34.75.75.75h2.19l-1.67 1.67c.38.33.73.68 1.06 1.06l1.67-1.67V6c0 .41.34.75.75.75s.75-.34.75-.75V2c.01-.1-.01-.19-.05-.29z">
                                            </path>
                                        </svg>
                                        <span class="ml-3">
                                            Sales
                                        </span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a wire:navigate class="{{ request()->routeIs('admin.stocks') ? 'bg-indigo-100 fill-indigo-500 text-indigo-500 scale-95' : '' }} inline-flex items-center w-full px-4 py-3 mt-1 font-medium  text-gray-500 fill-gray-500 hover:fill-indigo-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-indigo-100 hover:scale-95 hover:text-indigo-500"
                                        href="{{ route('admin.stocks') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-5 h-5 md hydrated">
                                            <path
                                                d="M7 5.75c-.41 0-.75-.34-.75-.75V2c0-.41.34-.75.75-.75s.75.34.75.75v3c0 .41-.34.75-.75.75zM15 5.75c-.41 0-.75-.34-.75-.75V2c0-.41.34-.75.75-.75s.75.34.75.75v3c0 .41-.34.75-.75.75z">
                                            </path>
                                            <path
                                                d="M20 8.5V17c0 3-1.5 5-5 5H7c-3.5 0-5-2-5-5V8.5c0-3 1.5-5 5-5h8c3.5 0 5 2 5 5z"
                                                opacity=".4"></path>
                                            <path
                                                d="M13 11.75H7c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h6c.41 0 .75.34.75.75s-.34.75-.75.75zM10 16.75H7c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h3c.41 0 .75.34.75.75s-.34.75-.75.75zM21 13.63a5.19 5.19 0 00-3.25-1.13c-1.23 0-2.38.43-3.28 1.16a5.188 5.188 0 00-1.97 4.09c0 .98.28 1.92.76 2.7.37.61.85 1.14 1.42 1.55.86.63 1.92 1 3.07 1 1.33 0 2.53-.49 3.45-1.31.41-.34.76-.76 1.04-1.24.48-.78.76-1.72.76-2.7 0-1.67-.78-3.16-2-4.12zm-3.25 6.62a2.5 2.5 0 00-2.5-2.5 2.5 2.5 0 002.5-2.5 2.5 2.5 0 002.5 2.5 2.5 2.5 0 00-2.5 2.5z">
                                            </path>
                                        </svg>
                                        <span class="ml-3">
                                            Stocks
                                        </span>
                                    </a>
                                </li> --}}
                            </ul>
                            <p class="px-4 pt-10 text-xs font-semibold text-gray-400 uppercase">
                                REPORT
                            </p>
                            <ul>
                                <li>
                                    <a wire:navigate
                                        class="{{ request()->routeIs('admin.report') ? 'bg-indigo-100 fill-indigo-500 text-indigo-500 scale-95' : '' }} inline-flex items-center w-full px-4 py-3 mt-1 font-medium  text-gray-500 fill-gray-500 hover:fill-indigo-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-indigo-100 hover:scale-95 hover:text-indigo-500"
                                        href="{{ route('admin.report') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-5 h-5 md hydrated">
                                            <path
                                                d="M21.66 10.44l-.98 4.18c-.84 3.61-2.5 5.07-5.62 4.77-.5-.04-1.04-.13-1.62-.27l-1.68-.4c-4.17-.99-5.46-3.05-4.48-7.23l.98-4.19c.2-.85.44-1.59.74-2.2 1.17-2.42 3.16-3.07 6.5-2.28l1.67.39c4.19.98 5.47 3.05 4.49 7.23z"
                                                opacity=".4"></path>
                                            <path
                                                d="M15.06 19.39c-.62.42-1.4.77-2.35 1.08l-1.58.52c-3.97 1.28-6.06.21-7.35-3.76L2.5 13.28c-1.28-3.97-.22-6.07 3.75-7.35l1.58-.52c.41-.13.8-.24 1.17-.31-.3.61-.54 1.35-.74 2.2l-.98 4.19c-.98 4.18.31 6.24 4.48 7.23l1.68.4c.58.14 1.12.23 1.62.27zM17.49 10.51c-.06 0-.12-.01-.19-.02l-4.85-1.23a.75.75 0 01.37-1.45l4.85 1.23a.748.748 0 01-.18 1.47z">
                                            </path>
                                            <path
                                                d="M14.56 13.89c-.06 0-.12-.01-.19-.02l-2.91-.74a.75.75 0 01.37-1.45l2.91.74c.4.1.64.51.54.91-.08.34-.38.56-.72.56z">
                                            </path>
                                        </svg>
                                        <span class="ml-3">
                                            Sales Report
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 w-0 overflow-hidden">
            <main class="relative flex-1 overflow-y-auto focus:outline-none">
                <div class="px-10 flex bg-white py-3 justify-between items-center">
                    <div>
                        <h1 class="text-2xl text-indigo-600 font-semibold">INVENTORY MANAGEMENT SYSTEM</h1>
                        <div class="leading-3 flex space-x-1 items-center fill-gray-700 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                                <path
                                    d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM13 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001H11V13.0001H13V19.0001Z">
                                </path>
                            </svg>
                            <h1 class="leading-3 font-medium uppercase text-gray-700">@yield('title')</h1>
                        </div>
                    </div>
                    <div class="flex space-x-4 items-center">

                        <div class="relative group" @click.away="open = false" x-data="{ open: false }">
                            <div :class="{ 'bg-white': open }"
                                class="flex group-hover:bg-white p-1 rounded-xl space-x-1.5 items-center cursor-pointer"
                                @click="open = !open">
                                <img src="{{ asset('images/sample.png') }}" class="h-12 w-12 rounded-full"
                                    alt="">
                                <div>
                                    <h1 class="font-medium text-gray-700">{{ auth()->user()->name }}</h1>
                                    <h1 class="text-xs leading-3">{{ auth()->user()->email }}</h1>
                                </div>
                                <span
                                    class="fill-main transition-transform duration-200 transform group-hover:text-accent rotate-0"
                                    :class="{ 'rotate-180': open, 'rotate-0': !open }">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-7 w-7">
                                        <path d="M12 14L8 10H16L12 14Z"></path>
                                    </svg>
                                </span>
                            </div>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute right-0 z-10 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1" style="display: none;">
                                <a href="/profile" class="block px-4 py-2 text-sm text-gray-500" role="menuitem"
                                    tabindex="-1" id="user-menu-item-0">
                                    Your Profile
                                </a>


                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="#"
                                        onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                        class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1"
                                        id="user-menu-item-2">
                                        Sign out
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 px-10">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>
