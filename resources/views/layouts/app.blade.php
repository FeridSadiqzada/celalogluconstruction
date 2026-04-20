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
                        <a href="/elaqe" class="group inline-flex items-center gap-2 rounded-full bg-white pl-6 pr-2 py-2 text-[#08333e] shadow-md transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg">
                            <span class="text-xs font-semibold uppercase tracking-wide">{{ __('navigation.contact') }}</span>
                            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-[#08333e] text-white transition group-hover:translate-x-0.5">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </span>
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
                        <a href="/elaqe" class="block text-center rounded-full bg-white text-[#08333e] font-semibold py-3 px-4 transition-all duration-200" @click="closeMenu()">{{ __('navigation.contact') }}</a>
                        
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

        <script>document.documentElement.classList.add('footer-anim-enabled');</script>
        <!-- Footer -->
        <footer class="site-footer relative overflow-hidden bg-[#002b36] text-white">
            <div class="pointer-events-none absolute -right-24 top-0 h-[420px] w-[420px] rotate-12 opacity-[0.09]" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 36px, rgba(255,255,255,0.08) 36px, rgba(255,255,255,0.08) 72px);"></div>
            <div class="pointer-events-none absolute right-8 top-16 h-48 w-48 rounded-3xl border border-white/[0.07] rotate-45 opacity-40"></div>
            <div class="pointer-events-none absolute right-24 top-28 h-36 w-36 rounded-2xl border border-white/[0.05] rotate-12 opacity-50"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 lg:pt-20 pb-12 lg:pb-14">
                <div class="grid gap-14 lg:grid-cols-12 lg:gap-12 xl:gap-16">
                    <div class="lg:col-span-4 space-y-8" data-footer-reveal>
                        <a href="{{ route('home') }}" class="inline-block max-w-[240px] transition-opacity hover:opacity-90">
                            <img src="{{ asset('images/logo.png') }}" alt="{{ __('common.company_name') }}" width="220" height="48" class="h-10 w-auto max-h-10 object-contain object-left brightness-0 invert opacity-95">
                        </a>
                        <div class="flex flex-wrap gap-3">
                            <a href="https://instagram.com/calaloglu_inshaat" target="_blank" rel="noopener noreferrer" class="footer-social-pill">{{ __('common.social_instagram') }}</a>
                            <a href="#" class="footer-social-pill" rel="noopener noreferrer">{{ __('common.social_facebook') }}</a>
                            <a href="#" class="footer-social-pill" rel="noopener noreferrer">{{ __('common.social_linkedin') }}</a>
                        </div>
                        <a href="https://www.tiktok.com/@celaloglu.construction" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-[11px] font-medium uppercase tracking-wider text-white/45 transition hover:text-white/90">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                            TikTok
                        </a>
                    </div>

                    <div class="lg:col-span-8 grid grid-cols-2 gap-y-10 gap-x-8 sm:grid-cols-2 lg:grid-cols-4 lg:gap-x-6">
                        <nav class="footer-nav-col footer-delay-1 space-y-4" data-footer-reveal aria-label="{{ __('common.footer_col_company') }}">
                            <p class="text-sm font-bold text-white">{{ __('common.footer_col_company') }}</p>
                            <ul class="space-y-3 text-[11px] font-semibold uppercase tracking-[0.18em] text-white/65">
                                <li><a href="/haqqimizda" class="transition hover:text-white">{{ __('common.footer_link_about') }}</a></li>
                                <li><a href="/haqqimizda" class="transition hover:text-white">{{ __('common.footer_link_team') }}</a></li>
                                <li><a href="/xidmetler" class="transition hover:text-white">{{ __('common.footer_link_pricing') }}</a></li>
                            </ul>
                        </nav>
                        <nav class="footer-nav-col footer-delay-2 space-y-4" data-footer-reveal aria-label="{{ __('common.footer_col_services') }}">
                            <p class="text-sm font-bold text-white">{{ __('common.footer_col_services') }}</p>
                            <ul class="space-y-3 text-[11px] font-semibold uppercase tracking-[0.18em] text-white/65">
                                <li><a href="/xidmetler" class="transition hover:text-white">{{ __('common.footer_link_welding') }}</a></li>
                                <li><a href="/xidmetler" class="transition hover:text-white">{{ __('common.footer_link_general_building') }}</a></li>
                                <li><a href="/xidmetler" class="transition hover:text-white">{{ __('common.footer_link_interior') }}</a></li>
                            </ul>
                        </nav>
                        <nav class="footer-nav-col footer-delay-3 space-y-4" data-footer-reveal aria-label="{{ __('common.footer_col_projects') }}">
                            <p class="text-sm font-bold text-white">{{ __('common.footer_col_projects') }}</p>
                            <ul class="space-y-3 text-[11px] font-semibold uppercase tracking-[0.18em] text-white/65">
                                <li><a href="{{ route('projects.index') }}" class="transition hover:text-white">{{ __('common.footer_link_project_1') }}</a></li>
                                <li><a href="{{ route('projects.index') }}" class="transition hover:text-white">{{ __('common.footer_link_project_2') }}</a></li>
                                <li><a href="{{ route('projects.index') }}" class="transition hover:text-white">{{ __('common.footer_link_project_3') }}</a></li>
                            </ul>
                        </nav>
                        <nav class="footer-nav-col footer-delay-4 space-y-4" data-footer-reveal aria-label="{{ __('common.footer_col_news') }}">
                            <p class="text-sm font-bold text-white">{{ __('common.footer_col_news') }}</p>
                            <ul class="space-y-3 text-[11px] font-semibold uppercase tracking-[0.18em] text-white/65">
                                <li><a href="{{ route('blog.index') }}" class="transition hover:text-white">{{ __('common.footer_link_news_1') }}</a></li>
                                <li><a href="{{ route('blog.index') }}" class="transition hover:text-white">{{ __('common.footer_link_news_2') }}</a></li>
                                <li><a href="{{ route('blog.index') }}" class="transition hover:text-white">{{ __('common.footer_link_news_3') }}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
