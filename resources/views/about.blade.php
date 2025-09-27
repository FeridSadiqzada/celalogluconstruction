@extends('layouts.app')

@section('content')
<div class="pt-20">
    <!-- Hero Section -->
    <section class="relative py-20 lg:py-32 bg-gradient-to-br from-[#1E9BF0] to-[#9CA3AF] text-white overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    <span class="text-white/90">{{ __('about.hero_title') }}</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto">
                    {{ __('about.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        {{ __('about.our_story') }}
                    </h2>
                    <p class="text-xl text-gray-600 mb-6 leading-relaxed">
                        {{ __('about.story_desc1') }}
                    </p>
                    <p class="text-lg text-gray-600 mb-6">
                        {{ __('about.story_desc2') }}
                    </p>
                    <p class="text-lg text-gray-600 mb-8">
                        {{ __('about.story_desc3') }}
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-gray-50 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-[#1E9BF0] mb-2">350+</div>
                        <div class="text-gray-600">{{ __('about.completed_projects') }}</div>
                    </div>
                    <div class="bg-gray-50 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-[#1E9BF0] mb-2">15+</div>
                        <div class="text-gray-600">{{ __('about.years_experience') }}</div>
                    </div>
                    <div class="bg-gray-50 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-[#1E9BF0] mb-2">50+</div>
                        <div class="text-gray-600">{{ __('about.professional_workers') }}</div>
                    </div>
                    <div class="bg-gray-50 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-[#1E9BF0] mb-2">100%</div>
                        <div class="text-gray-600">{{ __('about.customer_satisfaction') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-20 lg:py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    {{ __('about.mission_vision') }}
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Mission -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('about.our_mission') }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ __('about.mission_desc') }}
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('about.our_vision') }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ __('about.vision_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    {{ __('about.our_values') }}
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    {{ __('about.values_subtitle') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('about.quality') }}</h3>
                    <p class="text-gray-600">
                        {{ __('about.quality_desc') }}
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('about.timely_delivery') }}</h3>
                    <p class="text-gray-600">
                        {{ __('about.timely_delivery_desc') }}
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('about.customer_satisfaction_value') }}</h3>
                    <p class="text-gray-600">
                        {{ __('about.customer_satisfaction_desc') }}
                    </p>
                </div>

                <!-- Value 4 -->
                <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-red-400 to-red-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('about.reliability') }}</h3>
                    <p class="text-gray-600">
                        {{ __('about.reliability_desc') }}
                    </p>
                </div>

                <!-- Value 5 -->
                <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('about.innovation') }}</h3>
                    <p class="text-gray-600">
                        {{ __('about.innovation_desc') }}
                    </p>
                </div>

                <!-- Value 6 -->
                <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-r from-teal-400 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('about.teamwork') }}</h3>
                    <p class="text-gray-600">
                        {{ __('about.teamwork_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 lg:py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    {{ __('about.our_team') }}
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    {{ __('about.team_subtitle') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('about.lead_engineer') }}</h3>
                    <p class="text-[#1E9BF0] font-medium mb-4">{{ __('about.project_management') }}</p>
                    <p class="text-gray-600 text-sm">
                        {{ __('about.lead_engineer_desc') }}
                    </p>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('about.chief_architect') }}</h3>
                    <p class="text-green-600 font-medium mb-4">{{ __('about.architectural_design') }}</p>
                    <p class="text-gray-600 text-sm">
                        {{ __('about.chief_architect_desc') }}
                    </p>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-r from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('about.structural_engineer') }}</h3>
                    <p class="text-purple-600 font-medium mb-4">{{ __('about.structural_calculations') }}</p>
                    <p class="text-gray-600 text-sm">
                        {{ __('about.structural_engineer_desc') }}
                    </p>
                </div>

                <!-- Team Member 4 -->
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-r from-red-400 to-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('about.quality_controller') }}</h3>
                    <p class="text-red-600 font-medium mb-4">{{ __('about.quality_assurance') }}</p>
                    <p class="text-gray-600 text-sm">
                        {{ __('about.quality_controller_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications & Licenses -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    {{ __('about.official_license') }}
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    {{ __('about.license_subtitle') }}
                </p>
            </div>

            <!-- Official License Display -->
            <div class="mb-16">
                <div class="flex justify-center">
                    <div class="license-card bg-white rounded-2xl shadow-xl overflow-hidden relative max-w-sm cursor-pointer hover:shadow-2xl transition-all duration-300 transform hover:scale-105" onclick="openLicenseModal()">
                        <div class="aspect-[3/4] bg-gray-100 relative">
                            <canvas id="license-canvas" class="w-full h-full object-cover" style="display: none;"></canvas>
                            <img id="license-placeholder" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDMwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzMDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xMjAgMTYwSDEwMFYxODBIMTIwVjE2MFoiIGZpbGw9IiMxRTlCRjAiLz4KPHBhdGggZD0iTTE4MCAyMDBIMTAwVjIyMEgxODBWMjAwWiIgZmlsbD0iIzlDQTNBRiIvPgo8cGF0aCBkPSJNMTYwIDI0MEgxMDBWMjYwSDE2MFYyNDBaIiBmaWxsPSIjOUNBM0FGIi8+CjxwYXRoIGQ9Ik0xNDAgMjgwSDEwMFYzMDBIMTQwVjI4MFoiIGZpbGw9IiM5Q0EzQUYiLz4KPHRleHQgeD0iMTUwIiB5PSIzNDAiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgZmlsbD0iIzZCNzI4MCIgdGV4dC1hbmNob3I9Im1pZGRsZSI+TGlzZW56aXlhPC90ZXh0Pgo8L3N2Zz4K" alt="İnşaat Lisenziyası" class="w-full h-full object-cover">
                            <div class="license-overlay absolute inset-0 bg-black bg-opacity-75 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
                                <div class="text-center">
                                    <svg class="w-12 h-12 text-white mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                    </svg>
                                    <p class="text-white font-semibold">{{ __('about.zoom_and_read') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-900 mb-2">{{ __('about.construction_license') }}</h4>
                            <p class="text-gray-600 text-sm">{{ __('about.license_desc') }}</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- PDF Modal -->
        <div id="licenseModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4">
            <div class="bg-white rounded-lg max-w-6xl w-full max-h-[90vh] overflow-hidden">
                <div class="flex justify-between items-center p-4 border-b">
                    <h3 class="text-lg font-semibold text-gray-900">{{ __('about.construction_license') }}</h3>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-2">
                            <button id="zoomOut" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 text-sm">-</button>
                            <span id="zoomLevel" class="text-sm text-gray-600 min-w-[50px] text-center">100%</span>
                            <button id="zoomIn" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 text-sm">+</button>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button id="prevPage" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 disabled:bg-gray-300 disabled:cursor-not-allowed">←</button>
                            <span id="pageInfo" class="text-sm text-gray-600">1 / 1</span>
                            <button id="nextPage" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 disabled:bg-gray-300 disabled:cursor-not-allowed">→</button>
                        </div>
                        <button id="closeLicenseModal" class="text-gray-400 hover:text-gray-600 p-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-4 h-[calc(90vh-120px)] overflow-auto" id="licenseContainer">
                    <div class="flex flex-col items-center space-y-4" id="licensePages">
                        <!-- PDF pages will be rendered here -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .license-overlay {
        transition: opacity 0.3s ease;
    }
    </style>

    <script>
    // License PDF functionality
    let licensePdf = null;
    let licensePageNum = 1;
    let licenseTotalPages = 0;
    let licenseZoom = 1.0;
    const licenseMinZoom = 0.5;
    const licenseMaxZoom = 3.0;
    const licenseZoomStep = 0.25;

    function openLicenseModal() {
        const modal = document.getElementById('licenseModal');
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        renderLicensePdf('/pdfs/licenses/Lisenziya.pdf');
    }

    function closeLicenseModal() {
        const modal = document.getElementById('licenseModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
        const pagesContainer = document.getElementById('licensePages');
        pagesContainer.innerHTML = '';
        licensePdf = null;
        licensePageNum = 1;
        licenseTotalPages = 0;
        licenseZoom = 1.0;
        updateLicenseZoomDisplay();
    }

    async function renderLicensePdf(pdfUrl) {
        try {
            const loadingTask = pdfjsLib.getDocument(pdfUrl);
            licensePdf = await loadingTask.promise;
            licenseTotalPages = licensePdf.numPages;
            licensePageNum = 1;
            
            updateLicensePageInfo();
            await renderAllLicensePages();
            
        } catch (error) {
            console.error('License PDF render error:', error);
            showLicensePdfError();
        }
    }

    async function renderAllLicensePages() {
        const pagesContainer = document.getElementById('licensePages');
        pagesContainer.innerHTML = '';
        
        if (licenseZoom === 1.0) {
            const container = document.getElementById('licenseContainer');
            const containerWidth = container.clientWidth - 32;
            const optimalZoom = Math.min(1.2, (containerWidth * 0.9) / 595);
            licenseZoom = Math.max(0.5, optimalZoom);
            updateLicenseZoomDisplay();
        }
        
        for (let pageNum = 1; pageNum <= licenseTotalPages; pageNum++) {
            try {
                const page = await licensePdf.getPage(pageNum);
                const canvas = document.createElement('canvas');
                canvas.className = 'max-w-full h-auto border shadow-lg mb-4 transition-all duration-300';
                canvas.id = `license-page-${pageNum}`;
                
                const context = canvas.getContext('2d');
                const viewport = page.getViewport({ scale: licenseZoom });
                canvas.width = viewport.width;
                canvas.height = viewport.height;
                
                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                
                await page.render(renderContext).promise;
                
                const pageLabel = document.createElement('div');
                pageLabel.className = 'text-center text-sm text-gray-500 mb-2';
                pageLabel.textContent = `Səhifə ${pageNum}`;
                
                const pageContainer = document.createElement('div');
                pageContainer.className = 'flex flex-col items-center';
                pageContainer.appendChild(pageLabel);
                pageContainer.appendChild(canvas);
                
                pagesContainer.appendChild(pageContainer);
                
            } catch (error) {
                console.error(`Error rendering license page ${pageNum}:`, error);
            }
        }
    }

    function updateLicensePageInfo() {
        const pageInfo = document.getElementById('pageInfo');
        const prevBtn = document.getElementById('prevPage');
        const nextBtn = document.getElementById('nextPage');
        
        pageInfo.textContent = `${licensePageNum} / ${licenseTotalPages}`;
        prevBtn.disabled = licensePageNum <= 1;
        nextBtn.disabled = licensePageNum >= licenseTotalPages;
    }

    function updateLicenseZoomDisplay() {
        const zoomLevel = document.getElementById('zoomLevel');
        const zoomIn = document.getElementById('zoomIn');
        const zoomOut = document.getElementById('zoomOut');
        
        zoomLevel.textContent = Math.round(licenseZoom * 100) + '%';
        zoomIn.disabled = licenseZoom >= licenseMaxZoom;
        zoomOut.disabled = licenseZoom <= licenseMinZoom;
    }

    function licenseZoomIn() {
        if (licenseZoom < licenseMaxZoom) {
            licenseZoom = Math.min(licenseMaxZoom, licenseZoom + licenseZoomStep);
            updateLicenseZoomDisplay();
            renderAllLicensePages();
        }
    }

    function licenseZoomOut() {
        if (licenseZoom > licenseMinZoom) {
            licenseZoom = Math.max(licenseMinZoom, licenseZoom - licenseZoomStep);
            updateLicenseZoomDisplay();
            renderAllLicensePages();
        }
    }

    function goToLicensePage(pageNum) {
        if (pageNum >= 1 && pageNum <= licenseTotalPages) {
            licensePageNum = pageNum;
            updateLicensePageInfo();
            
            const targetPage = document.getElementById(`license-page-${pageNum}`);
            if (targetPage) {
                targetPage.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }

    function showLicensePdfError() {
        const pagesContainer = document.getElementById('licensePages');
        pagesContainer.innerHTML = `
            <div class="flex flex-col items-center justify-center p-8 text-gray-500">
                <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-lg">Lisenziya yüklənə bilmədi</p>
                <p class="text-sm">Zəhmət olmasa yenidən cəhd edin</p>
            </div>
        `;
    }

    // Generate license thumbnail on page load
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            generateLicenseThumbnail('/pdfs/licenses/Lisenziya.pdf', 'license-canvas');
        }, 500);

        // Event listeners
        document.getElementById('closeLicenseModal').addEventListener('click', closeLicenseModal);
        document.getElementById('licenseModal').addEventListener('click', function(e) {
            if (e.target === this) closeLicenseModal();
        });
        
        document.getElementById('prevPage').addEventListener('click', () => goToLicensePage(licensePageNum - 1));
        document.getElementById('nextPage').addEventListener('click', () => goToLicensePage(licensePageNum + 1));
        document.getElementById('zoomIn').addEventListener('click', licenseZoomIn);
        document.getElementById('zoomOut').addEventListener('click', licenseZoomOut);

        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('licenseModal');
            if (!modal.classList.contains('hidden')) {
                switch(e.key) {
                    case 'Escape': closeLicenseModal(); break;
                    case 'ArrowLeft': e.preventDefault(); goToLicensePage(licensePageNum - 1); break;
                    case 'ArrowRight': e.preventDefault(); goToLicensePage(licensePageNum + 1); break;
                    case '+': case '=': e.preventDefault(); licenseZoomIn(); break;
                    case '-': e.preventDefault(); licenseZoomOut(); break;
                }
            }
        });
    });

    async function generateLicenseThumbnail(pdfUrl, canvasId) {
        try {
            const loadingTask = pdfjsLib.getDocument(pdfUrl);
            const pdf = await loadingTask.promise;
            const page = await pdf.getPage(1);
            
            const canvas = document.getElementById(canvasId);
            const context = canvas.getContext('2d');
            
            const viewport = page.getViewport({ scale: 1 });
            const scale = Math.min(300 / viewport.width, 400 / viewport.height);
            const scaledViewport = page.getViewport({ scale: scale });
            
            canvas.width = 300;
            canvas.height = 400;
            
            const offsetX = (300 - scaledViewport.width) / 2;
            const offsetY = (400 - scaledViewport.height) / 2;
            
            context.fillStyle = 'white';
            context.fillRect(0, 0, 300, 400);
            
            const renderContext = {
                canvasContext: context,
                viewport: scaledViewport,
                transform: [1, 0, 0, 1, offsetX, offsetY]
            };
            
            await page.render(renderContext).promise;
            
            const img = document.getElementById('license-placeholder');
            if (img) img.style.display = 'none';
            canvas.style.display = 'block';
            
        } catch (error) {
            console.log('License thumbnail generation failed:', error);
        }
    }
    </script>

    <!-- PDF.js Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <script>
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
    </script>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Bizimlə İşləməyə Hazırsınız?
            </h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                15+ il təcrübəmizlə layihənizi uğurla həyata keçirək. Pulsuz məsləhət üçün bizimlə əlaqə saxlayın.
            </p>
            <a href="/elaqe" class="bg-white text-[#1E9BF0] hover:bg-gray-100 font-semibold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                İndi Əlaqə Saxla
            </a>
        </div>
    </section>
</div>
@endsection