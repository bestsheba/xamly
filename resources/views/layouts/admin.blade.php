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
                <a href="{{ route('admin.quote.index') }}"
                    class="flex items-center px-4 py-3 mb-1 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-700 group {{ request()->routeIs('admin.quote.index') ? 'bg-blue-50 text-blue-700' : '' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="ml-3 transition-opacity duration-300 sidebar-text">Booking List</span>
                    </div>
                </a>
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
                            <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2 hover:bg-gray-100">
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
