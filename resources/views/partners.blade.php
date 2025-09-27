@extends('layouts.app')

@section('content')
<div class="pt-20">
    <!-- Hero Section -->
    <section class="relative py-20 lg:py-32 bg-gradient-to-br from-[#1E9BF0] to-[#9CA3AF] text-white overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    <span class="text-white/90">{{ __('partners.hero_title') }}</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto">
                    {{ __('partners.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Partners Grid -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    {{ __('partners.reliable_partners') }}
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    {{ __('partners.partners_subtitle') }}
                </p>
            </div>

            <!-- Material Suppliers -->
            <div class="mb-20">
                <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">{{ __('partners.material_suppliers') }}</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <!-- Partner 1 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-red-400 to-red-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">{{ __('partners.brick_factory') }}</h4>
                        <p class="text-gray-600 text-sm">{{ __('partners.brick_factory_desc') }}</p>
                        <div class="mt-4 text-xs text-gray-500">
                            <span class="bg-red-100 text-red-600 px-2 py-1 rounded-full">{{ __('partners.brick_tag') }}</span>
                        </div>
                    </div>

                    <!-- Partner 2 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-400 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2 2v0"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">{{ __('partners.cement_company') }}</h4>
                        <p class="text-gray-600 text-sm">{{ __('partners.cement_company_desc') }}</p>
                        <div class="mt-4 text-xs text-gray-500">
                            <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded-full">{{ __('partners.cement_tag') }}</span>
                        </div>
                    </div>

                    <!-- Partner 3 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-400 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">{{ __('partners.metal_construction') }}</h4>
                        <p class="text-gray-600 text-sm">{{ __('partners.metal_construction_desc') }}</p>
                        <div class="mt-4 text-xs text-gray-500">
                            <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full">{{ __('partners.metal_tag') }}</span>
                        </div>
                    </div>

                    <!-- Partner 4 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">{{ __('partners.insulation_materials') }}</h4>
                        <p class="text-gray-600 text-sm">{{ __('partners.insulation_materials_desc') }}</p>
                        <div class="mt-4 text-xs text-gray-500">
                            <span class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded-full">{{ __('partners.insulation_tag') }}</span>
                        </div>
                    </div>

                    <!-- Partner 5 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-400 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3H5a2 2 0 00-2 2v12a4 4 0 004 4h2a2 2 0 002-2V5a2 2 0 00-2-2z"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">{{ __('partners.tiles_ceramics') }}</h4>
                        <p class="text-gray-600 text-sm">{{ __('partners.tiles_ceramics_desc') }}</p>
                        <div class="mt-4 text-xs text-gray-500">
                            <span class="bg-purple-100 text-purple-600 px-2 py-1 rounded-full">{{ __('partners.tiles_tag') }}</span>
                        </div>
                    </div>

                    <!-- Partner 6 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-indigo-400 to-indigo-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">{{ __('partners.electrical_equipment') }}</h4>
                        <p class="text-gray-600 text-sm">{{ __('partners.electrical_equipment_desc') }}</p>
                        <div class="mt-4 text-xs text-gray-500">
                            <span class="bg-indigo-100 text-indigo-600 px-2 py-1 rounded-full">{{ __('partners.electrical_tag') }}</span>
                        </div>
                    </div>

                    <!-- Partner 7 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-teal-400 to-teal-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">{{ __('partners.paints_lacquers') }}</h4>
                        <p class="text-gray-600 text-sm">{{ __('partners.paints_lacquers_desc') }}</p>
                        <div class="mt-4 text-xs text-gray-500">
                            <span class="bg-teal-100 text-teal-600 px-2 py-1 rounded-full">{{ __('partners.paint_tag') }}</span>
                        </div>
                    </div>

                    <!-- Partner 8 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-pink-400 to-pink-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10v11M20 10v11"/>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">{{ __('partners.wood_materials') }}</h4>
                        <p class="text-gray-600 text-sm">{{ __('partners.wood_materials_desc') }}</p>
                        <div class="mt-4 text-xs text-gray-500">
                            <span class="bg-pink-100 text-pink-600 px-2 py-1 rounded-full">{{ __('partners.wood_tag') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Partners -->
            <div class="mb-20">
                <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">{{ __('partners.service_partners') }}</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service Partner 1 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">{{ __('partners.quality_control') }}</h4>
                        <p class="text-gray-600 mb-4">
                            {{ __('partners.quality_control_desc') }}
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-full">{{ __('partners.expertise_tag') }}</span>
                            <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">{{ __('partners.certificate_tag') }}</span>
                        </div>
                    </div>

                    <!-- Service Partner 2 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">{{ __('partners.project_bureau') }}</h4>
                        <p class="text-gray-600 mb-4">
                            {{ __('partners.project_bureau_desc') }}
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-purple-100 text-purple-600 text-xs px-2 py-1 rounded-full">{{ __('partners.architecture_tag') }}</span>
                            <span class="bg-orange-100 text-orange-600 text-xs px-2 py-1 rounded-full">{{ __('partners.construction_tag') }}</span>
                        </div>
                    </div>

                    <!-- Service Partner 3 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">{{ __('partners.electrical_services') }}</h4>
                        <p class="text-gray-600 mb-4">
                            {{ __('partners.electrical_services_desc') }}
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-yellow-100 text-yellow-600 text-xs px-2 py-1 rounded-full">{{ __('partners.electrical_tag') }}</span>
                            <span class="bg-red-100 text-red-600 text-xs px-2 py-1 rounded-full">{{ __('partners.license_tag') }}</span>
                        </div>
                    </div>

                    <!-- Service Partner 4 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">{{ __('partners.water_sewerage') }}</h4>
                        <p class="text-gray-600 mb-4">
                            {{ __('partners.water_sewerage_desc') }}
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-cyan-100 text-cyan-600 text-xs px-2 py-1 rounded-full">{{ __('partners.water_supply_tag') }}</span>
                            <span class="bg-teal-100 text-teal-600 text-xs px-2 py-1 rounded-full">{{ __('partners.sewerage_tag') }}</span>
                        </div>
                    </div>

                    <!-- Service Partner 5 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3H5a2 2 0 00-2 2v12a4 4 0 004 4h2a2 2 0 002-2V5a2 2 0 00-2-2z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">{{ __('partners.interior_design') }}</h4>
                        <p class="text-gray-600 mb-4">
                            {{ __('partners.interior_design_desc') }}
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-pink-100 text-pink-600 text-xs px-2 py-1 rounded-full">{{ __('partners.design_tag') }}</span>
                            <span class="bg-indigo-100 text-indigo-600 text-xs px-2 py-1 rounded-full">{{ __('partners.decoration_tag') }}</span>
                        </div>
                    </div>

                    <!-- Service Partner 6 -->
                    <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10v11M20 10v11"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">{{ __('partners.landscape_design') }}</h4>
                        <p class="text-gray-600 mb-4">
                            {{ __('partners.landscape_design_desc') }}
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">{{ __('partners.landscape_tag') }}</span>
                            <span class="bg-lime-100 text-lime-600 text-xs px-2 py-1 rounded-full">{{ __('partners.gardening_tag') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Benefits -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    {{ __('partners.partnership_benefits') }}
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    {{ __('partners.benefits_subtitle') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-white rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('partners.quality_guarantee') }}</h3>
                    <p class="text-gray-600">
                        {{ __('partners.quality_guarantee_desc') }}
                    </p>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-white rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('partners.affordable_prices') }}</h3>
                    <p class="text-gray-600">
                        {{ __('partners.affordable_prices_desc') }}
                    </p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-white rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('partners.timely_delivery') }}</h3>
                    <p class="text-gray-600">
                        {{ __('partners.timely_delivery_desc') }}
                    </p>
                </div>

                <!-- Benefit 4 -->
                <div class="bg-white rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-red-400 to-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('partners.technical_support') }}</h3>
                    <p class="text-gray-600">
                        {{ __('partners.technical_support_desc') }}
                    </p>
                </div>

                <!-- Benefit 5 -->
                <div class="bg-white rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('partners.innovation') }}</h3>
                    <p class="text-gray-600">
                        {{ __('partners.innovation_desc') }}
                    </p>
                </div>

                <!-- Benefit 6 -->
                <div class="bg-white rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-teal-400 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('partners.long_term_warranty') }}</h3>
                    <p class="text-gray-600">
                        {{ __('partners.long_term_warranty_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </section>


</div>
@endsection