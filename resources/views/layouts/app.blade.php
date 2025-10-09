<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cəlaloğlu İnşaat') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('navbar', () => ({
                isOpen: false,
                
                toggleMenu() {
                    this.isOpen = !this.isOpen;
                },
                
                closeMenu() {
                    this.isOpen = false;
                }
            }));
        });
    </script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50">
        <!-- Navigation -->
        <nav id="navbar" class="fixed w-full top-0 z-50 transition-all duration-300" x-data="navbar">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="flex items-center">
                            <img src="{{ asset('images/logo.png') }}" alt="Cəlaloğlu İnşaat Logo" class="h-16 w-auto object-contain hover:scale-105 transition-transform duration-300">
                        </a>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="{{ route('home') }}" class="nav-link text-white hover:text-[#1E9BF0] font-medium transition-colors duration-200 relative group">
                            {{ __('navigation.home') }}
                            <span class="nav-underline absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-200 group-hover:w-full"></span>
                        </a>
                        <a href="/xidmetler" class="nav-link text-white hover:text-[#1E9BF0] font-medium transition-colors duration-200 relative group">
                            {{ __('navigation.services') }}
                            <span class="nav-underline absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-200 group-hover:w-full"></span>
                        </a>
                        <a href="/layiheler" class="nav-link text-white hover:text-[#1E9BF0] font-medium transition-colors duration-200 relative group">
                            {{ __('navigation.projects') }}
                            <span class="nav-underline absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-200 group-hover:w-full"></span>
                        </a>
                        <a href="/terefdaslar" class="nav-link text-white hover:text-[#1E9BF0] font-medium transition-colors duration-200 relative group">
                            {{ __('navigation.partners') }}
                            <span class="nav-underline absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-200 group-hover:w-full"></span>
                        </a>
                        <a href="/haqqimizda" class="nav-link text-white hover:text-[#1E9BF0] font-medium transition-colors duration-200 relative group">
                            {{ __('navigation.about') }}
                            <span class="nav-underline absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-200 group-hover:w-full"></span>
                        </a>
                        <a href="/elaqe" class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] hover:from-[#0F7BC7] hover:to-[#6B7280] text-white font-medium py-3 px-6 rounded-full transition-all duration-200 transform hover:scale-105 shadow-lg">
                            {{ __('navigation.contact') }}
                        </a>
                        
                        <!-- Language Switcher -->
                        <x-language-switcher />
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button id="mobile-menu-btn" @click="toggleMenu()" class="text-white hover:text-[#1E9BF0] focus:outline-none">
                            <svg x-show="!isOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                            <svg x-show="isOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" x-show="isOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="md:hidden bg-black/20 backdrop-blur-md border-t border-white/20">
                    <div class="px-4 py-6 space-y-4">
                        <a href="{{ route('home') }}" class="mobile-nav-link block text-white hover:text-[#1E9BF0] font-medium transition-colors duration-200" @click="closeMenu()">{{ __('navigation.home') }}</a>
                        <a href="/xidmetler" class="mobile-nav-link block text-white hover:text-[#1E9BF0] font-medium transition-colors duration-200" @click="closeMenu()">{{ __('navigation.services') }}</a>
                        <a href="/layiheler" class="mobile-nav-link block text-white hover:text-[#1E9BF0] font-medium transition-colors duration-200" @click="closeMenu()">{{ __('navigation.projects') }}</a>
                        <a href="/terefdaslar" class="mobile-nav-link block text-white hover:text-[#1E9BF0] font-medium transition-colors duration-200" @click="closeMenu()">{{ __('navigation.partners') }}</a>
                        <a href="/haqqimizda" class="mobile-nav-link block text-white hover:text-[#1E9BF0] font-medium transition-colors duration-200" @click="closeMenu()">{{ __('navigation.about') }}</a>
                        <a href="/elaqe" class="block bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] text-white font-medium py-3 px-6 rounded-full text-center transition-all duration-200" @click="closeMenu()">{{ __('navigation.contact') }}</a>
                        
                        <!-- Mobile Language Switcher -->
                        <div class="pt-4 border-t border-white/20">
                            <x-language-switcher />
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white">
            <!-- Main Footer Content -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div class="lg:col-span-1">
                        <div class="flex items-center mb-6">
                            <img src="{{ asset('images/logo.png') }}" alt="Cəlaloğlu İnşaat Logo" class="h-12 w-auto object-contain mr-3">
                        </div>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            {{ __('common.company_description') }}
                        </p>
                        <!-- Social Media -->
                        <div class="flex space-x-4">
                            <a href="https://instagram.com/calaloglu_inshaat" target="_blank" class="w-10 h-10 bg-[#1E9BF0] hover:bg-[#0F7BC7] rounded-full flex items-center justify-center transition-colors duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a href="https://www.tiktok.com/@celaloglu.construction" target="_blank" class="w-10 h-10 bg-[#1E9BF0] hover:bg-[#0F7BC7] rounded-full flex items-center justify-center transition-colors duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-lg font-semibold mb-6 text-[#1E9BF0]">{{ __('common.quick_links') }}</h3>
                        <ul class="space-y-3">
                            <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('navigation.home') }}</a></li>
                            <li><a href="/haqqimizda" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('navigation.about') }}</a></li>
                            <li><a href="/xidmetler" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('navigation.services') }}</a></li>
                            <li><a href="/layiheler" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('navigation.projects') }}</a></li>
                            <li><a href="/terefdaslar" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('navigation.partners') }}</a></li>
                            <li><a href="/blog" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('navigation.blog') }}</a></li>
                        </ul>
                    </div>

                    <!-- Services -->
                    <div>
                        <h3 class="text-lg font-semibold mb-6 text-[#1E9BF0]">{{ __('common.our_services') }}</h3>
                        <ul class="space-y-3">
                            <li><a href="/xidmetler" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('common.house_construction') }}</a></li>
                            <li><a href="/xidmetler" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('common.villa_construction') }}</a></li>
                            <li><a href="/xidmetler" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('common.renovation_works') }}</a></li>
                            <li><a href="/xidmetler" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('common.design_services') }}</a></li>
                            <li><a href="/xidmetler" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('common.project_preparation') }}</a></li>
                            <li><a href="/xidmetler" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('common.consultation_service') }}</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-lg font-semibold mb-6 text-[#1E9BF0]">{{ __('common.contact_info') }}</h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-[#1E9BF0] mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <div>
                                    <p class="text-gray-300">{{ __('common.address_line1') }}</p>
                                    <p class="text-gray-300">{{ __('common.address_line2') }}</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#1E9BF0] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <div>
                                    <a href="tel:+994501234567" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">+994 50 123 45 67</a>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#1E9BF0] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <div>
                                    <a href="mailto:info@celalogluinsaat.az" class="text-gray-300 hover:text-[#1E9BF0] transition-colors duration-300">info@celalogluinsaat.az</a>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#1E9BF0] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <div>
                                    <p class="text-gray-300">{{ __('common.working_hours') }}</p>
                                    <p class="text-gray-300">{{ __('common.saturday_hours') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                    <div class="md:flex md:items-center md:justify-between">
                        <div class="text-center md:text-left mb-4 md:mb-0">
                            <p class="text-gray-400 text-sm">
                                © {{ date('Y') }} {{ __('common.company_name') }}. {{ __('common.all_rights_reserved') }}
                            </p>
                        </div>
                        <div class="flex flex-wrap justify-center md:justify-end space-x-6 text-sm">
                            <a href="/privacy-policy" class="text-gray-400 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('navigation.privacy_policy') }}</a>
                            <a href="/terms-of-service" class="text-gray-400 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('navigation.terms_of_service') }}</a>
                            <a href="/sitemap" class="text-gray-400 hover:text-[#1E9BF0] transition-colors duration-300">{{ __('navigation.sitemap') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll to Top Button -->
        <button id="scrollToTop" class="fixed bottom-6 right-6 bg-[#1E9BF0] hover:bg-[#0F7BC7] text-white w-12 h-12 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 opacity-0 invisible z-50 flex items-center justify-center" onclick="scrollToTop()">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
            </svg>
        </button>
    </div>

    <script>
        // Scroll to Top functionality
        window.addEventListener('scroll', function() {
            const scrollToTopBtn = document.getElementById('scrollToTop');
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                scrollToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                scrollToTopBtn.classList.add('opacity-0', 'invisible');
                scrollToTopBtn.classList.remove('opacity-100', 'visible');
            }
        });

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Dynamic Navbar functionality
        function updateNavbar() {
            const navbar = document.getElementById('navbar');
            const navLinks = document.querySelectorAll('.nav-link');
            const navUnderlines = document.querySelectorAll('.nav-underline');
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
            
            if (!navbar) return;
            
            const scrollY = window.pageYOffset;
            const isHomePage = window.location.pathname === '/' || window.location.pathname === '/home';
            
            // Use viewport height as fallback - most hero sections are 100vh
            const heroHeight = window.innerHeight;
            
            if (isHomePage) {
                // Home page: navbar blur starts after 50px scroll
                if (scrollY > 50) {
                    // Remove all possible background classes
                    navbar.classList.remove('bg-transparent', 'bg-white', 'bg-white/95', 'bg-blue-600/90');
                    navbar.classList.add('backdrop-blur-md', 'shadow-lg');
                    // Force blue background with !important
                    navbar.style.setProperty('background-color', 'rgba(26, 71, 181, 0.9)', 'important');
                } else {
                    // Remove all background classes and effects
                    navbar.classList.remove('backdrop-blur-md', 'shadow-lg', 'bg-white', 'bg-white/95', 'bg-blue-600/90');
                    navbar.classList.add('bg-transparent');
                    navbar.style.setProperty('background-color', 'transparent', 'important');
                }
            } else {
                // Other pages: navbar is always blue
                navbar.classList.remove('bg-transparent', 'bg-white', 'bg-white/95', 'bg-blue-600/90');
                navbar.classList.add('backdrop-blur-md', 'shadow-lg');
                navbar.style.setProperty('background-color', 'rgba(26, 71, 181, 0.9)', 'important');
            }
            
            // Text color logic
            if (isHomePage) {
                // Home page: text color changes based on scroll position
                if (scrollY < heroHeight * 0.9) {
                    // In blue section - white text
                    navLinks.forEach(link => {
                        link.style.color = 'white';
                        link.classList.remove('text-gray-700', 'hover:text-cyan-300');
                        link.classList.add('text-white', 'hover:text-[#1E9BF0]');
                    });
                    
                    navUnderlines.forEach(underline => {
                        underline.classList.remove('bg-[#1E9BF0]');
                        underline.classList.add('bg-white');
                    });
                    
                    if (mobileMenuBtn) {
                        mobileMenuBtn.style.color = 'white';
                        mobileMenuBtn.classList.remove('text-gray-700', 'hover:text-cyan-300');
                        mobileMenuBtn.classList.add('text-white', 'hover:text-[#1E9BF0]');
                    }
                    
                    // Mobile menu styling for hero section
                    if (mobileMenu) {
                        mobileMenu.classList.remove('bg-white', 'border-gray-200');
                        mobileMenu.classList.add('bg-black/20', 'backdrop-blur-md', 'border-white/20');
                    }
                    
                    mobileNavLinks.forEach(link => {
                        link.style.color = 'white';
                        link.classList.remove('text-gray-700', 'hover:text-cyan-300');
                        link.classList.add('text-white', 'hover:text-[#1E9BF0]');
                    });
                } else {
                    // After blue section - white text on blue navbar
                    navLinks.forEach(link => {
                        link.style.color = 'white';
                        link.classList.remove('text-gray-700', 'hover:text-cyan-300');
                        link.classList.add('text-white', 'hover:text-[#1E9BF0]');
                    });
                    
                    navUnderlines.forEach(underline => {
                        underline.classList.remove('bg-[#1E9BF0]');
                        underline.classList.add('bg-white');
                    });
                    
                    if (mobileMenuBtn) {
                        mobileMenuBtn.style.color = 'white';
                        mobileMenuBtn.classList.remove('text-gray-700', 'hover:text-cyan-300');
                        mobileMenuBtn.classList.add('text-white', 'hover:text-[#1E9BF0]');
                    }
                    
                    // Mobile menu styling
                    if (mobileMenu) {
                        mobileMenu.classList.remove('bg-black/20', 'backdrop-blur-md', 'border-white/20');
                        mobileMenu.classList.add('bg-white', 'border-gray-200');
                    }
                    
                    mobileNavLinks.forEach(link => {
                        link.style.color = '#374151'; // gray-700 for mobile menu
                        link.classList.remove('text-white', 'hover:text-cyan-300');
                        link.classList.add('text-gray-700', 'hover:text-[#1E9BF0]');
                    });
                }
            } else {
                // Other pages: always white text on blue navbar
                navLinks.forEach(link => {
                    link.style.color = 'white';
                    link.classList.remove('text-gray-700', 'hover:text-cyan-300');
                    link.classList.add('text-white', 'hover:text-[#1E9BF0]');
                });
                
                navUnderlines.forEach(underline => {
                    underline.classList.remove('bg-[#1E9BF0]');
                    underline.classList.add('bg-white');
                });
                
                if (mobileMenuBtn) {
                    mobileMenuBtn.style.color = 'white';
                    mobileMenuBtn.classList.remove('text-gray-700', 'hover:text-cyan-300');
                    mobileMenuBtn.classList.add('text-white', 'hover:text-[#1E9BF0]');
                }
                
                // Mobile menu styling for other pages
                if (mobileMenu) {
                    mobileMenu.classList.remove('bg-black/20', 'backdrop-blur-md', 'border-white/20');
                    mobileMenu.classList.add('bg-white', 'border-gray-200');
                }
                
                mobileNavLinks.forEach(link => {
                    link.style.color = '#374151'; // gray-700 for mobile menu
                    link.classList.remove('text-white', 'hover:text-cyan-300');
                    link.classList.add('text-gray-700', 'hover:text-[#1E9BF0]');
                });
            }
        }

        // Initialize navbar on page load and scroll
        window.addEventListener('scroll', updateNavbar);
        window.addEventListener('load', () => {
            // Small delay to ensure proper initialization
            setTimeout(updateNavbar, 100);
        });
        document.addEventListener('DOMContentLoaded', () => {
            // Ensure navbar starts in correct state
            setTimeout(updateNavbar, 50);
        });
    </script>
</body>
</html>