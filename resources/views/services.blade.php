@extends('layouts.app')

@section('content')
<div class="pt-20">
    <!-- Hero Section -->
    <section class="relative py-20 lg:py-32 bg-gradient-to-br from-[#1E9BF0] to-[#9CA3AF] text-white overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    {{ __('services.page_title') }}
                </h1>
                <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto">
                    {{ __('services.page_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Ev Tikintisi -->
                <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('services.house_construction') }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ __('services.house_construction_desc') }}
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.project_preparation') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.construction_works') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Açar-təslim həlli
                        </li>
                    </ul>
                    <a href="/elaqe" class="inline-flex items-center text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold group-hover:gap-3 gap-2 transition-all duration-300">
                        {{ __('services.get_quote') }}
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
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('services.villa_construction') }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ __('services.villa_construction_desc') }}
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.luxury_design') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.premium_materials') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.smart_home_systems') }}
                        </li>
                    </ul>
                    <a href="/elaqe" class="inline-flex items-center text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold group-hover:gap-3 gap-2 transition-all duration-300">
                        {{ __('services.get_quote') }}
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
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('services.renovation_works') }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ __('services.renovation_works_desc') }}
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.capital_repair') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.reconstruction') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.restoration') }}
                        </li>
                    </ul>
                    <a href="/elaqe" class="inline-flex items-center text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold group-hover:gap-3 gap-2 transition-all duration-300">
                        {{ __('services.get_quote') }}
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Dizayn Xidmətləri -->
                <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3H5a2 2 0 00-2 2v12a4 4 0 004 4h2a2 2 0 002-2V5a2 2 0 00-2-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 21v-2a4 4 0 00-4-4H9a4 4 0 00-4 4v2"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('services.design_services') }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ __('services.design_services_desc') }}
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.interior_design') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.3d_visualization') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.project_preparation') }}
                        </li>
                    </ul>
                    <a href="/elaqe" class="inline-flex items-center text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold group-hover:gap-3 gap-2 transition-all duration-300">
                        {{ __('services.get_quote') }}
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Məsləhət Xidməti -->
                <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('services.consultation_services') }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ __('services.consultation_services_desc') }}
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.technical_consultation') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.cost_estimation') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.material_selection') }}
                        </li>
                    </ul>
                    <a href="/elaqe" class="inline-flex items-center text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold group-hover:gap-3 gap-2 transition-all duration-300">
                        {{ __('services.get_quote') }}
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Layihə Hazırlanması -->
                <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('services.project_preparation_service') }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ __('services.project_preparation_desc') }}
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.architectural_project') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.construction_project') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#1E9BF0]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('services.permit_documents') }}
                        </li>
                    </ul>
                    <a href="/elaqe" class="inline-flex items-center text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold group-hover:gap-3 gap-2 transition-all duration-300">
                        {{ __('services.get_quote') }}
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                {{ __('services.cta_title') }}
            </h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                {{ __('services.cta_subtitle') }}
            </p>
            <a href="/elaqe" class="bg-white text-[#1E9BF0] hover:bg-gray-100 font-semibold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                {{ __('services.contact_now') }}
            </a>
        </div>
    </section>
</div>
@endsection