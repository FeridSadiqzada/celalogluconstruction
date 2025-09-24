@extends('layouts.app')

@section('content')
<style>
.carousel-slide {
    transition: opacity 2s ease-in-out, transform 20s ease-in-out;
    background-attachment: fixed;
}

.carousel-slide.active {
    transform: scale(1.02);
}

/* Ensure proper centering for 4:3 images on wide screens */
@media (min-aspect-ratio: 16/9) {
    .carousel-slide {
        background-size: cover !important;
        background-position: center center !important;
    }
}

/* For mobile devices */
@media (max-width: 768px) {
    .carousel-slide {
        background-size: cover !important;
        background-position: center center !important;
        background-attachment: scroll;
    }
}
</style>
<div class="relative">
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden py-8 md:py-12">
        <!-- Image Carousel Background -->
        <div class="absolute inset-0">
            <!-- Carousel Images -->
            <div class="carousel-slide absolute inset-0 opacity-100 transition-opacity duration-2000 ease-in-out" 
                 style="background-image: url('{{ asset('images/carousel1.jpg') }}'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="absolute inset-0 bg-black/40"></div>
            </div>
            <div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-2000 ease-in-out" 
                 style="background-image: url('{{ asset('images/carousel2.jpg') }}'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="absolute inset-0 bg-black/40"></div>
            </div>
            <div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-2000 ease-in-out" 
                 style="background-image: url('{{ asset('images/carousel3.jpg') }}'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="absolute inset-0 bg-black/40"></div>
            </div>
            <div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-2000 ease-in-out" 
                 style="background-image: url('{{ asset('images/carousel4.jpg') }}'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="absolute inset-0 bg-black/40"></div>
            </div>
            <div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-2000 ease-in-out" 
                 style="background-image: url('{{ asset('images/carousel5.jpg') }}'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="absolute inset-0 bg-black/40"></div>
            </div>
            
            <!-- Subtle Floating Elements -->
            <div class="absolute top-20 right-20 w-16 h-16 bg-white/5 rounded-full animate-pulse"></div>
            <div class="absolute bottom-20 left-20 w-12 h-12 bg-white/5 rounded-full animate-pulse"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center text-white py-4 md:py-8">
            <!-- Main Content -->
            <div class="animate-fade-in-up">
                <p class="text-xl md:text-2xl mb-16 max-w-3xl mx-auto text-white/90 leading-relaxed font-light">
                    Keyfiyyətli tikinti xidmətləri ilə arzularınızı gerçəkləşdiririk
                </p>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-20 animate-fade-in-up animation-delay-300">
                <a href="#services" class="group bg-transparent border-2 border-white hover:bg-white hover:text-[#1E9BF0] font-semibold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-3">
                    <svg class="w-5 h-5 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Xidmətlərimizə Bax
                </a>
                <a href="/elaqe" class="group bg-transparent border-2 border-white hover:bg-white hover:text-[#1E9BF0] font-semibold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-3">
                    <svg class="w-5 h-5 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Pulsuz Məsləhət
                </a>
            </div>

            <!-- Stats -->
            <div id="stats-section" class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-5xl mx-auto animate-fade-in-up animation-delay-500">
                <div class="text-center bg-white/10 backdrop-blur-sm rounded-2xl py-8 px-6 border border-white/20">
                    <div class="text-5xl md:text-6xl font-bold text-white mb-3">
                        <span class="counter" data-target="15">0</span>+
                    </div>
                    <div class="text-white/80 text-lg font-medium">İl Təcrübə</div>
                </div>
                <div class="text-center bg-white/10 backdrop-blur-sm rounded-2xl py-8 px-6 border border-white/20">
                    <div class="text-5xl md:text-6xl font-bold text-white mb-3">
                        <span class="counter" data-target="500">0</span>+
                    </div>
                    <div class="text-white/80 text-lg font-medium">Tamamlanmış Layihə</div>
                </div>
                <div class="text-center bg-white/10 backdrop-blur-sm rounded-2xl py-8 px-6 border border-white/20">
                    <div class="text-5xl md:text-6xl font-bold text-white mb-3">
                        <span class="counter" data-target="100">0</span>%
                    </div>
                    <div class="text-white/80 text-lg font-medium">Müştəri Məmnuniyyəti</div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#services" class="text-white hover:text-cyan-300 transition-colors duration-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </a>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section id="services" class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Bizim <span class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] bg-clip-text text-transparent">Xidmətlərimiz</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Peşəkar komandamız ilə keyfiyyətli tikinti xidmətləri təqdim edirik
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Ev Tikintisi -->
                <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Ev Tikintisi</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Müasir texnologiyalar və keyfiyyətli materiallarla fərdi evlərin tikintisi. Layihədən açar-təslim həllərinə qədər.
                    </p>
                    <a href="/xidmetler" class="inline-flex items-center text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold group-hover:gap-3 gap-2 transition-all duration-300">
                        Ətraflı
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Villa Tikintisi -->
                <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Villa Tikintisi</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Lüks villa layihələri və tikintisi. Ekskluziv dizayn həlləri və premium materiallarla.
                    </p>
                    <a href="/xidmetler" class="inline-flex items-center text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold group-hover:gap-3 gap-2 transition-all duration-300">
                        Ətraflı
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Təmir İşləri -->
                <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Təmir İşləri</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Kapital təmir, yenidənqurma və bərpa işləri. Köhnə binaların müasir standartlara uyğunlaşdırılması.
                    </p>
                    <a href="/xidmetler" class="inline-flex items-center text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold group-hover:gap-3 gap-2 transition-all duration-300">
                        Ətraflı
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Preview Section -->
    <section class="py-20 lg:py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Son <span class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] bg-clip-text text-transparent">Layihələrimiz</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Tamamladığımız uğurlu layihələrdən nümunələr
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Project 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 bg-gray-100 overflow-hidden">
                        <img src="{{ asset('images/baku.jpg') }}" alt="Müasir Villa - Bakı" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Müasir Villa - Bakı</h3>
                        <p class="text-gray-600 mb-4">350 m² sahədə müasir villa tikintisi. Premium materiallar və ağıllı ev sistemləri.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">2024</span>
                            <a href="/layiheler" class="text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold">Ətraflı →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 bg-gray-100 overflow-hidden">
                        <img src="{{ asset('images/referans.jpg') }}" alt="Yaşayış Kompleksi - Sumqayıt" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Yaşayış Kompleksi - Sumqayıt</h3>
                        <p class="text-gray-600 mb-4">24 mənzilli yaşayış kompleksi. Müasir infrastruktur və yaşıl sahələr.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">2023</span>
                            <a href="/layiheler" class="text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold">Ətraflı →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 bg-gray-100 overflow-hidden">
                        <img src="{{ asset('images/ofis.jpg') }}" alt="Ofis Binası - Gəncə" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Ofis Binası - Gəncə</h3>
                        <p class="text-gray-600 mb-4">5 mərtəbəli müasir ofis binası. Enerji səmərəli həllər və müasir dizayn.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">2023</span>
                            <a href="/layiheler" class="text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold">Ətraflı →</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="/layiheler" class="bg-[#1E9BF0] hover:bg-[#0F7BC7] text-white font-semibold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-3">
                    Bütün Layihələri Gör
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Partners Preview Section -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Bizim <span class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] bg-clip-text text-transparent">Tərəfdaşlarımız</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Keyfiyyətli materiallar və xidmətlər üçün etibarlı tərəfdaşlarımız
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center mb-12">
                <!-- Partner logos placeholder -->
                <div class="bg-gray-100 rounded-xl p-6 flex items-center justify-center h-24 hover:bg-gray-200 transition-colors duration-300">
                    <span class="text-gray-500 font-medium">Partner 1</span>
                </div>
                <div class="bg-gray-100 rounded-xl p-6 flex items-center justify-center h-24 hover:bg-gray-200 transition-colors duration-300">
                    <span class="text-gray-500 font-medium">Partner 2</span>
                </div>
                <div class="bg-gray-100 rounded-xl p-6 flex items-center justify-center h-24 hover:bg-gray-200 transition-colors duration-300">
                    <span class="text-gray-500 font-medium">Partner 3</span>
                </div>
                <div class="bg-gray-100 rounded-xl p-6 flex items-center justify-center h-24 hover:bg-gray-200 transition-colors duration-300">
                    <span class="text-gray-500 font-medium">Partner 4</span>
                </div>
                <div class="bg-gray-100 rounded-xl p-6 flex items-center justify-center h-24 hover:bg-gray-200 transition-colors duration-300">
                    <span class="text-gray-500 font-medium">Partner 5</span>
                </div>
                <div class="bg-gray-100 rounded-xl p-6 flex items-center justify-center h-24 hover:bg-gray-200 transition-colors duration-300">
                    <span class="text-gray-500 font-medium">Partner 6</span>
                </div>
            </div>

            <div class="text-center">
                <a href="/terefdaslar" class="text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold inline-flex items-center gap-2">
                    Bütün Tərəfdaşları Gör
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- About Us Preview Section -->
    <section class="py-20 lg:py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        <span class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] bg-clip-text text-transparent">Haqqımızda</span> Qısa Məlumat
                    </h2>
                    <p class="text-xl text-gray-600 mb-6 leading-relaxed">
                        15 ildən artıq təcrübəmizlə Azərbaycanda keyfiyyətli tikinti xidmətləri göstəririk. 
                        Müasir texnologiyalar və peşəkar komandamızla müştərilərimizin arzularını gerçəkləşdiririk.
                    </p>
                    <p class="text-lg text-gray-600 mb-8">
                        Hər layihəyə fərdi yanaşma, vaxtında təhvil və uzunmüddətli zəmanət bizim əsas prinsiplərimizdir.
                    </p>
                    <a href="/haqqimizda" class="bg-[#1E9BF0] hover:bg-[#0F7BC7] text-white font-semibold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-3">
                        Ətraflı Oxu
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                <div id="about-stats" class="grid grid-cols-2 gap-6">
                    <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                        <div class="text-3xl font-bold text-[#1E9BF0] mb-2">
                            <span class="counter" data-target="500">0</span>+
                        </div>
                        <div class="text-gray-600">Tamamlanmış Layihə</div>
                    </div>
                    <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                        <div class="text-3xl font-bold text-[#1E9BF0] mb-2">
                            <span class="counter" data-target="15">0</span>+
                        </div>
                        <div class="text-gray-600">İl Təcrübə</div>
                    </div>
                    <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                        <div class="text-3xl font-bold text-[#1E9BF0] mb-2">
                            <span class="counter" data-target="50">0</span>+
                        </div>
                        <div class="text-gray-600">Peşəkar İşçi</div>
                    </div>
                    <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                        <div class="text-3xl font-bold text-[#1E9BF0] mb-2">
                            <span class="counter" data-target="100">0</span>%
                        </div>
                        <div class="text-gray-600">Müştəri Məmnuniyyəti</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instagram Posts Section -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Instagram <span class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] bg-clip-text text-transparent">Paylaşımlarımız</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                    Güncel layihələrimiz və işlərimizlə bağlı son paylaşımlar
                </p>
                <a href="https://instagram.com/calaloglu_inshaat" target="_blank" class="inline-flex items-center gap-2 text-pink-600 hover:text-pink-700 font-semibold">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    @calaloglu_inshaat
                </a>
            </div>

            <!-- Instagram Posts Grid (Mock) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <!-- Post 1 -->
                <div class="bg-gray-100 rounded-2xl overflow-hidden group cursor-pointer hover:shadow-xl transition-all duration-300">
                    <div class="aspect-square bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </div>
                            <p class="text-gray-500 text-sm">Instagram Post</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-600">Yeni villa layihəmizin tikinti prosesi...</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-xs text-gray-400">2 gün əvvəl</span>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                </svg>
                                <span class="text-xs text-gray-500">124</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="bg-gray-100 rounded-2xl overflow-hidden group cursor-pointer hover:shadow-xl transition-all duration-300">
                    <div class="aspect-square bg-gradient-to-br from-blue-100 to-cyan-100 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </div>
                            <p class="text-gray-500 text-sm">Instagram Post</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-600">Komandamızın işdə görüntüləri...</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-xs text-gray-400">5 gün əvvəl</span>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                </svg>
                                <span class="text-xs text-gray-500">89</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="bg-gray-100 rounded-2xl overflow-hidden group cursor-pointer hover:shadow-xl transition-all duration-300">
                    <div class="aspect-square bg-gradient-to-br from-green-100 to-blue-100 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </div>
                            <p class="text-gray-500 text-sm">Instagram Post</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-600">Tamamlanmış layihənin son görüntüləri...</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-xs text-gray-400">1 həftə əvvəl</span>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                </svg>
                                <span class="text-xs text-gray-500">156</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post 4 -->
                <div class="bg-gray-100 rounded-2xl overflow-hidden group cursor-pointer hover:shadow-xl transition-all duration-300">
                    <div class="aspect-square bg-gradient-to-br from-yellow-100 to-orange-100 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-orange-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </div>
                            <p class="text-gray-500 text-sm">Instagram Post</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-600">Yeni materiallarımızın təqdimatı...</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-xs text-gray-400">2 həftə əvvəl</span>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                </svg>
                                <span class="text-xs text-gray-500">73</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="https://instagram.com/calaloglu_inshaat" target="_blank" class="bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white font-semibold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-3">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    Instagram Səhifəmizi Ziyarət Edin
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 lg:py-24 bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Arzularınızı Gerçəkləşdirməyə Hazırsınız?
            </h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Bizimlə əlaqə saxlayın və layihənizi müzakirə edək
            </p>
            <a href="/elaqe" class="bg-cyan-500 hover:bg-cyan-600 text-white font-medium py-3 px-6 rounded-lg transition-colors duration-200 inline-flex items-center gap-2">
                İndi Əlaqə Saxlayın
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </section>
</div>

