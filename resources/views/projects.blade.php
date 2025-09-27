@extends('layouts.app')

@section('content')
<div class="pt-20">
    <!-- Hero Section -->
    <section class="relative py-20 lg:py-32 bg-gradient-to-br from-[#1E9BF0] to-[#9CA3AF] text-white overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    {{ __('projects.hero_title') }}
                </h1>
                <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto">
                    {{ __('projects.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="text-3xl font-bold text-[#1E9BF0] mb-2">350+</div>
                    <div class="text-gray-600">{{ __('projects.completed_projects') }}</div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="text-3xl font-bold text-[#1E9BF0] mb-2">15+</div>
                    <div class="text-gray-600">{{ __('projects.years_experience') }}</div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="text-3xl font-bold text-[#1E9BF0] mb-2">50+</div>
                    <div class="text-gray-600">{{ __('projects.professional_staff') }}</div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="text-3xl font-bold text-[#1E9BF0] mb-2">100%</div>
                    <div class="text-gray-600">{{ __('projects.customer_satisfaction') }}</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-20 lg:py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    {{ __('projects.recent_projects_title') }}
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    {{ __('projects.recent_projects_subtitle') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Project 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 bg-gray-100 overflow-hidden">
                        <img src="{{ asset('images/baku.jpg') }}" alt="Müasir Villa - Bakı" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#1E9BF0] text-white text-xs px-3 py-1 rounded-full">{{ __('projects.villa') }}</span>
                            <span class="bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full">{{ __('projects.baku') }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('projects.modern_villa_title') }}</h3>
                        <p class="text-gray-600 mb-4">{{ __('projects.modern_villa_desc') }}</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ __('projects.area') }}:</span> 350 m²
                            </div>
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ __('projects.year') }}:</span> 2024
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-sm text-gray-600">{{ __('projects.premium_project') }}</span>
                            </div>
                            <a href="/elaqe" class="text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold text-sm">{{ __('projects.details') }} →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 bg-gray-100 overflow-hidden">
                        <img src="{{ asset('images/referans.jpg') }}" alt="Yaşayış Kompleksi - Sumqayıt" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-green-500 text-white text-xs px-3 py-1 rounded-full">{{ __('projects.complex') }}</span>
                            <span class="bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full">{{ __('projects.sumgayit') }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('projects.residential_complex_title') }}</h3>
                        <p class="text-gray-600 mb-4">{{ __('projects.residential_complex_desc') }}</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ __('projects.apartments') }}:</span> 24 ədəd
                            </div>
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ __('projects.year') }}:</span> 2023
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-600">{{ __('projects.completed') }}</span>
                            </div>
                            <a href="/elaqe" class="text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold text-sm">{{ __('projects.details') }} →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 bg-gray-100 overflow-hidden">
                        <img src="{{ asset('images/ofis.jpg') }}" alt="Ofis Binası - Gəncə" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-blue-500 text-white text-xs px-3 py-1 rounded-full">{{ __('projects.office') }}</span>
                            <span class="bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full">{{ __('projects.ganja') }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('projects.modern_office_title') }}</h3>
                        <p class="text-gray-600 mb-4">{{ __('projects.modern_office_desc') }}</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ __('projects.floors') }}:</span> 5
                            </div>
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ __('projects.year') }}:</span> 2023
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-600">{{ __('projects.completed') }}</span>
                            </div>
                            <a href="/elaqe" class="text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold text-sm">{{ __('projects.details') }} →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 bg-gray-100 overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-16 h-16 text-purple-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                <p class="text-purple-600 font-medium">Fərdi Ev Tikintisi</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-purple-500 text-white text-xs px-3 py-1 rounded-full">{{ __('projects.house') }}</span>
                            <span class="bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full">{{ __('projects.mingachevir') }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('projects.individual_house_title') }}</h3>
                        <p class="text-gray-600 mb-4">{{ __('projects.individual_house_desc') }}</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ __('projects.area') }}:</span> 200 m²
                            </div>
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ __('projects.year') }}:</span> 2022
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-600">{{ __('projects.completed') }}</span>
                            </div>
                            <a href="/elaqe" class="text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold text-sm">{{ __('projects.details') }} →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 bg-gray-100 overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-orange-100 to-red-100 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-16 h-16 text-orange-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <p class="text-orange-600 font-medium">Təmir İşləri</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-orange-500 text-white text-xs px-3 py-1 rounded-full">{{ __('projects.renovation') }}</span>
                            <span class="bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full">{{ __('projects.sheki') }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('projects.capital_renovation_title') }}</h3>
                        <p class="text-gray-600 mb-4">{{ __('projects.capital_renovation_desc') }}</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ __('projects.type') }}:</span> {{ __('projects.capital_renovation') }}
                            </div>
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ __('projects.year') }}:</span> 2022
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-600">{{ __('projects.completed') }}</span>
                            </div>
                            <a href="/elaqe" class="text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold text-sm">{{ __('projects.details') }} →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 bg-gray-100 overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-teal-100 to-cyan-100 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-16 h-16 text-teal-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                                <p class="text-teal-600 font-medium">Lüks Villa</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-teal-500 text-white text-xs px-3 py-1 rounded-full">{{ __('projects.villa') }}</span>
                            <span class="bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full">{{ __('projects.quba') }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('projects.luxury_villa_title') }}</h3>
                        <p class="text-gray-600 mb-4">{{ __('projects.luxury_villa_desc') }}</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ __('projects.area') }}:</span> 500 m²
                            </div>
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ __('projects.year') }}:</span> 2021
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-sm text-gray-600">{{ __('projects.premium_project') }}</span>
                            </div>
                            <a href="/elaqe" class="text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold text-sm">{{ __('projects.details') }} →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    {{ __('projects.process_title') }}
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    {{ __('projects.process_subtitle') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white font-bold text-xl">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('projects.consultation_title') }}</h3>
                    <p class="text-gray-600">
                        {{ __('projects.consultation_desc') }}
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white font-bold text-xl">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('projects.project_title') }}</h3>
                    <p class="text-gray-600">
                        {{ __('projects.project_desc') }}
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white font-bold text-xl">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('projects.construction_title') }}</h3>
                    <p class="text-gray-600">
                        {{ __('projects.construction_desc') }}
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white font-bold text-xl">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('projects.delivery_title') }}</h3>
                    <p class="text-gray-600">
                        {{ __('projects.delivery_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                {{ __('projects.cta_title') }}
            </h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                {{ __('projects.cta_subtitle') }}
            </p>
            <a href="/elaqe" class="bg-white text-[#1E9BF0] hover:bg-gray-100 font-semibold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                {{ __('projects.contact_now') }}
            </a>
        </div>
    </section>
</div>
@endsection