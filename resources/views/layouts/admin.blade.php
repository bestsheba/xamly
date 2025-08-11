{{-- resources/views/layouts/admin.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .rotate-180 {
            transform: rotate(180deg);
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <div id="sidebar"
            class="fixed inset-y-0 left-0 z-50 bg-white shadow-lg transition-all duration-300 ease-in-out">
            <div class="flex items-center justify-between h-16 px-4 border-b">
                <img src="/image/log.png" alt="" class="w-48" srcset="">
                <button id="sidebarCollapseBtn" class="p-2 rounded-md hover:bg-gray-100">
                    <svg class="w-6 h-6 transform transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                    </svg>
                </button>
            </div>
            <nav class="mt-4 px-2">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-4 py-3 mb-1 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-700 group {{ request()->routeIs('admin.dashboard') ? 'bg-blue-50 text-blue-700' : '' }}">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor"
                            class="bi bi-journal-text" viewBox="0 0 16 16">
                            <path
                                d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                            <path
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                            <path
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                        </svg>
                        <span class="ml-3 transition-opacity duration-300 sidebar-text">Dashboard</span>
                    </div>
                </a>
                <div class="mb-1">
                    <button
                        class="w-full flex items-center justify-between px-4 py-3 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-700 group transition-colors dropdown-toggle">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-car-front" viewBox="0 0 16 16">
                                <path
                                    d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276" />
                                <path
                                    d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z" />
                            </svg>
                            <span class="ml-3 transition-opacity duration-300 sidebar-text">Music Photo Gallery</span>
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-300 dropdown-arrow" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pl-4 ml-4 border-l dropdown-menu hidden">
                        <a href="{{ route('admin.images.index') }}"
                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-lg mt-1 {{ request()->routeIs('admin.images.index') ? 'bg-blue-50 text-blue-700' : '' }}">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                </svg>
                                <span class="transition-opacity duration-300 sidebar-text ml-3">Photo Gallery
                                    List</span>
                            </div>
                        </a>
                        <a href="{{ route('admin.images.create') }}"
                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-lg {{ request()->routeIs('admin.images.create') ? 'bg-blue-50 text-blue-700' : '' }}">
                            <div class="flex items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg><span class="transition-opacity duration-300 sidebar-text ml-3">Add Gallery</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="mb-1">
                    <button
                        class="w-full flex items-center justify-between px-4 py-3 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-700 group transition-colors dropdown-toggle">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-car-front" viewBox="0 0 16 16">
                                <path
                                    d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276" />
                                <path
                                    d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z" />
                            </svg>
                            <span class="ml-3 transition-opacity duration-300 sidebar-text">Travel Photo Gallery</span>
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-300 dropdown-arrow" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pl-4 ml-4 border-l dropdown-menu hidden">
                        <a href="{{ route('admin.tgalleries.index') }}"
                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-lg mt-1 {{ request()->routeIs('admin.tgalleries.index') ? 'bg-blue-50 text-blue-700' : '' }}">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                </svg>
                                <span class="transition-opacity duration-300 sidebar-text ml-3">Photo Gallery
                                    List</span>
                            </div>
                        </a>
                        <a href="{{ route('admin.tgalleries.create') }}"
                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-lg {{ request()->routeIs('admin.tgalleries.create') ? 'bg-blue-50 text-blue-700' : '' }}">
                            <div class="flex items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-plus-square"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg><span class="transition-opacity duration-300 sidebar-text ml-3">Add
                                    Gallery</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="mb-1">
                    <button
                        class="w-full flex items-center justify-between px-4 py-3 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-700 group transition-colors dropdown-toggle">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-car-front" viewBox="0 0 16 16">
                                <path
                                    d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276" />
                                <path
                                    d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z" />
                            </svg>
                            <span class="ml-3 transition-opacity duration-300 sidebar-text">Song Gallery</span>
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-300 dropdown-arrow" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pl-4 ml-4 border-l dropdown-menu hidden">
                        <a href="{{ route('admin.songs.index') }}"
                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-lg mt-1 {{ request()->routeIs('admin.songs.index') ? 'bg-blue-50 text-blue-700' : '' }}">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                </svg>
                                <span class="transition-opacity duration-300 sidebar-text ml-3">Song
                                    List</span>
                            </div>
                        </a>
                        <a href="{{ route('admin.songs.create') }}"
                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-lg {{ request()->routeIs('admin.songs.create') ? 'bg-blue-50 text-blue-700' : '' }}">
                            <div class="flex items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-plus-square"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg><span class="transition-opacity duration-300 sidebar-text ml-3">Add
                                    Song</span>
                            </div>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Main Content -->
        <div id="main-content" class="transition-all duration-300 ease-in-out">
            <!-- Top Navigation -->
            <div class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-4 py-3">
                    <div class="flex items-center">
                        <button id="sidebarToggle" class="p-2 rounded-md hover:bg-gray-100 md:hidden">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                    <div x-data="{ isOpen: false }" @click.outside="isOpen = false" class="relative">
                        <button @click="isOpen = !isOpen"
                            class="rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <img src="{{ asset('1.jpg') }}" alt="Profile" class="w-10 h-10 rounded-full">
                        </button>

                        <div x-show="isOpen" x-transition
                            class="absolute right-0 mt-3 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-1">
                            <a href="{{ route('profile.edit') }}"
                                class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <i class="mr-3 icon-user"></i>
                                My Profile
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <i class="mr-3 icon-settings"></i>
                                Setting
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="flex items-center w-full px-4 py-2 text-left hover:bg-gray-100 text-red-600">
                                    <i class="mr-3 icon-logout"></i>
                                    Log out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebarCollapseBtn = document.getElementById('sidebarCollapseBtn');
            const sidebarTitle = document.getElementById('sidebarTitle');
            const sidebarTexts = document.querySelectorAll('.sidebar-text');
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            let isSidebarOpen = true;
            const mobileBreakpoint = 768;

            // Handle dropdown menus
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const dropdownMenu = this.nextElementSibling;
                    const dropdownArrow = this.querySelector('.dropdown-arrow');

                    // Toggle dropdown visibility
                    dropdownMenu.classList.toggle('hidden');
                    dropdownArrow.classList.toggle('rotate-180');

                    // If parent menu item is active
                    if (dropdownMenu.querySelector('.bg-blue-50')) {
                        toggle.classList.add('bg-blue-50', 'text-blue-700');
                    }
                });
            });

            function setCollapsedState() {
                if (isSidebarOpen) {
                    sidebar.style.width = '256px';
                    mainContent.style.marginLeft = '256px';
                    sidebarTitle.style.display = 'block';
                    sidebarTexts.forEach(text => text.style.display = 'inline-block');
                    sidebarCollapseBtn.classList.remove('rotate-180');

                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.add('pl-4', 'ml-4');
                    });
                } else {
                    sidebar.style.width = '64px';
                    mainContent.style.marginLeft = '64px';
                    sidebarTitle.style.display = 'none';
                    sidebarTexts.forEach(text => text.style.display = 'none');
                    sidebarCollapseBtn.classList.add('rotate-180');

                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.remove('pl-4', 'ml-4');
                    });
                }
            }

            function setMobileState() {
                if (isSidebarOpen) {
                    sidebar.classList.remove('-translate-x-full');
                    sidebar.style.width = '256px';
                } else {
                    sidebar.classList.add('-translate-x-full');
                }
                mainContent.style.marginLeft = '0';
            }

            function toggleSidebar() {
                isSidebarOpen = !isSidebarOpen;
                if (window.innerWidth >= mobileBreakpoint) {
                    setCollapsedState();
                } else {
                    setMobileState();
                }
            }

            // Handle window resize
            function handleResize() {
                if (window.innerWidth >= mobileBreakpoint) {
                    sidebar.classList.remove('-translate-x-full');
                    setCollapsedState();
                } else {
                    setMobileState();
                }
            }

            // Initial setup
            handleResize();

            // Event listeners
            sidebarToggle.addEventListener('click', toggleSidebar);
            sidebarCollapseBtn.addEventListener('click', toggleSidebar);
            window.addEventListener('resize', handleResize);

            // Handle clicks outside sidebar on mobile
            document.addEventListener('click', function(event) {
                if (window.innerWidth < mobileBreakpoint) {
                    const isClickInsideSidebar = sidebar.contains(event.target);
                    const isClickInsideToggle = sidebarToggle.contains(event.target);

                    if (!isClickInsideSidebar && !isClickInsideToggle && isSidebarOpen) {
                        toggleSidebar();
                    }
                }
            });

            // Keep parent menu items active if child is active
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                if (menu.querySelector('.bg-blue-50')) {
                    const parentToggle = menu.previousElementSibling;
                    parentToggle.classList.add('bg-blue-50', 'text-blue-700');
                    menu.classList.remove('hidden');
                    parentToggle.querySelector('.dropdown-arrow').classList.add('rotate-180');
                }
            });
        });
    </script>
</body>

</html>