<script>
// Counter Animation Function
function animateCounter(element, target, duration = 2000) {
    let start = 0;
    const increment = target / (duration / 16); // 60 FPS
    
    function updateCounter() {
        start += increment;
        if (start < target) {
            element.textContent = Math.floor(start);
            requestAnimationFrame(updateCounter);
        } else {
            element.textContent = target;
        }
    }
    
    updateCounter();
}

// Intersection Observer for triggering animations
const observerOptions = {
    threshold: 0.3,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counters = entry.target.querySelectorAll('.counter');
            counters.forEach(counter => {
                if (!counter.classList.contains('animated')) {
                    const target = parseInt(counter.getAttribute('data-target'));
                    // Small delay to ensure smooth animation
                    setTimeout(() => {
                        animateCounter(counter, target);
                        counter.classList.add('animated');
                    }, 200);
                }
            });
        }
    });
}, observerOptions);

// Function to check and animate counters
function checkAndAnimateCounters() {
    const statsSection = document.getElementById('stats-section');
    const aboutStats = document.getElementById('about-stats');
    
    // Check if elements are in viewport and animate if needed
    [statsSection, aboutStats].forEach(section => {
        if (section) {
            const rect = section.getBoundingClientRect();
            const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
            
            if (isVisible) {
                const counters = section.querySelectorAll('.counter');
                counters.forEach(counter => {
                    if (!counter.classList.contains('animated')) {
                        const target = parseInt(counter.getAttribute('data-target'));
                        animateCounter(counter, target);
                        counter.classList.add('animated');
                    }
                });
            }
        }
    });
}

