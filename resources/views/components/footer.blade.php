@php
    $settings = \App\Models\Setting::first();
    $mainMenu = \App\Models\Menu::getByName('main');
    $footerMenu = \App\Models\Menu::getByName('footer');
@endphp

<footer class="bg-gray-900 text-white">
    <div class="container-custom">
        <div class="py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="mb-6">
                        @if($logo = $settings?->getFirstMediaUrl('logo'))
                            <img src="{{ $logo }}" alt="{{ config('app.name') }}" class="h-12 w-auto mb-4 brightness-0 invert">
                        @else
                            <div class="text-2xl font-bold text-white mb-4">
                                {{ $settings?->getTranslation('site_name', app()->getLocale()) ?? config('app.name') }}
                            </div>
                        @endif
                        <p class="text-gray-300 text-lg leading-relaxed max-w-md">
                            {{ $settings?->getTranslation('hero_subtitle', app()->getLocale()) ?? 'Peşəkar komandamız ilə evinizi və ofisinizi arzularınıza uyğun şəkildə təmir edirik' }}
                        </p>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="space-y-3">
                        @if($settings?->address)
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-primary-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="text-gray-300">{{ $settings->getTranslation('address', app()->getLocale()) }}</span>
                            </div>
                        @endif
                        
                        @if($settings?->phones)
                            @foreach($settings->phones as $phone)
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-primary-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <a href="tel:{{ $phone }}" class="text-gray-300 hover:text-white transition-colors">{{ $phone }}</a>
                                </div>
                            @endforeach
                        @endif
                        
                        @if($settings?->email)
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <a href="mailto:{{ $settings->email }}" class="text-gray-300 hover:text-white transition-colors">{{ $settings->email }}</a>
                            </div>
                        @endif
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-6">{{ __('Sürətli Keçidlər') }}</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors">{{ __('Ana Səhifə') }}</a></li>
                        <li><a href="{{ route('services.index') }}" class="text-gray-300 hover:text-white transition-colors">{{ __('Xidmətlər') }}</a></li>
                        <li><a href="{{ route('projects.index') }}" class="text-gray-300 hover:text-white transition-colors">{{ __('Layihələr') }}</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition-colors">{{ __('Haqqımızda') }}</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors">{{ __('Əlaqə') }}</a></li>
                        <li><a href="{{ route('blog.index') }}" class="text-gray-300 hover:text-white transition-colors">{{ __('Bloq') }}</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-6">{{ __('Xidmətlərimiz') }}</h3>
                    <ul class="space-y-3">
                        @foreach(\App\Models\Service::featured()->ordered()->limit(5)->get() as $service)
                            <li>
                                <a href="{{ route('services.show', $service) }}" class="text-gray-300 hover:text-white transition-colors">
                                    {{ $service->getTranslation('title', app()->getLocale()) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Social Links & Copyright -->
        <div class="border-t border-gray-800 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-gray-400 text-sm">
                    © {{ date('Y') }} {{ $settings?->getTranslation('site_name', app()->getLocale()) ?? config('app.name') }}. {{ __('Bütün hüquqlar qorunur.') }}
                </div>
                
                @if($settings?->social_links)
                    <div class="flex space-x-4">
                        @foreach($settings->social_links as $platform => $url)
                            @if($url)
                                <a href="{{ $url }}" target="_blank" rel="noopener noreferrer" 
                                   class="text-gray-400 hover:text-white transition-colors">
                                    @switch($platform)
                                        @case('facebook')
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                            </svg>
                                            @break
                                        @case('instagram')
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.895 3.708 13.744 3.708 12.447s.49-2.448 1.297-3.323c.875-.807 2.026-1.297 3.323-1.297s2.448.49 3.323 1.297c.807.875 1.297 2.026 1.297 3.323s-.49 2.448-1.297 3.323c-.875.807-2.026 1.297-3.323 1.297z"/>
                                            </svg>
                                            @break
                                        @case('whatsapp')
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.63"/>
                                            </svg>
                                            @break
                                    @endswitch
                                    <span class="sr-only">{{ ucfirst($platform) }}</span>
                                </a>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</footer>