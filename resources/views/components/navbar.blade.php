<nav x-data="navbar" 
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
     :class="{ 'navbar-shadow bg-white': isScrolled, 'bg-white/90 backdrop-blur-sm': !isScrolled }">
    <div class="container-custom">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    @if($logo = \App\Models\Setting::getValue('logo'))
                        <img src="{{ $logo }}" alt="{{ config('app.name') }}" class="h-8 lg:h-10 w-auto">
                    @else
                        <div class="text-xl lg:text-2xl font-bold text-gradient">
                            {{ \App\Models\Setting::getValue('site_name') ?? config('app.name') }}
                        </div>
                    @endif
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="{{ route('home') }}" 
                       class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-primary-600' : '' }}">
                        {{ __('Ana Səhifə') }}
                    </a>
                    <a href="{{ route('services.index') }}" 
                       class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('services.*') ? 'text-primary-600' : '' }}">
                        {{ __('Xidmətlər') }}
                    </a>
                    <a href="{{ route('projects.index') }}" 
                       class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('projects.*') ? 'text-primary-600' : '' }}">
                        {{ __('Layihələr') }}
                    </a>
                    <a href="{{ route('partners.index') }}" 
                       class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('partners.*') ? 'text-primary-600' : '' }}">
                        {{ __('Tərəfdaşlar') }}
                    </a>
                    <a href="{{ route('about') }}" 
                       class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('about') ? 'text-primary-600' : '' }}">
                        {{ __('Haqqımızda') }}
                    </a>
                    <a href="{{ route('blog.index') }}" 
                       class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('blog.*') ? 'text-primary-600' : '' }}">
                        {{ __('Bloq') }}
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="btn-primary">
                        {{ __('Əlaqə') }}
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button @click="toggleMenu()" 
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-primary-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
                    <svg class="h-6 w-6" :class="{ 'hidden': isOpen, 'block': !isOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" :class="{ 'block': isOpen, 'hidden': !isOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div class="lg:hidden mobile-menu" :class="{ 'open': isOpen, 'closed': !isOpen }">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white h-full overflow-y-auto">
            <div class="flex items-center justify-between p-4 border-b">
                <div class="text-lg font-bold text-gradient">
                    {{ \App\Models\Setting::getValue('site_name') ?? config('app.name') }}
                </div>
                <button @click="closeMenu()" class="p-2 rounded-md text-gray-700 hover:text-primary-600">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="space-y-2 p-4">
                <a href="{{ route('home') }}" @click="closeMenu()" 
                   class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-md {{ request()->routeIs('home') ? 'text-primary-600 bg-primary-50' : '' }}">
                    {{ __('Ana Səhifə') }}
                </a>
                <a href="{{ route('services.index') }}" @click="closeMenu()" 
                   class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-md {{ request()->routeIs('services.*') ? 'text-primary-600 bg-primary-50' : '' }}">
                    {{ __('Xidmətlər') }}
                </a>
                <a href="{{ route('projects.index') }}" @click="closeMenu()" 
                   class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-md {{ request()->routeIs('projects.*') ? 'text-primary-600 bg-primary-50' : '' }}">
                    {{ __('Layihələr') }}
                </a>
                <a href="{{ route('partners.index') }}" @click="closeMenu()" 
                   class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-md {{ request()->routeIs('partners.*') ? 'text-primary-600 bg-primary-50' : '' }}">
                    {{ __('Tərəfdaşlar') }}
                </a>
                <a href="{{ route('about') }}" @click="closeMenu()" 
                   class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-md {{ request()->routeIs('about') ? 'text-primary-600 bg-primary-50' : '' }}">
                    {{ __('Haqqımızda') }}
                </a>
                <a href="{{ route('blog.index') }}" @click="closeMenu()" 
                   class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-md {{ request()->routeIs('blog.*') ? 'text-primary-600 bg-primary-50' : '' }}">
                    {{ __('Bloq') }}
                </a>
                <a href="{{ route('contact') }}" @click="closeMenu()" 
                   class="block w-full text-center btn-primary mt-4">
                    {{ __('Əlaqə') }}
                </a>
            </div>
        </div>
    </div>
</nav>