<!-- 
                <div class="mt-14 lg:mt-16 border-t border-white/10 pt-12 lg:pt-14" data-footer-reveal>
                    <h3 class="text-xl font-bold tracking-tight text-white sm:text-2xl">{{ __('common.footer_newsletter_title') }}</h3>
                    <form action="{{ route('contact') }}" method="get" class="mt-8 max-w-xl">
                        <div class="footer-newsletter-field flex flex-wrap items-end gap-x-6 gap-y-4 border-b border-white/35 pb-3 transition-colors duration-300 focus-within:border-teal-300/90">
                            <label class="sr-only" for="footer-email">{{ __('common.footer_email_placeholder') }}</label>
                            <input id="footer-email" name="email" type="email" autocomplete="email" required placeholder="{{ __('common.footer_email_placeholder') }}" class="footer-newsletter-input min-w-0 flex-1 bg-transparent py-2 text-base text-white placeholder:text-white/40 focus:outline-none focus:ring-0 sm:min-w-[240px]">
                            <button type="submit" class="group/footer-submit inline-flex shrink-0 items-center gap-2 py-2 text-[11px] font-semibold uppercase tracking-[0.22em] text-white transition hover:text-teal-200">
                                {{ __('common.footer_submit') }}
                                <svg class="h-4 w-4 transition-transform duration-300 group-hover/footer-submit:translate-x-0.5 group-hover/footer-submit:translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7m0 0H7m10 0v10"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div> -->
            </div>

            <div class="relative z-10 border-t border-white/10 bg-black/20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-7">
                    <div class="flex flex-col items-center gap-6 md:flex-row md:justify-between md:gap-8">
                        <p class="order-2 text-center text-[10px] font-semibold uppercase tracking-[0.28em] text-white/45 md:order-1 md:text-left">
                            © {{ date('Y') }} {{ __('common.company_name') }}. {{ __('common.all_rights_reserved') }}
                        </p>
                        <div class="order-1 flex flex-wrap justify-center gap-x-8 gap-y-2 text-[10px] font-semibold uppercase tracking-wider text-white/45 md:order-2">
                            <a href="/privacy-policy" class="transition hover:text-white">{{ __('navigation.privacy_policy') }}</a>
                            <a href="/terms-of-service" class="transition hover:text-white">{{ __('navigation.terms_of_service') }}</a>
                            <a href="/sitemap" class="transition hover:text-white">{{ __('navigation.sitemap') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            (function () {
                var footer = document.querySelector('.site-footer');
                if (!footer || !('IntersectionObserver' in window)) {
                    if (footer) footer.classList.add('is-footer-visible');
                    return;
                }
                if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                    footer.classList.add('is-footer-visible');
                    return;
                }
                var io = new IntersectionObserver(function (entries) {
                    entries.forEach(function (e) {
                        if (!e.isIntersecting) return;
                        footer.classList.add('is-footer-visible');
                        io.disconnect();
                    });
                }, { threshold: 0.06, rootMargin: '0px 0px 32px 0px' });
                io.observe(footer);
            })();
        </script>

        <!-- Scroll to Top Button -->
        <button id="scrollToTop" class="fixed bottom-6 right-6 bg-[#08333e] hover:bg-[#0a4f5e] text-white w-12 h-12 rounded-full shadow-lg shadow-black/25 ring-1 ring-white/10 hover:shadow-xl transition-all duration-300 transform hover:scale-105 opacity-0 invisible z-50 flex items-center justify-center" onclick="scrollToTop()">
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
                    navbar.style.setProperty('background-color', 'rgba(8, 51, 62, 0.94)', 'important');
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
                navbar.style.setProperty('background-color', 'rgba(8, 51, 62, 0.94)', 'important');
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