// Observe stats sections and add scroll listener
document.addEventListener('DOMContentLoaded', function() {
    const statsSection = document.getElementById('stats-section');
    const aboutStats = document.getElementById('about-stats');
    
    if (statsSection) observer.observe(statsSection);
    if (aboutStats) observer.observe(aboutStats);
    
    // Also check on scroll
    window.addEventListener('scroll', checkAndAnimateCounters);
    
    // Check immediately on load
    setTimeout(checkAndAnimateCounters, 500);
    
    // Carousel functionality
    initCarousel();
});

// Carousel functionality
function initCarousel() {
    const slides = document.querySelectorAll('.carousel-slide');
    let currentSlide = 0;
    
    if (slides.length === 0) return;
    
    // Set initial state
    slides[0].classList.add('active');
    
    function showNextSlide() {
        // Remove active class from current slide
        slides[currentSlide].classList.remove('active');
        slides[currentSlide].style.opacity = '0';
        
        // Move to next slide
        currentSlide = (currentSlide + 1) % slides.length;
        
        // Show next slide with delay for smooth transition
        setTimeout(() => {
            slides[currentSlide].style.opacity = '1';
            slides[currentSlide].classList.add('active');
        }, 100);
    }
    
    // Change slide every 6 seconds for slower, more elegant transition
    setInterval(showNextSlide, 6000);
}
</script>

@endsection